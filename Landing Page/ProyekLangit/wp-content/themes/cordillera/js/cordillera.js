 jQuery(document).ready(function($){
 
             $(".site-nav-toggle").click(function(){
				$(".site-nav").toggle();
			});
			$(".site-search-toggle").click(function(){
				$(".site-nav .search-form").toggle();
			});
			
			
			$('.clients img,.widget-sns > li > a').tooltip('hide');
			
			
            var winWidth = $(window).width();
			var winHeight=$(window).height();
			
			if( $(".top-banner").length ){
			$(".top-banner").width(winWidth).height(winHeight);
			winWidth+="px";
			winHeight+="px";
			//$(".homepage header#header").css("margin-top",winHeight);
			}
			$(window).resize(function() {
				var windowWidth = $(window).width(); 		
				if( windowWidth > 919){
					$(".site-nav").show();
					}
            })
	//fixed header
	$(window).scroll(function(){
   if( $(".top-banner").length ){
	var winHeight=$(window).height();		  
     }
	 else{
		 var winHeight = 0;
		 }
    if( $("body.admin-bar").length){
		if( $(window).width() < 765) {
				stickyTop = 46;
				
			} else {
				stickyTop = 32;
			}
	  }
	  else{
		  stickyTop = 0;
		  }
		  $('.sticky-header').css('top',stickyTop);
					var scrollTop = $(window).scrollTop(); 
				if ( scrollTop > winHeight + stickyTop ) { 
				if( !$(".top-banner").length ){
					$('header#header').hide();
				}
					$('.sticky-header').show();
					} else {
						if( !$(".top-banner").length ){
						$('header#header').show(); 
						}
						$('.sticky-header').hide();
					}   
     });
	
	//prettyPhoto
	 $("a[rel^='portfolio-image']").prettyPhoto();	 
	 
	 	//carousel
	
	$(".cordillera-carousel").each(function(){
	 var items = $(this).data("num");
	 if( typeof items === 'undefined' || items === '' || items === '0' )
	 {
		 items = 4;
		 }
	 $(this).owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : items,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
	  navigation:true,
	  pagination:false,
	  navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
 
  });
	 });
	
		//video background
								
  if(typeof cordillera_bigvideo !== 'undefined' && cordillera_bigvideo!=null){

	for(var i=0;i<cordillera_bigvideo.length;i++){
		$(cordillera_bigvideo[i].video_section_item).tubular(cordillera_bigvideo[i].options);
	   }
   }
  var sectionIndex = 1;
  $(".homepage  .section").each(function(){
	if( $(this).find("#tubular-container").length > 0){
		if( sectionIndex>1 ){
		jQuery(this).find("#tubular-container").css({'position':'static'});
		}

		}	
		sectionIndex++;
 });
	
 });
 
