
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

$(function() {

  $(".navbar-toggler").on("click", function(event) {
      event.preventDefault();
      $('.navbar-collapse').toggle();
  });


  if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $('.paraxify').removeClass('paraxify');
  }
  
})





