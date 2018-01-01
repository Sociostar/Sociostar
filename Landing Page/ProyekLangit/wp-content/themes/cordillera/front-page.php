<?php
/**
* The front page template
*
*/
get_header();
global $enable_home_page;
//if ( 'posts' == get_option( 'show_on_front' ) ) {
 //   get_template_part("home");
//} else {
    if( $enable_home_page == "1"){
	get_template_part( 'featured-content' );
	}
	else{
	 get_template_part("home");
	 }
  // }
 
 get_footer();