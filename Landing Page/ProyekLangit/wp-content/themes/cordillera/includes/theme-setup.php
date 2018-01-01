<?php


function cordillera_tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

add_action('pre_get_posts', 'cordillera_tags_support_query');

function cordillera_setup(){
	global $content_width;
	$lang = get_template_directory(). '/languages';
	load_theme_textdomain('cordillera', $lang);
	add_theme_support( 'post-thumbnails' ); 
	$args = array();
	$header_args = array( 
	    'default-image'          => '',
		'default-repeat' => 'no-repeat',
        'default-text-color'     => '555',
		'url'                    => '',
        'width'                  => 1920,
        'height'                 => 72,
        'flex-height'            => true
     );
	add_theme_support( 'custom-background', $args );
	add_theme_support( 'custom-header', $header_args );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('nav_menus');
	add_theme_support( "title-tag" );
	register_nav_menus( array('primary' => __( 'Primary Menu', 'cordillera' )));
	add_editor_style("editor-style.css");
	add_image_size( 'cordillera_portfolio_thumb', 480, 360 , true);
	add_image_size( 'cordillera_widget_blog', 720, 480 , true);
	if ( !isset( $content_width ) ) $content_width = 1170;
	
	
}

add_action( 'after_setup_theme', 'cordillera_setup' );


 function cordillera_custom_scripts(){
	 global $is_IE;
	 $theme_info = wp_get_theme();
	wp_enqueue_style('cordillera-bootstrap',  get_template_directory_uri() .'/css/bootstrap.css', false, '4.0.3', false);
    wp_enqueue_style('cordillera-font-awesome',  get_template_directory_uri() .'/css/font-awesome.min.css', false, '4.3.0', false);
	wp_enqueue_style('cordillera-carousel',  get_template_directory_uri() .'/css/owl.carousel.css', false, '1.3.2', false);
	wp_enqueue_style( 'cordillera-prettyPhoto',  get_template_directory_uri() .'/css/prettyPhoto.css', false, '3.1.5', false );
	wp_enqueue_style('cordillera-shortcode',  get_template_directory_uri() .'/css/shortcode.css', false, $theme_info->get( 'Version' ), false);
	wp_enqueue_style( 'cordillera-main', get_stylesheet_uri(), array(), $theme_info->get( 'Version' ));
	wp_enqueue_style('montserrat', esc_url('//fonts.googleapis.com/css?family=Open+Sans:300,400,700|Yanone+Kaffeesatz'), false, '', false );
	
   $header_image      = get_header_image();

   $header_background = ""  ;
   $cordillera_custom_css = "";
	if (isset($header_image) && ! empty( $header_image )) {
	$cordillera_custom_css .= "header#header{background:url(".$header_image. ") no-repeat;}\n";
	}
    if ( 'blank' != get_header_textcolor() && '' != get_header_textcolor() ){
     $header_textcolor       =  ' color:#' . get_header_textcolor() . ';';
	 $cordillera_custom_css .=  '.logo-box .site-tagline,.logo-box .site-name {'.$header_textcolor.'}';
		}
	$global_color           =  cordillera_options_array("global_color");
	
	if( !$global_color )
	{
		$global_color = "#19cbcf";
		}

    $cordillera_custom_css .= 'a:active,
a:hover {
	color: '.$global_color.';
}

mark,
ins {
	background: '.$global_color.';
}

::selection {
	background: '.$global_color.';
}

::-moz-selection {
	background: '.$global_color.';
}

.highlight {
	color: '.$global_color.';
}

.search-form input[type="submit"] {
	background-color: '.$global_color.';
}

.site-nav > ul > li:hover > a {
	color: '.$global_color.';
	border-bottom-color: '.$global_color.';
}

.site-nav li > ul > li:hover > a {
	color: '.$global_color.';
}

.homepage-slider .carousel-caption button {
	background-color: '.$global_color.';
}

.homepage-slider .carousel-caption button:hover {
	background-color: darken('.$global_color.', 5%);
}

.homepage-slider .carousel-indicators li.active {
	border-color: '.$global_color.';
	color: '.$global_color.';
}

.service-box i {
	background-color: '.$global_color.';
}

.service-box:hover a {
	color: '.$global_color.';
}

.slogan-box {
	border-top-color: '.$global_color.';
}

.btn-normal {
	background-color: '.$global_color.';
}

.btn-normal:hover {
	background-color: darken('.$global_color.', 10%);
}

.btn-normal.line:hover {
	background-color: #fff;
	color: '.$global_color.';
}

.testimonial-content {
	border-top-color: '.$global_color.';
}

.testimonial-content i {
	color: '.$global_color.';
}

.contact-form input[type="submit"] {
	background-color: '.$global_color.';
}

.contact-form input[type="submit"]:hover {
	background-color: darken('.$global_color.', 5%);
}

.contact-form input:focus,
.contact-form textarea:focus {
	border-color: '.$global_color.';
	color: '.$global_color.';
}

footer {
	background-color: '.$global_color.';
}

.entry-meta a:hover {
	color: '.$global_color.';
}

.entry-title-dec {
	border-bottom-color: '.$global_color.';
}

a .entry-title:hover {
	color: '.$global_color.';
}

.entry-more:hover {
	color: '.$global_color.';
}

.list-pagition a:hover {
	background-color: '.$global_color.';
}

.entry-summary a,
.entry-content a {
	color: '.$global_color.';
}

.comment-form input:focus,
.comment-form textarea:focus {
	border-color: '.$global_color.';
	color: '.$global_color.';
}

.form-submit input {
	background-color: '.$global_color.';
}

.form-submit input:hover {
	background-color: darken('.$global_color.', 5%);
}

.widget-box a:hover {
	color: '.$global_color.';
}

.widget-slider .carousel-indicators li {
	border-color: '.$global_color.';
}

.widget-slider .carousel-indicators li.active {
	background-color: '.$global_color.';
}

.widget-post .widget-post-box a:hover {
	color: '.$global_color.';
}

.widget-box > ul > li,
.widget-post > ul > li {
	border-right-color: '.$global_color.';
}
.portfolio-img-box {
background-color: '.$global_color.';
}
.bloglist-box {
background-color: '.$global_color.';
}
.footer-widget-area .widget-sns i:hover {
color: '.$global_color.';
}
';
	
	

	$custom_css           =  cordillera_options_array('custom_css','.top-banner-caption h1 {
	font-size: 8em;
}

.top-banner-caption h2 {
	font-size: 5em;
}

@media screen and (max-width: 1024px) {
	.top-banner-caption h1 {
		font-size: 6em;
	}
	.top-banner-caption h2 {
		font-size: 4em;
	}
}

@media screen and (max-width: 768px) {
	.top-banner-caption {
		margin-top: 100px;
	}
	.top-banner-caption h1 {
		font-size: 5em;
	}
	.top-banner-caption h2 {
		font-size: 3em;
	}
}

@media screen and (max-width: 640px) {
	.top-banner-caption h1 {
		font-size: 4em;
	}
	.top-banner-caption h2 {
		font-size: 2em;
	}
}');
	
	
	$cordillera_custom_css  .=  $custom_css;
	
	$cordillera_custom_css = esc_html( $cordillera_custom_css );
	
	wp_add_inline_style( 'cordillera-main', $cordillera_custom_css );
	
	

	wp_enqueue_script( 'cordillera-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ), '3.0.3', false );
	wp_enqueue_script( 'cordillera-respond', get_template_directory_uri().'/js/respond.min.js', array( 'jquery' ), '1.4.2', false );
	wp_enqueue_script( 'cordillera-carousel', get_template_directory_uri().'/js/owl.carousel.js', array( 'jquery' ), '1.3.2', false );
	wp_enqueue_script( 'cordillera-modernizr', get_template_directory_uri().'/js/modernizr.custom.js', array( 'jquery' ), '2.8.2', false );
	wp_enqueue_script( 'cordillera-prettyPhoto',  get_template_directory_uri() .'/js/jquery.prettyPhoto.js', array( 'jquery' ), '3.1.5', true );
	
	$home_banner_type = cordillera_options_array("home_banner_type",1);
	if( $home_banner_type == 2 && is_front_page() )
	wp_enqueue_script( 'cordillera-bigvideo', get_template_directory_uri().'/js/jquery.tubular.1.0.js', array( 'jquery' ), '1.0.0', true );
	
	wp_enqueue_script( 'cordillera-main', get_template_directory_uri().'/js/cordillera.js', array( 'jquery' ), $theme_info->get( 'Version' ), true );
	
	//background video
	$enable_home_page   = cordillera_options_array('enable_home_page');
	$home_banner        = cordillera_options_array('enable_home_slider');


	
	if( $is_IE ) {
	wp_enqueue_script( 'cordillera-html5', get_template_directory_uri().'/js/html5.js', array( 'jquery' ), '', false );
	}
	
		wp_localize_script( 'cordillera-main', 'cordillera_params',  array(
			'ajaxurl'        => admin_url('admin-ajax.php'),
			'themeurl' => CORDILLERA_THEME_BASE_URL,
		)  );
		
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){wp_enqueue_script( 'comment-reply' );}
	}
   
   function cordillera_admin_script(){
	   if( isset($_GET['page']) && $_GET['page'] == 'cordillera-options' )
	   {
		   $theme_info = wp_get_theme();
		   wp_enqueue_script( 'cordillera-bootstrap-tooltip', get_template_directory_uri().'/js/bootstrap-tooltip.js', array( 'jquery' ), '2.3.2', true );
		   wp_enqueue_script( 'cordillera-bootstrap-confirmation', get_template_directory_uri().'/js/bootstrap-confirmation.js', array( 'jquery' ), '1.0.1', true );
           wp_enqueue_script( 'cordillera-admin', get_template_directory_uri().'/js/admin.js', array( 'jquery' ), $theme_info->get( 'Version' ), true );
		   }
	   
	   }
   if (!is_admin()) {
  add_action( 'wp_enqueue_scripts', 'cordillera_custom_scripts' );
  }
   else{
	 add_action( 'admin_enqueue_scripts', 'cordillera_admin_script' );
	   }



