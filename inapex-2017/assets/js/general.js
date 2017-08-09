( function($) {
	var str = location.href.toLowerCase();
    $(".menu ul li a").each(function() {
       	if (str.indexOf(this.href.toLowerCase()) > -1) {
            $('.menu ul li a.active').removeClass("active");
            $(this).addClass("active");
        }
    });

   	$('.menu-right').on('click', function(){
        if ($('.menu-mobile-ins').css('display') == 'none') {
            $('.menu-mobile-ins').slideDown();
        }else{
            $('.menu-mobile-ins').slideUp();
        }
    });
      
    $('a.search-btn').on('click', function(){
       	$('.search-field').fadeIn();
    });

    $('a.closex').on('click', function(){
       	$('.search-field').fadeOut();
    });
   	$(document).keydown(function(e) {
      // ESCAPE key pressed
     	if (e.keyCode == 27) {
          $('.search-field').fadeOut();
      }
      $(window).scroll(function(){
        	if ($(window).scrollTop() >= 2780) {
              $('.ads-sidebar').addClass('fixed');
        	}else{
              $('.ads-sidebar').removeClass('fixed');
        	}
  	   });
    });
})(jQuery);