(function($) {
	  

/* --------- HOMEPAGE FLEXSLIDER -------- */  
	
	$(window).load(function() {
	
    $('.flexslider').flexslider({
      animation: "slide",
      controlsContainer: ".flex-container",
	  directionNav: false, 
	  animationSpeed: 900,
	  slideshowSpeed: 7000
	 
    });
	
	$('.right-nav').click(function () {
    	$('.flexslider').flexslider("next")
	});

	$('.left-nav').click(function () {
    	$('.flexslider').flexslider("prev")
	});
	
	});

  
/* --------- CLIENTS --------  */


 $(function() {
        $("div.holder-our-clients").jPages({
            containerID : "ourclients",
            perPage     : 5,
			pause		: 5000,
            first       : false,
        	previous    : false,
        	next        : false,
        	last        : false,
        	links       : "blank"
        });
    });

    $(function(){
    $("li:last-child").addClass("last_item");
    });

/* --------- MOBILE HOVER CLICK -------- */  

	
})(jQuery)

