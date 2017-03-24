function drawData(obj) {
	for(var i = 0; i < obj.data.length; i++) {
		var photo_src = stockPhotoUrl;

		if(obj.data[i].has_photo) {
			photo_src = "https://urbanconsulting.md/cv_data/users/"+obj.data[i].wp_username+"/photo.jpg?"+(new Date()).getTime();
		}

		var htmlForm = ' <li class="cf">\
		<div class="cf">\
			<div class="col-4">\
				<div class="photo-profile">\
					<img src="'+photo_src+'" alt="">\
				</div>\
			</div>\
			<div class="col-8">\
				<div class="info-profile">\
					<h2>ПРИВЕТ, Я '+obj.data[i].name+'</h2>\
					<h3>'+obj.data[i].spec+'</h3>\
					<p>'+obj.data[i].info+'</p>\
					<div class="col-12 ul-info cf">\
						<div class="col-6">\
							<ul class="info">\
								<li>Возраст: <strong>'+obj.data[i].age+'</strong></li>\
								<li>Адрес: <strong>'+obj.data[i].address+'</strong></li>\
								<li>Email: <strong>'+obj.data[i].email+'</strong></li>\
							</ul>\
						</div>\
						<div class="col-6">\
							<ul class="info">\
								<li>Страна: <strong>'+getCountryName(obj.data[i].country)+'</strong></li>\
								<li>Город: <strong>'+getCityName(obj.data[i].country, obj.data[i].city)+'</strong></li>\
								<li>Телефон: <strong>'+obj.data[i].phone+'</strong></li>\
							</ul>\
						</div>\
					</div>\
					<div class="col-12 ul-info cf more-btn">\
						<div class="col-6">\
							<p class="date-bot-left">'+obj.data[i].date+'</p>\
						</div>\
						<div class="col-6">\
							<a href="https://urbanconsulting.md/job/resume/view-cv?id='+obj.data[i].id+'" target="_blank">\
								<input id="test" class="btn-vacancyes more-link" href="google.com" type="submit" value="Подробнее">\
							</a>\
						</div>\
					</div>\
				</div>\
			</div>\
		</div>\
		</li>\
		';

		$("#resume-append").append(htmlForm);
	}
}

$(document).ready(function() {
	$ = jQuery;

	populateCountries("resume-country", "resume-city");

	$.ajax({
		type: "GET",
		url: "/adeon/resume/resume.php",
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			$("#resume-append").empty();
			if(obj.error === undefined) {
				if(obj.data === null) {
					$("#resume-append").append("Нет данных");
				}
				else {
					drawData(obj);
				}
			}
			else {
				alert("Ошибка: "+obj.error);
				console.log(obj);
			}
		},
		error: function(error) {
			alert("Ошибка при получении данных. ("+error.status+": "+error.statusText+")");
		}
	});
});

$("#resume-form").submit(function(e) {
	e.preventDefault();

	var spec = document.getElementById('resume-spec').value;
	var country = document.getElementById('resume-country').value;
	var city = document.getElementById('resume-city').value;

	toggleForm("#resume-form", false);
	$("#resume-append").empty();
	$("#resume-append").append('<img src="/img/loading.svg" alt="" />');

	$.ajax({
		type: "GET",
		url: "/adeon/resume/resume.php",
		data: "spec="+spec+"&country="+country+"&city="+city,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			$("#resume-append").empty();
			if(obj.error === undefined) {
				if(obj.data === null) {
					$("#resume-append").append("Нет данных");
				}
				else {
					drawData(obj);
				}
			}
			else {
				alert("Ошибка: "+obj.error);
			}
			toggleForm("#resume-form", true);
		},
		error: function(error) {
			alert("Ошибка при получении данных. ("+error.status+": "+error.statusText+")");
			toggleForm("#resume-form", true);
		}
	});
});