function cordillera_of_get_option($name, $default = false) {
	
	// Gets the unique option id
	$option_name = optionsframework_option_name();
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
		
	}
}

function cordillera_of_get_options($default = false) {

	// Gets the unique option id
	$option_name = optionsframework_option_name();
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options) ) {
		return $options;
	} else {
		return $default;
	}
}

global $cordillera_options;
$cordillera_options = cordillera_of_get_options();


function cordillera_options_array($name,$default = false){
	global $cordillera_options;
	if(isset($cordillera_options[$name]) && $cordillera_options[$name] != "" )
	return $cordillera_options[$name];
	else
	return $default;
}




/* 
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'cordillera_optionsframework_custom_scripts');

function cordillera_optionsframework_custom_scripts() { 

}

add_filter('options_framework_location','cordillera_options_framework_location_override');

function cordillera_options_framework_location_override() {
	return array('includes/admin-options.php');
}

function cordillera_optionscheck_options_menu_params( $menu ) {
	
	$menu['page_title'] = __( 'Cordillera Options', 'cordillera');
	$menu['menu_title'] = __( 'Cordillera Options', 'cordillera');
	$menu['menu_slug'] = 'cordillera-options';
	return $menu;
}
add_filter( 'optionsframework_menu', 'cordillera_optionscheck_options_menu_params' );


add_action('admin_init','cordillera_optionscheck_change_santiziation', 100);
function cordillera_optionscheck_change_santiziation() {
    remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
    add_filter( 'of_sanitize_textarea', 'cordillera_custom_sanitize_textarea' );
}
function cordillera_custom_sanitize_textarea($input) {
    global $allowedposttags;
    $custom_allowedtags["embed"] = array(
      "src" => array(),
      "type" => array(),
      "allowfullscreen" => array(),
      "allowscriptaccess" => array(),
      "height" => array(),
      "width" => array()
      );
      $custom_allowedtags["script"] = array();
      $custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
      $output = wp_kses( $input, $custom_allowedtags);
    return $output;
}


function cordillera_admin_init(){
if(isset($_POST['widget-area']) && is_array($_POST['widget-area'])){
	$cordillera_list_item = json_encode($_POST['widget-area']);
	update_option("_cordillera_home_widget_area",$cordillera_list_item );
	}

if ( isset( $_POST['reset'] ) ) {
	 $output = array();
 $location = apply_filters( 'options_framework_location', array('admin-options.php') );

	        if ( $optionsfile = locate_template( $location ) ) {
	            $maybe_options = require_once $optionsfile;
	            if ( is_array( $maybe_options ) ) {
					$options = $maybe_options;
	            } else if ( function_exists( 'optionsframework_options' ) ) {
					$options = optionsframework_options();
				}
	        }
			
		if(isset($options)){
			$config  =  $options;
			foreach ( (array) $config as $option ) {
			
				if(isset($option['id']) && $option['id']=='home_page_sections'){
					update_option("_cordillera_home_widget_area",$option['std'] );
					}
				}
			
		}

		}
}
add_action('admin_init', 'cordillera_admin_init');

function cordillera_init(){
	global $cordillera_home_sections;
	$cordillera_home_sections = get_option('_cordillera_home_widget_area');
	}
add_action('init', 'cordillera_init');