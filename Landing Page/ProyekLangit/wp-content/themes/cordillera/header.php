<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php wp_head();?>
</head>
<?php
global $enable_home_page;
$banner = "";
$home_banner_type = cordillera_options_array("home_banner_type",1);
$enable_home_page = cordillera_options_array("enable_home_page");
 if( is_front_page() ){
	  $class      = "homepage";
	  $banner     = cordillera_get_banner($home_banner_type);
	 } 
	 else
	 {
	  $class      = "sitepage";
	 }

?>
<body <?php body_class($class); ?>>

<?php echo $banner; ?>
		
		<header id="header">
			<div class="container">
				<div class="logo-box text-left">
					<?php if ( cordillera_options_array('logo')) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url( cordillera_options_array('logo') ); ?>" class="site-logo" alt="<?php bloginfo('name'); ?>" />
        </a>
        <?php } else{?>
         
					<div class="name-box">
                    <?php if ( 'blank' != get_header_textcolor() && '' != get_header_textcolor() ){?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-name"><?php bloginfo('name'); ?></h1></a>
						<span class="site-tagline"><?php echo  get_bloginfo( 'description' );?></span>
                         <?php }?>
					</div>
                    <?php }?>
				</div>
				<button class="site-nav-toggle">
					<span class="sr-only"><?php _e("Toggle navigation","cordillera");?></span>
					<i class="fa fa-bars fa-2x"></i>
				</button>
				<nav class="site-nav" role="navigation">
					<?php 
					 wp_nav_menu(array('theme_location'=>'primary','depth'=>0,'fallback_cb' =>false,'container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s <li class="main-search-item">
							<a href="javascript:;">
								<i class="fa fa-search site-search-toggle"></i>
							</a>
							'.get_search_form().'
						</li></ul>'));
					?>
				</nav>
			</div>
		</header>
        <div class="sticky-header">
        
        <div class="container">
				<div class="logo-box text-left">         
					<div class="name-box">
                     <?php if ( 'blank' != get_header_textcolor() && '' != get_header_textcolor() ){?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-name"><?php bloginfo('name'); ?></h1></a>
                          <?php }?>
					</div>
       
				</div>
				<button class="site-nav-toggle">
					<span class="sr-only"><?php _e("Toggle navigation","cordillera");?></span>
					<i class="fa fa-bars fa-2x"></i>
				</button>
				<nav class="site-nav" role="navigation">
					<?php 
					 wp_nav_menu(array('theme_location'=>'primary','depth'=>0,'fallback_cb' =>false,'container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s <li class="main-search-item">
							<a href="javascript:;">
								<i class="fa fa-search site-search-toggle"></i>
							</a>
							'.get_search_form().'
						</li></ul>'));
					?>
				</nav>
			</div>
        </div>