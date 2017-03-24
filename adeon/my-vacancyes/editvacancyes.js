$(document).ready(function() {
	$ = jQuery;

	var id = $_GET('id');
	if(!id.lenght) {
		//alert('No id insert');
		//return;
	}

	$.ajax({
		type: "GET",
		url: "/adeon/my-vacancyes/edit.php",
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		data: 'id='+id,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				var src = stockPhotoUrl;
				if(obj.has_photo) {
					src = "https://urbanconsulting.md/vac_data/users/"+obj.wp_username+"/"+id+".jpg?"+(new Date()).getTime();
				}

				$(".vac-photo img").attr("src", src);
				$("#vac-form input[name='vac-id']").val(id);
				$("#vac-form input[name='vac-name']").val(obj.name);
				$("#vac-form input[name='vac-spec']").val(obj.spec);
				$("#vac-form textarea[name='vac-info']").html(obj.info);
				$("#vac-form select[name='vac-category'] option[value='"+obj.category+"']").prop('selected', true);
				if(parseInt(obj.qual)) $("#vac-form input[name='vac-qual']").attr("checked",true);
				if(parseInt(obj.unqual)) $("#vac-form input[name='vac-unqual']").attr("checked",true);

				if(obj.state == 0) {
					$("#vac-status2").css("display", "block");
					$("#vac-status2").append(" Причина: "+obj.msg);
				}
				else if(obj.state == 1){
					$("#vac-status1").css("display", "block");
				}
				else {
					$("#vac-status3").css("display", "block");
				}
					
				indexToPopulate("vac-country", "vac-city", obj.country, obj.city);
				toggleForm("#vac-form", true);
			}
			else {
				alert("Ошибка: "+obj.error);
			}
		},
		error: function(error) {
			alert("Ошибка при получении данных. "+error.status+": "+error.statusText);
		}
	});
});

$('#vac-photo').change(function() {
	var reader = new FileReader();
	reader.onload = function (e) {
		$('.photo-profile img').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
});

$("#vac-form").submit(function(e) {
	e.preventDefault();

	if($("#vac-form #vac-country").val() == -1) {
		alert("Ошибка: Необходимо выбрать страну.");
		return;
	}
	
	if($("#vac-form #vac-city").val() == -1) {
		alert("Ошибка: Необходимо выбрать город.");
		return;
	}
	
	if(!validateForm("#vac-form")) {
		alert("Ошибка: Данные в форме заполнены неправильно.");
		return;
	}
	
	var photo = document.getElementById('vac-photo');
	if(photo.files.lenght) {
		if(photo.files[0].size > 500000) {
			alert("Ошибка: Изображение не должно превышать размер в 500кб.");
			return;
		}
	}
	
	var formData = new FormData($(this)[0]);
	toggleForm("#vac-form", false);
	
	$.ajax({
		type: "POST",
		url: "/adeon/my-vacancyes/edit.php",
		data: formData,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				location.reload();
			} 
			else {
				alert("Ошибка: "+obj.error);
				toggleForm("#vac-form", true);
				console.log(obj);
			}
		},
		error: function(error) {
			alert("Ошибка при отправке данных. "+error.status+": "+error.statusText);
			toggleForm("#vac-form", true);
		}
	});
});