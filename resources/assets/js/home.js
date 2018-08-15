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
		hash[$(this)[0].hash] =  $($(this)[0].hash).offset().top - navHeight;
	})

	$( window ).scroll(function() {
		let selectedItem = $('body').inViewItem();
		$(".navbar .active").removeClass("active");
		$(".navbar .nav-link").filter("[href='"+selectedItem+"']").addClass("active");
	});

  $(".navbar-nav .nav-link").on("click", function(event){
      event.preventDefault();
      let focusedNavLink = $(this);
      $('.navbar-collapse').hide();
      $('.dropdown-menu').hide();
      let topValue = hash[$(this)[0].hash];

      $('html, body').animate({
            scrollTop: topValue
      }, 400, function() {
           $(".navbar .active").removeClass("active");
           focusedNavLink.addClass("active");
      });
  });

  $(".navbar-brand").on("click", function(event){
      event.preventDefault();
      $('.navbar-collapse').hide();
      $('.dropdown-menu').hide();
      $(".navbar .active").removeClass("active");
      $('html, body').animate({
            scrollTop: 0
      }, 400);
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


