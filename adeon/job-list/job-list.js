function drawData(obj) {
	for(var i = 0; i < obj.data.length; i++) {
		var photo_src = "https://urbanconsulting.md/wp-content/uploads/2017/03/camera.png";
		if(obj.data[i].has_photo) {
			photo_src = "https://urbanconsulting.md/vac_data/users/"+obj.data[i].wp_username+"/"+obj.data[i].id+".jpg?"+(new Date()).getTime();
		}

		var htmlForm = '\
		<li class="cf">\
			<div class="col-4 my-vacancyes__image">\
				<img src="'+photo_src+'" alt="">\
			</div>\
			<div class="col-8">\
				<div class="col-12 my-vacancyes__title">\
					<h3>'+obj.data[i].name+'</h3>\
				</div>\
				<div class="col-12 my-vacancyes__description">\
					<p class="country">Страна: '+getCountryName(obj.data[i].country)+'</p>\
					<p class="country">Город: '+getCityName(obj.data[i].country, obj.data[i].city)+'</p>\
					<p class="description">'+obj.data[i].info+'</p>\
				</div>\
				<div class="col-12 ul-info cf more-btn">\
					<div class="col-6">\
						<p class="date-bot-left">'+obj.data[i].date+'</p>\
					</div>\
					<div class="col-6">\
						<a href="https://urbanconsulting.md/job/job-list/view-vac?id='+obj.data[i].id+'" target="_blank"><input id="test" class="btn-vacancyes more-link" type="submit" value="Подробнее"></a>\
					</div>\
				</div>\
			</div>\
		</li>';

		$("#vac-append").append(htmlForm);
	}
}

$(document).ready(function() {
	$ = jQuery;

	populateCountries("vac-country", "vac-city");

	$.ajax({
		type: "GET",
		url: "/adeon/job-list/job-list.php",
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			var obj = JSON.parse(data);
			$("#vac-append").empty();
			if(obj.error === undefined) {
				console.log(obj);

				if(obj.data === null) {
					$("#vac-append").append("Нет данных");
				}
				else {
					drawData(obj);
				}
			}
			else {
				alert("Ошибка: "+obj.error);
			}
		},
		error: function(error) {
			alert("Ошибка при получении данных. ("+error.status+": "+error.statusText+")");
		}
	});
});

$("#vac-form").submit(function(e) {
	e.preventDefault();

	var country = document.getElementById('vac-country').value;
	var city = document.getElementById('vac-city').value;
	var spec = document.getElementById('vac-spec').value;
	var category = document.getElementById('vac-category').value;
	var qual = $('#vac-qual').is(':checked') ? 1 : 0;
	var unqual = $('#vac-unqual').is(':checked') ? 1 : 0;

	toggleForm("#vac-form", false);
	$("#vac-append").empty();
	$("#vac-append").append('<img src="/img/loading.svg" alt="" />');

	$.ajax({
		type: "GET",
		url: "/adeon/job-list/job-list.php",
		data: "spec="+spec+"&country="+country+"&city="+city+"&category="+category+"&qual="+qual+"&unqual="+unqual,
		async: true,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			console.log(data);
			var obj = JSON.parse(data);
			$("#vac-append").empty();
			if(obj.error === undefined) {
				if(obj.data === null) {
					$("#vac-append").append("Нет данных");
				}
				else {
					drawData(obj);
				}
			}
			else {
				alert("Ошибка: "+obj.error);
			}
			toggleForm("#vac-form", true);
		},
		error: function(error) {
			alert("Ошибка при получении данных. ("+error.status+": "+error.statusText+")");
			toggleForm("#vac-form", true);
		}
	});
});
