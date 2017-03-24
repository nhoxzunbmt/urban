"use strict";
$(document).ready(function () {
	$ = jQuery;
	$(window).on('scroll', function() {
		$('header.header').toggleClass('header-active', $(document).scrollTop() >= 70);
	});

	// section usp, page steps-jobs.html
	$('.show-bts').click(function(){
	  $('.bts').slideDown(700);
	})

	// profile img upload
	function myFunction() {
	  var upload = document.createElement("INPUT");
	  upload.setAttribute("type", "file");
	  document.body.appendChild(upload);
	}

	$( "#open" ).click(function() {
	  if($("#open").hasClass("close-contact-form")) {
		$( ".contact-form" ).animate({ "right": "-290px" });
		$("#open").addClass("open-contact-form");
		$("#open").removeClass("close-contact-form");
	  }
	  else {
		$( ".contact-form" ).animate({ "right": "10px" } );
		$("#open").addClass("close-contact-form");
		$("#open").removeClass("open-contact-form");
	  }
	});

	$( ".qtranxs_widget").hover(function() {
	$( ".language-chooser-item:not(.active)" ).fadeIn( 200, function() {
	}).css("display","inline");
	}, function() {
	$( ".language-chooser-item:not(.active)" ).fadeOut( 200, function() {
	});
	});

	// my-vacancyes li slideToggle class .toggle

	// $('.my-vacancyes li').click(function(toggle) {
	//   $('.toggle').slideToggle(700);
	// })
});
