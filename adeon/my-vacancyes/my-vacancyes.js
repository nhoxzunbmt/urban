$(document).ready(function() {
	$ = jQuery;

	$.ajax({
		type: "GET",
		url: "/adeon/my-vacancyes/my-vacancyes.php",
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
					for(var i = 0; i < obj.data.length; i++) {
						var src = "https://urbanconsulting.md/wp-content/uploads/2017/03/camera.png";
						if(obj.data[i].has_photo) {
							src = "https://urbanconsulting.md/vac_data/users/"+obj.data[i].wp_username+"/"+obj.data[i].id+".jpg?"+(new Date()).getTime();
						}
				
						var htmlForm = '\
							<li>\
								<div class="col-2 photo">\
									<div class="align">\
										<a href="#"><img src="'+src+'" alt=""></a>\
									</div>\
								</div>\
								<div class="col-9 description">\
									<div class="align"><a href="https://urbanconsulting.md/job/add-vacancy/edit?id='+obj.data[i].id+'">'+obj.data[i].name+'</a></div><br>\
								</div>\
								<div class="col-1 trash">\
									<div class="align">\
										<a href="javascript:test(\''+obj.data[i].id+'\',\''+obj.data[i].wp_username+'\');"><img src="/img/recycle-bin.png" alt=""></a>\
									</div>\
								</div>\
							</li>';
								
						$("#vac-append").append(htmlForm);
					}
				}
			}
			else {
				alert("Ошибка: "+obj.error);
				console.log(obj);
			}
		},
		error: function(error) {
			alert("Îøèáêà ïðè ïîëó÷åíèè äàííûõ. ("+error.status+": "+error.statusText+")");
		}
	});
	
	
});

function test(id, wp_username) {
	$.ajax({
		type: "POST",
		url: "/adeon/my-vacancyes/delete.php",
		async: true,
		cache: false,
		processData: false,
		data: "id="+id+"&wp_username="+wp_username,
		success: function(data) {

			var obj = JSON.parse(data);
			if(obj.error === undefined) {
				console.log(obj);
				if(obj.data === null) {
					location.reload();
				}
				else {
					location.reload();
				}
			}
			else {
				alert("Ошибка: "+obj.error);
				console.log(obj);
			}
		},
		error: function(error) {
			alert("Ошибка при получении. ("+error.status+": "+error.statusText+")");
		}
	});
}