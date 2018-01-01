<?php

define( 'CORDILLERA_THEME_BASE_URL', get_template_directory_uri());
define( 'CORDILLERA_OPTIONS_FRAMEWORK', get_template_directory().'/admin/' ); 
define( 'CORDILLERA_OPTIONS_FRAMEWORK_URI',  CORDILLERA_THEME_BASE_URL. '/admin/'); 
define('CORDILLERA_OPTIONS_PREFIXED' ,'cordillera_');

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/' );
require_once dirname( __FILE__ ) . '/admin/options-framework.php';
require_once get_template_directory() . '/includes/admin-options.php';


/**
 * Mobile Detect Library
 **/
load_template( trailingslashit( get_template_directory() ) . 'includes/Mobile_Detect.php' );

 
/**
 * Required: include options framework.
 */
 
 
load_template( trailingslashit( get_template_directory() ) . 'admin/options-framework.php' );

/**
 * Theme setup
 */
 
 
load_template( trailingslashit( get_template_directory() ) . 'includes/theme-setup.php' );

/**
 * Theme Functions
 */
 
load_template( trailingslashit( get_template_directory() ) . 'includes/theme-functions.php' );



/**
 * Theme breadcrumb
 */
load_template( trailingslashit( get_template_directory() ) . 'includes/breadcrumb-trail.php');
/**
 * Theme widget
 */
 
load_template( trailingslashit( get_template_directory() ) . 'includes/theme-widget.php' );
/**
 * Theme Metabox
 */
 
load_template( trailingslashit( get_template_directory() ) . 'includes/metabox-options.php' );


