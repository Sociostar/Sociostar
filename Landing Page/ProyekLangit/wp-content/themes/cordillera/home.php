<?php
/**
 * The blog list template
 *
 * @since cordillera 1.0.0
 */

get_header();

         global $cordillera_sidebar ;
         $cordillera_sidebar          = get_post_meta($wp_query->get_queried_object_id(), '_cordillera_layout', true );
		    switch($cordillera_sidebar){
			case "left":
			get_template_part("roop","left-sidebar");
			break;
			case "right":
			get_template_part("roop","right-sidebar");
			break;
			case "both":
			get_template_part("roop","both-sidebar");
			break;
			case "none":
			get_template_part("roop","no-sidebar");
			break;
			default:
			get_template_part("content","blog-list");
			break;
			}


 get_footer();
 