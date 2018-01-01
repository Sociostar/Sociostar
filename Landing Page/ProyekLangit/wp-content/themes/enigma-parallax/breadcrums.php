<div class="enigma_header_breadcrum_title" style="<?php if(get_theme_mod('side_menu_option') =='side') { echo 'padding-top: 125px ' ;}?>">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php if(get_theme_mod('enigma_options_breadcrums_title') == "") { ?>
			<h1><?php if(!is_home()) the_title(); ?></h1> <?php } ?>
				<!-- BreadCrumb -->
                <?php if (function_exists('enigma_parallax_breadcrumbs')) enigma_parallax_breadcrumbs(); ?>
                <!-- BreadCrumb -->
			</div>
		</div>
	</div>	
</div>