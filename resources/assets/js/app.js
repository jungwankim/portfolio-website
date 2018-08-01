
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const hash = {};

$.fn.inViewItem = function () {
	let stack = [];
    let currentY = window.scrollY;
    $.each(hash, function(select, value) {
       	if (currentY >= value) {
    		stack.push(select);
    		return true;
    	}
    	else {
    		return false;
    	}
    });
    return(stack.pop());
};

$(function() {
	const navHeight = $('.navbar').height();
	const items = $(".navbar-nav .nav-link");

	$.each(items, function() {
		hash[$(this)[0].hash] = $($(this)[0].hash).offset().top - navHeight;
	})

	$( window ).scroll(function() {
		let selectedItem = $('body').inViewItem();
		$(".navbar .active").removeClass("active");
		$(".navbar .nav-link").filter("[href='"+selectedItem+"']").addClass("active");
	});

  $(".navbar-nav .nav-link").on("click", function(event){
    event.preventDefault();
      $(".navbar .active").removeClass("active");
      $(this).addClass("active");
      $('.navbar-collapse').hide();
      $('.dropdown-menu').hide();
      let topValue = hash[$(this)[0].hash];
      window.scrollTo({ top: topValue, behavior: "smooth"});
  });

  $(".navbar-brand").on("click", function(event){
      event.preventDefault();
      $('.navbar-collapse').hide();
      $('.dropdown-menu').hide();
      $(".navbar .active").removeClass("active");
      window.scrollTo({ top: 0, behavior: "smooth"});
   });

  $(".navbar-toggler").on("click", function(event) {
      event.preventDefault();
      $('.navbar-collapse').toggle();
  });

  $(".dropdown-toggle").on("click", function(event) {
      event.preventDefault();
      $('.dropdown-menu').toggle();
  });

  if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $('.paraxify').removeClass('paraxify');
  }
})





