$(document).ready(function() {
	$ = jQuery;

	$.ajax({
		type: "GET",
		url: "/adeon/cv/cv.php",
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				var photo_src = stockPhotoUrl;
				
				if(obj.data === null) {
					$(".photo-profile img").attr("src", photo_src);
					populateCountries("cv-country", "cv-city");
				}
				else {
					if(obj.has_photo) {
						photo_src = "https://urbanconsulting.md/cv_data/users/"+obj.wp_username+"/photo.jpg?"+(new Date()).getTime();
					}
					
					$(".photo-profile img").attr("src", photo_src);
					$("#cv-form input[name='cv-name']").val(obj.name);
					$("#cv-form input[name='cv-spec']").val(obj.spec);
					$("#cv-form textarea[name='cv-info']").html(obj.info);
					$("#cv-form input[name='cv-age']").val(obj.age);
					$("#cv-form input[name='cv-address']").val(obj.address);
					$("#cv-form input[name='cv-email']").val(obj.email);
					$("#cv-form input[name='cv-phone']").val(obj.phone);
					
					switch(parseInt(obj.state)) {
						case 0: {
							$("#cv-status0").css("display", "block");
							break;
						}
						
						case 1: {
							$("#cv-status1").css("display", "block");
							break;
						}
						
						case 2: {
							$("#cv-status2").css("display", "block");
							$("#cv-status2").append(" Причина: "+obj.msg);
							break;
						}
					}
	
					indexToPopulate("cv-country", "cv-city", obj.country, obj.city);
				}
				
				toggleForm("#cv-form", true);
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

$('#cv-photo').change(function() {
	var reader = new FileReader();
	reader.onload = function (e) {
		$('.photo-profile img').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
});

$("#cv-form").submit(function(e) {
	e.preventDefault();
	
	if(!validateEmail($("#cv-form input[name='cv-email']").val())) {
		alert("Ошибка: Неверный формат email.");
		return;
	}
	
	if(!validatePhone($("#cv-form input[name='cv-phone']").val())) {
		alert("Ошибка: Неверный формат телефона. Телефон необходимо записать в интернациональном формате.");
		return;
	}

	if($("#cv-form #cv-country").val() == -1) {
		alert("Ошибка: Необходимо выбрать страну.");
		return;
	}
	
	if($("#cv-form #cv-city").val() == -1) {
		alert("Ошибка: Необходимо выбрать город.");
		return;
	}
	
	if(!validateForm("#cv-form")) {
		alert("Ошибка: Данные в форме заполнены неправильно.");
		return;
	}
	
	var photo = document.getElementById('cv-photo');
	if(photo.files.lenght) {
		if(photo.files[0].size > 500000) {
			alert("Ошибка: Изображение не должно превышать размер в 500кб.");
			return;
		}
	}
	
	var formData = new FormData($(this)[0]);
	toggleForm("#cv-form", false);
	
	$.ajax({
		type: "POST",
		url: "/adeon/cv/cv.php",
		data: formData,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				location.reload();
			} 
			else {
				alert("Ошибка: "+obj.error);
				toggleForm("#cv-form", true);
			}
		},
		error: function(error) {
			alert("Ошибка при отправке данных. "+error.status+": "+error.statusText);
			toggleForm("#cv-form", true);
		}
	});
});