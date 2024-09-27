


  $(".carousel").carousel({
  interval: 5000
  });
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
  
  $(document).ready(function() {
  $(".owl-demo").owlCarousel({ 
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2]
  }); 
 });


jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 500,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

$("a[href^='#form_option']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});