$(document).ready(function() {
	$ = jQuery;
	
	var id = $_GET('id');
	if(!id.length) {
		alert("Ошибка: Параметры заданы неверно");
		return;
	}
	
	$.ajax({
		type: "GET",
		url: "/adeon/view-cv/view-cv.php",
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		data: "id="+id,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				var photo_src = stockPhotoUrl;
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
				
				indexToPopulate("cv-country", "cv-city", obj.country, obj.city);
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