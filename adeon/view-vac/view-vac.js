$(document).ready(function() {
	$ = jQuery;
	
	var id = $_GET('id');
	if(!id.length) {
		alert("Ошибка: Параметры заданы неверно");
		return;
	}
	
	$.ajax({
		type: "GET",
		url: "/adeon/view-vac/view-vac.php",
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
					photo_src = "https://urbanconsulting.md/vac_data/users/"+obj.wp_username+"/"+id+".jpg?"+(new Date()).getTime();
				}
					
				$(".vac-photo img").attr("src", photo_src);
				$("#vac-form input[name='vac-id']").val(id);
				$("#vac-form input[name='vac-name']").val(obj.name);
				$("#vac-form input[name='vac-spec']").val(obj.spec);
				$("#vac-form textarea[name='vac-info']").html(obj.info);
				$("#vac-form select[name='vac-category'] option[value='"+obj.category+"']").prop('selected', true);
				if(parseInt(obj.qual)) $("#vac-form input[name='vac-qual']").attr("checked",true);
				if(parseInt(obj.unqual)) $("#vac-form input[name='vac-unqual']").attr("checked",true);
				
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