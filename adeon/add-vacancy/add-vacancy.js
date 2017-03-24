$(document).ready(function() {
	$ = jQuery;

	populateCountries("vac-country", "vac-city");
	toggleForm("#vac-form", true);
});

$(".vac-photo input[name='vac-photo']").change(function() {
	var reader = new FileReader();
	reader.onload = function (e) {
		$('.vac-photo img').attr('src', e.target.result);
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
		url: "/adeon/add-vacancy/add-vacancy.php",
		data: formData,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				window.history.back();
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