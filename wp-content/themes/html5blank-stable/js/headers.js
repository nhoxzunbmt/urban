function headers() {
	if(window.location.href.indexOf("ro/job") > -1) {
       window.location.href = "https://urbanconsulting.md/ro/job/";
    } else if(window.location.href.indexOf("ru/job") > -1) {
    	window.location.href = "https://urbanconsulting.md/ru/job/";
    } else alert("Это не Jobs");
}