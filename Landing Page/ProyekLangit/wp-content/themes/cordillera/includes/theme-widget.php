<?php
// global $wp_registered_sidebars;
#########################################
function cordillera_widgets_init() {
		register_sidebar(array(
			'name' => __('Default Sidebar', 'cordillera'),
			'id'   => 'default_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		register_sidebar(array(
			'name' => __('Displayed Everywhere', 'cordillera'),
			'id'   => 'displayed_everywhere',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		register_sidebar(array(
			'name' => __('Post Left Sidebar', 'cordillera'),
			'id'   => 'post_left_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		register_sidebar(array(
			'name' => __('Post Right Sidebar', 'cordillera'),
			'id'   => 'post_right_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		register_sidebar(array(
			'name' => __('Page Left Sidebar', 'cordillera'),
			'id'   => 'page_left_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		register_sidebar(array(
			'name' => __('Page Right Sidebar', 'cordillera'),
			'id'   => 'page_right_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		
		register_sidebar(array(
			'name' => __('Archive Sidebar', 'cordillera'),
			'id'   => 'archive_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		
		register_sidebar(array(
			'name' => __('Page 404 Right Sidebar', 'cordillera'),
			'id'   => 'page_404_right_sidebar',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
		
		
	
	global $cordillera_home_sections;
	$cordillera_home_sections = get_option('_cordillera_home_widget_area');	
    if( !$cordillera_home_sections ){
	$cordillera_home_sections = '{
  "section-widget-area-name":["'.__("Home Page Section","cordillera").' 1","'.__("Home Page Section","cordillera").' 2","'.__("Home Page Section","cordillera").' 3","'.__("Home Page Section","cordillera").' 4","'.__("Home Page Section","cordillera").' 5","'.__("Home Page Section","cordillera").' 6"],
  "section-widget-id":["home-page-section-0","home-page-section-1","home-page-section-2","home-page-section-3","home-page-section-4","home-page-section-5"],
  "list-item-color":["","#eee","","","",""],
  "list-item-image":["","","","","",""],
  "list-item-repeat":["","","","","",""],
  "list-item-position":["","","","","",""],
  "list-item-attachment":["","","","","",""],
  "widget-area-padding":["50","50","50","50","50","50"],
  "widget-area-layout":["boxed","full","full","boxed","full","boxed"],
  "widget-area-column":["4","1","1","1","1","1"],
  "widget-area-column-item":{"home-page-section-0":["3","3","3","3"],
  "home-page-section-1":["12"],"home-page-section-2":["12"],
  "home-page-section-3":["12"],"home-page-section-4":["12"],
  "home-page-section-5":["12"]}}';
	}

    $home_sections_array = json_decode($cordillera_home_sections, true);
		
    if(isset($home_sections_array['section-widget-area-name']) && is_array($home_sections_array['section-widget-area-name']) ){
	$num = count($home_sections_array['section-widget-area-name']);
	for($i=0; $i<$num; $i++ ){
	
	$areaname          = isset($home_sections_array['section-widget-area-name'][$i])?$home_sections_array['section-widget-area-name'][$i]:"Section ".$i;
	$sanitize_areaname = sanitize_title($areaname);
	$widget_id         = isset($home_sections_array['section-widget-id'][$i])?$home_sections_array['section-widget-id'][$i]:'home-page-section-'.$i;
	
	$color             = isset($home_sections_array['list-item-color'][$i])?$home_sections_array['list-item-color'][$i]:"";
	$image             = isset($home_sections_array['list-item-image'][$i])?$home_sections_array['list-item-image'][$i]:"";
	$repeat            = isset($home_sections_array['list-item-repeat'][$i])?$home_sections_array['list-item-repeat'][$i]:"";
	$position          = isset($home_sections_array['list-item-position'][$i])?$home_sections_array['list-item-position'][$i]:"";
	$attachment        = isset($home_sections_array['list-item-attachment'][$i])?$home_sections_array['list-item-attachment'][$i]:"";
	$layout            = isset($home_sections_array['widget-area-layout'][$i])?$home_sections_array['widget-area-layout'][$i]:"";
	$padding           = isset($home_sections_array['widget-area-padding'][$i])?$home_sections_array['widget-area-padding'][$i]:"";
	$column            = isset($home_sections_array['widget-area-column'][$i])?$home_sections_array['widget-area-column'][$i]:"";
	$columns           = isset($home_sections_array['widget-area-column-item'][$widget_id])? $home_sections_array['widget-area-column-item'][$widget_id]:array("12");
	


	$j                = 1;
	$column_num       = count($columns);
		 foreach($columns as $widget){
			 if($column_num > 1){
				 $widget_name = sprintf(__('%s Column %d','cordillera'),$areaname,$j);
				 $widget_id   = $widget_id.'-'.$j;
				 }else{
				 $widget_name = $areaname;
				// $widget_id   = $widget_id ;
				 }

			
			register_sidebar(array(
			'name' => esc_attr($widget_name),
			'id'   => $widget_id,
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h3 class="widgettitle">', 
			'after_title' => '</h3>'
			));
			
			$j++;
		  
		   }
		 
	   }
	  }
	
	register_sidebar(array(
			'name' => __('Footer Area One', 'cordillera'),
			'id'   => 'footer_widget_1',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
	register_sidebar(array(
			'name' => __('Footer Area Two', 'cordillera'),
			'id'   => 'footer_widget_2',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
	register_sidebar(array(
			'name' => __('Footer Area Three', 'cordillera'),
			'id'   => 'footer_widget_3',
			'before_widget' => '<div id="%1$s" class="widget widget-box %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></div>', 
			'before_title' => '<h2 class="widget-title">', 
			'after_title' => '</h2>' 
			));
	
    register_widget('cordillera_blog');
	register_widget('cordillera_button');
	register_widget('cordillera_carousel');
	register_widget('cordillera_divider');
	register_widget('cordillera_portfolio');
	register_widget('cordillera_service'); // 2 styles for pro version
	register_widget('cordillera_sidebar_slider');
	register_widget('cordillera_social_icons');
	register_widget('cordillera_title');
	register_widget('cordillera_testimonial');

	
}
add_action( 'widgets_init', 'cordillera_widgets_init' );



/**************************************************************************************/

/**
 * Home page divider widget
 */
 class cordillera_button extends WP_Widget {
 	function cordillera_button() {
 		$widget_ops = array( 'classname' => 'widget_button', 'description' => __( 'Button widget.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'Cordillera: Button', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
	
 	$defaults = array('btn_icon' => 'fa-download','btn_text'=>'Button','btn_style'=>'1','btn_link'=>'','new_window'=>'yes'); 		
	$instance = wp_parse_args( (array) $instance, $defaults ); 
	?>
    

		   <p>
         <label for="<?php echo $this->get_field_id( 'btn_style'  ); ?>"><?php _e('Button Style', 'cordillera'); ?>:</label>
             <select id="<?php echo $this->get_field_id( 'btn_style' ); ?>" name="<?php echo $this->get_field_name( 'btn_style' ); ?>">
          
           <option   value="1" <?php echo selected("1",esc_attr( $instance[ 'btn_style'] )) ;?>><?php _e('Style 1', 'cordillera'); ?></option>
          <option   value="2" <?php echo selected("2",esc_attr( $instance[ 'btn_style'] )) ;?>><?php _e('Style 2', 'cordillera'); ?></option>
            </select>
            </p>
            
            <p>
               <label for="<?php echo $this->get_field_id( 'btn_icon'  ); ?>"><?php _e('Button Icon', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'btn_icon'  ); ?>" name="<?php echo $this->get_field_name( 'btn_icon'  ); ?>" value="<?php echo esc_attr($instance['btn_icon']); ?>" class="" placeholder="<?php _e('Font Awesome Icon', 'cordillera'); ?>"/>
            </p>
              <p>
               <label for="<?php echo $this->get_field_id( 'btn_text'  ); ?>"><?php _e('Button Text', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'btn_text'  ); ?>" name="<?php echo $this->get_field_name( 'btn_text'  ); ?>" value="<?php echo esc_attr($instance['btn_text']); ?>" class="" placeholder=""/>
            </p>
             <p>
               <label for="<?php echo $this->get_field_id( 'btn_link'  ); ?>"><?php _e('Button Link', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'btn_link'  ); ?>" name="<?php echo $this->get_field_name( 'btn_link'  ); ?>" value="<?php echo esc_url($instance['btn_link']); ?>" class="" placeholder=""/>
            </p>
            <p>
         <label for="<?php echo $this->get_field_id( 'new_window'  ); ?>"><?php _e('Open in New Window', 'cordillera'); ?>:</label>
             <select id="<?php echo $this->get_field_id( 'new_window' ); ?>" name="<?php echo $this->get_field_name( 'new_window' ); ?>">
          
           <option   value="yes" <?php echo selected("yes",esc_attr( $instance[ 'new_window'] )) ;?>><?php _e('yes', 'cordillera'); ?></option>
          <option   value="no" <?php echo selected("no",esc_attr( $instance[ 'new_window'] )) ;?>><?php _e('no', 'cordillera'); ?></option>
            </select>
            </p>
            
		<?php

	}

 function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
        $instance[ 'btn_icon']  = esc_attr( $new_instance['btn_icon' ] );
		$instance[ 'btn_text']  = esc_attr( $new_instance['btn_text' ] );
		$instance[ 'btn_style']  = esc_attr( $new_instance['btn_style' ] );
		$instance[ 'btn_link']  = esc_url_raw( $new_instance['btn_link' ] );
        $instance[ 'new_window']  = esc_attr( $new_instance['new_window' ] );
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
		echo $before_widget;
		$btn_icon = isset($btn_icon) ? $btn_icon:'';
		$btn_text = isset($btn_text) ? $btn_text:'Button';
		$btn_style = isset($btn_style) ? $btn_style:'1';
		$btn_link = isset($btn_link) ? $btn_link:'';
		$new_window = isset($new_window) ? $new_window:'yes';
		
	
		$css_class = "";
		$icon  = "";
		if( $btn_style == '2'){
			$css_class = "line";
			}
		if( $btn_icon != ""){
			$icon = '<i class="fa '.esc_attr($btn_icon).'"></i>';
			}
			
		$return = '<button class="btn-normal '.$css_class.'">'.$icon.' '.esc_attr($btn_text).'</button>';
		if( $btn_link !=""){
			$target = "_blank";
			if( $new_window == "no")
			$target = "";
			$return = '<a href="'.esc_url($btn_link).'" target="'.$target.'">'.$return.'</a>';
			}
		echo $return;
		echo $after_widget;
 	}
 }
/**************************************************************************************/ 

/**
 * Service widget
 */

class cordillera_service extends WP_Widget {
 	function cordillera_service() {
 		$widget_ops = array( 'classname' => 'widget_service', 'description' => __( 'Display service. Best for homepage section one ', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'Cordillera: Service', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
	$defaults['service_icon_type'] = 'font';
    $defaults['service_font_icon'] = 'fa-leaf';
	$defaults['service_image_icon'] = '';
    $defaults['service_title'] = '';
	$defaults['service_link'] = '';
	$defaults['service_text'] = '';
	$instance = wp_parse_args( (array) $instance, $defaults ); 
	
	?>
   
		<p>
         <label for="<?php echo $this->get_field_id( 'service_icon_type'  ); ?>"><?php _e('Icon Type', 'cordillera'); ?>:</label>
             <select id="<?php echo $this->get_field_id( 'service_icon_type' ); ?>" name="<?php echo $this->get_field_name( 'service_icon_type' ); ?>">
          
           <option   value="font" <?php echo selected("font",esc_attr( $instance[ 'service_icon_type'] )) ;?>><?php _e('font', 'cordillera'); ?></option>
          <option   value="image" <?php echo selected("image",esc_attr( $instance[ 'service_icon_type'] )) ;?>><?php _e('image', 'cordillera'); ?></option>
            </select>
            </p>
             <p>
               <label for="<?php echo $this->get_field_id( 'service_font_icon' ); ?>"><?php _e('Font Awesome Icon', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'service_font_icon'   ); ?>" name="<?php echo $this->get_field_name(  'service_font_icon'   ); ?>" value="<?php echo esc_attr( $instance[ 'service_font_icon' ] ); ?>" class="" /> 
            </p>
                      
             <p>
               <label for="<?php echo $this->get_field_id( 'service_image_icon' ); ?>"><?php _e('Image Icon Url', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'service_image_icon'   ); ?>" name="<?php echo $this->get_field_name(  'service_image_icon'   ); ?>" value="<?php echo esc_url( $instance[ 'service_image_icon' ] ); ?>" class="" /> 
            </p>
              <p>
               <label for="<?php echo $this->get_field_id( 'service_title' ); ?>"><?php _e('Title', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'service_title'   ); ?>" name="<?php echo $this->get_field_name(  'service_title'   ); ?>" value="<?php echo esc_attr( $instance[ 'service_title' ] ); ?>" class="" /> 
            </p>   
            <p>
               <label for="<?php echo $this->get_field_id( 'service_link' ); ?>"><?php _e('Title Link', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'service_link'   ); ?>" name="<?php echo $this->get_field_name(  'service_link'   ); ?>" value="<?php echo esc_url( $instance[ 'service_link' ] ); ?>" class="" /> 
            </p>  
            <p>
            <label for="<?php echo $this->get_field_id( 'service_text'  ); ?>"><?php _e('Content', 'cordillera'); ?>:</label>
            <textarea id="<?php echo $this->get_field_id( 'service_text'  ); ?>"  name="<?php echo $this->get_field_name( 'service_text'  ); ?>" class=""><?php echo esc_textarea($instance['service_text']); ?></textarea>
            </p>
            
		<?php
	}


	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
	
		$instance['service_icon_type'] = esc_attr( $new_instance['service_icon_type'] );
	    $instance['service_font_icon'] = esc_attr( $new_instance['service_font_icon'] );
		$instance['service_image_icon'] = esc_url( $new_instance['service_image_icon'] );
		$instance['service_title'] = esc_attr( $new_instance['service_title'] );
		$instance['service_link'] = esc_url_raw( $new_instance['service_link'] );
		
		if ( current_user_can('unfiltered_html') )
			$instance[ 'service_text']  = $new_instance['service_text'];
		else
		   $instance[ 'service_text']  = stripslashes( wp_filter_post_kses( addslashes($new_instance['service_text']) ) );

		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
       echo $before_widget;
 	   if( $service_icon_type == "font" ){
		   $icon = '<i class="fa '.esc_attr($service_font_icon).'"></i>';
		   }
		   else{
			$icon = '<image src="'.esc_url($service_image_icon).'" alt="'.esc_attr($service_title).'" />';
			   }
		if( $service_link != "" ){
		   $title = '<a href="'.esc_url($service_link).'"><h3>'.esc_attr($service_title).'</h3></a>';
		   }
		   else{
			$title = '<h3>'.esc_attr($service_title).'</h3>';
			   }
 		echo '<div class="service-box text-center">
								'.$icon.'
								'.$title.'
								<p>'.esc_textarea($instance['service_text']).'</p>
							</div>';
			
		
		echo $after_widget;
 	
 }
}

   
/**************************************************************************************/

/**
 * Home page divider widget
 */
 class cordillera_divider extends WP_Widget {
 	function cordillera_divider() {
 		$widget_ops = array( 'classname' => 'widget_divider', 'description' => __( 'Divider for each row.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'Cordillera: Divider', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
	
 	$defaults = array('height' => '10'); 		
	$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		
            <p>
               <label for="<?php echo $this->get_field_id( 'height'  ); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Height', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'height'  ); ?>" name="<?php echo $this->get_field_name( 'height'  ); ?>" value="<?php echo absint($instance['height']); ?>" class="" placeholder="<?php _e('Divider height', 'cordillera'); ?>"/> px
            </p>
            
            
		<?php

	}

 function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
        $instance[ 'height']  = absint( $new_instance['height' ] );

		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
		$height = isset($height) ? $height : '10';
		$height = absint($height);
		echo $before_widget;
		echo '<div class="divider" style="height:'.$height.'px"></div>';
		echo $after_widget;
 	}
 }
 
 
 /**************************************************************************************/


/**
 * title widget
 */
 class cordillera_title extends WP_Widget {
 	function cordillera_title() {
 		$widget_ops = array( 'classname' => 'widget_title', 'description' => __( 'Display section title.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Section Title', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
	
 	$defaults = array('title' => '','sub_title'=>''); 		
	$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		
             <p>
               <label for="<?php echo $this->get_field_id( 'title'  ); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Title', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'title'  ); ?>" name="<?php echo $this->get_field_name( 'title'  ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="" /> 
            </p>
            
             <p>
               <label for="<?php echo $this->get_field_id( 'sub_title'  ); ?>"><?php _e('Sub-Title', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'sub_title'  ); ?>" name="<?php echo $this->get_field_name( 'sub_title'  ); ?>" value="<?php echo esc_attr( $instance['sub_title'] ); ?>" class="" /> 
            </p>
            
            
		<?php

	}

 function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
        $instance[ 'title']       =  esc_attr($new_instance['title' ]) ;
		$instance[ 'sub_title']   =  esc_attr($new_instance['sub_title' ]) ;

		return $instance;
	}
	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
		$title = isset($title) ? $title : '';
		$sub_title = isset($sub_title) ? $sub_title : '';
		
		$title      = esc_attr( $title ) ;
	    $sub_title  = esc_attr( $sub_title ) ;
	   
		echo $before_widget;
		echo '<div class="title-wrapper text-center">
							<h2 class="module-title">'.$title.'</h2>
							<p class="module-description">'.$sub_title.'</p>
						</div>';
		echo $after_widget;
 	}
 }

/**************************************************************************************/

/**
 * portfolio widget
 */
 
class cordillera_portfolio extends WP_Widget {
 	function cordillera_portfolio() {
 		$widget_ops = array( 'classname' => 'widget_portfolio', 'description' => __( 'Display pages as portfolio.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Portfolio', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
		$defaults['columns'] = "4";
		for($i=0;$i<12;$i++){
		$defaults['portfolio_'.$i] = '';
	}
		$instance = wp_parse_args( (array) $instance, $defaults ); 
	?>
    
     <p><label for="<?php echo $this->get_field_id( 'columns' ); ?>"><?php _e( 'columns', 'cordillera' ); ?>:</label>
		  <select id="<?php echo $this->get_field_id( 'columns' ); ?>" name="<?php echo $this->get_field_name( 'columns' ); ?>">
           <?php 
		
		   for( $i =1; $i<=4; $i++ ){
			   ?>
           <option value="<?php echo esc_attr( $i );?>" <?php echo selected($i,$instance[ 'columns']) ;?>><?php echo absint( $instance[ 'columns']);?></option>
           <?php }?>
            </select>
        </p>
                
     <?php

	for($i=0;$i<12;$i++){
		$defaults['portfolio_'.$i] = '';
	}
	$instance = wp_parse_args( (array) $instance, $defaults ); 
	
	for($i=0;$i<12;$i++){
	?>
     
            
		 <p><label for="<?php echo $this->get_field_id( 'portfolio_'.$i ); ?>"><?php printf(__( 'Page  %s', 'cordillera' ),($i+1)); ?>:</label>
				<?php wp_dropdown_pages( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'portfolio_'.$i ), 'selected' => absint($instance[ 'portfolio_'.$i] )) ); ?></p>
                      
            
<?php
	
	}

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['columns'] = absint( $new_instance['columns'] );
		for($i=0;$i<12;$i++){
		$instance['portfolio_'.$i] = absint( $new_instance['portfolio_'.$i] );
	   }
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
		$columns = isset($columns) ? $columns : '4';
		for($i=0;$i<12;$i++){
		$instance['portfolio_'.$i] = isset($instance['portfolio_'.$i]) ? $instance['portfolio_'.$i] : '';
	   }

 		global $post;
 		$page_array = array();
		$icon_array = array();
 		for( $i=0; $i<12; $i++ ) {
 			$var = 'portfolio_'.$i;
 			$page_id = isset( $instance[ $var ] ) ? absint($instance[ $var ]) : '';
			 			
 			if( !empty( $page_id ) &&  $page_id > 0 )
 				array_push( $page_array, $page_id );// Push the page id in the array
 		}
		$get_portfolio_pages = new WP_Query( array(
			'posts_per_page' 			=> -1,
			'post_type'					=>  array( 'page' ),
			'post__in'		 			=> $page_array,
			'orderby' 		 			=> 'post__in'
		) ); 
		echo $before_widget;
		$j        = 0;

		switch($columns){
			case 1:
			$column = "12";
			break;
			case 2:
			$column = "6";
			break;
			case 3:
			$column = "4";
			break;
			case 4:
			$column = "3";
			break;
			default:
			$columns = "4";
			$column = "3";
			break;
			}
		
		$item   = "";
		$return = "";
		echo '<div class="portfolio">';
		if(count($page_array)>0){
			$i = 1;
	    while( $get_portfolio_pages->have_posts() ):$get_portfolio_pages->the_post();
				

 if ( has_post_thumbnail() ) { 

								
 $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "cordillera_portfolio_thumb" );
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
	 
       $item .= '<div class="col-sm-6 col-md-'.$column.'">';
		
	  $item .=  '<div class="portfolio-box text-center">
									<div class="portfolio-img-box">
										<img src="'.$thumbnail[0].'" alt="" />
										<div class="portfolio-info-box">
											<div class="portfolio-icon-box">
												<a href="'.$image[0].'" rel="portfolio-image"><i class="fa fa-search"></i></a>
												<a href="'.get_permalink().'"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
								</div>';
		 $item .= '</div>';		
								if( $i%$columns == 0 ){
									$return .= '<div class="row">'.$item.'</div>';
									$item = "";
									}
								$i++;
							
	 }
				endwhile;
				
	 if( $item != "")
	 $return .= '<div class="row">'.$item.'</div>';
	 
	 echo $return;
	 echo '</div>';
				wp_reset_postdata();
		}
		echo $after_widget;
 	
 }
}

/**************************************************************************************/

/**
 * testimonial widget
 */

class cordillera_testimonial extends WP_Widget {
 	function cordillera_testimonial() {
 		$widget_ops = array( 'classname' => 'cordillera_testimonial', 'description' => __( 'cordillera testimonial.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Testimonial', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
 
	for( $i=1;$i<=6;$i++)
	{
		$defaults['name'.$i] = "";
		$defaults['byline'.$i] = "";
		$defaults['content'.$i] = "";
	}
	$instance = wp_parse_args( (array) $instance, $defaults ); 
    for( $i=1;$i<=6;$i++)
	{
	?>
    
     <p>
            <label for="<?php echo $this->get_field_id( 'name'.$i  ); ?>"><?php printf(__('Name %s', 'cordillera'),$i); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'name'.$i ); ?>"  name="<?php echo $this->get_field_name( 'name'.$i ); ?>" value="<?php echo esc_attr( $instance['name'.$i] ); ?>" class="" /> 
            </p>
            
     <p>
            <label for="<?php echo $this->get_field_id( 'byline'.$i); ?>"><?php printf(__('Byline %s', 'cordillera'),$i); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'byline'.$i); ?>" name="<?php echo $this->get_field_name( 'byline'.$i ); ?>" value="<?php echo esc_attr( $instance['byline'.$i] ); ?>" class="" /> 
            </p>
   
 
		  <p>
            <label for="<?php echo $this->get_field_id( 'content'.$i); ?>"><?php printf(__('Content %s', 'cordillera'),$i); ?>:</label>
            <textarea id="<?php echo $this->get_field_id( 'content'.$i); ?>"  name="<?php echo $this->get_field_name( 'content'.$i); ?>" class=""><?php echo esc_textarea( $instance['content'.$i] ); ?></textarea>
            </p>
                      
            
		<?php
	}
	
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		for( $i=1;$i<=6;$i++)
	{
		$instance['name'.$i]    = esc_attr( $new_instance['name'.$i] );
		$instance['byline'.$i]  = esc_attr( $new_instance['byline'.$i] );
		$instance['content'.$i] = esc_textarea( $new_instance['content'.$i] );
	}
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
			for( $i=1;$i<=6;$i++)
	{
        $instance['name'.$i] = isset($instance['name'.$i]) ? $instance['name'.$i] : '';
		$instance['byline'.$i] = isset($instance['byline'.$i]) ? $instance['byline'.$i] : '';
		$instance['content'.$i] = isset($instance['content'.$i]) ? $instance['content'.$i] : '';
	}
		 
		echo $before_widget;
		
		$testimonial_id = uniqid("testimonial-");
		echo '<div class="testimonial-wrapper">
						<div id="'.$testimonial_id.'" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">';
							
							for( $i=1;$i<=6;$i++){
								if( $instance['content'.$i] != ""){
									$active = "";
									if($i ==1 ) $active = "active";
				echo '<div class="item '.$active.'">
									<div class="testimonial-box" style="">
										<div class="testimonial-content">
											<i class="fa fa-quote-left"></i>
											'.esc_html($instance['content'.$i]).'
										</div>
										<div class="testimonial-author-wrapper text-center">
											<div class="testimonial-author ">
												<p>'.esc_attr($instance['name'.$i]).' - '.esc_attr($instance['byline'.$i]).'</p>
											</div>
										</div>								
									</div>
								</div>';
							}
	              }
								
								
				echo '</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#'.$testimonial_id.'" role="button" data-slide="prev">
								<span class="fa fa-caret-left"></span>
								<span class="sr-only">'.__('Previous', 'cordillera').'</span>
							</a>
							<a class="right carousel-control" href="#'.$testimonial_id.'" role="button" data-slide="next">
								<span class="fa fa-caret-right"></span>
								<span class="sr-only">'.__('Next', 'cordillera').'</span>
							</a>
						</div>
					</div>';
							
		echo $after_widget;
 	
 }
}

//**************************************************************************************/
 
 /**
 * Carousel
 */
 
 class cordillera_carousel extends WP_Widget {
 	function cordillera_carousel() {
 		$widget_ops = array( 'classname' => 'cordillera_carousel', 'description' => '' );
		$control_ops = array( 'width' => 300, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Carousel', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
 		for ( $i=0; $i<12; $i++ ) {
 			$defaults['image_'.$i]  = '';
 		}
		$defaults['list_num']  = '6';
 		$instance = wp_parse_args( (array) $instance, $defaults );
 	
	?>
    
          <p>
         <label for="<?php echo $this->get_field_id( 'list_num' ); ?>">&nbsp;&nbsp;<?php _e('Display Num', 'cordillera'); ?>:</label>
         <select id="<?php echo $this->get_field_id( 'list_num'  ); ?>" name="<?php echo $this->get_field_name( 'list_num'  ); ?>">
         <?php for($i=1;$i<=12;$i++){?>
         <option  <?php echo selected($i,absint($instance['list_num']));?> value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php }?>
         </select>
 </p>
 
		<?php for( $i=0; $i<12; $i++) { 
		$title = isset($instance['title_'.$i])?$instance['title_'.$i]:"";
		$image = isset($instance['image_'.$i])?$instance['image_'.$i]:"";
		
		?>
         <p>
            <label for="<?php echo $this->get_field_id( 'title_'.$i  ); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Title', 'cordillera'); echo " ".($i+1) ;?>:</label>
			<input id="<?php echo $this->get_field_id( 'title_'.$i ); ?>" name="<?php echo $this->get_field_name( 'title_'.$i ); ?>" value="<?php echo esc_attr($title) ; ?>" class="" /> 
            </p>
            
			 <p>
            <label for="<?php echo $this->get_field_id( 'image_'.$i  ); ?>"><?php _e('Image URL', 'cordillera'); echo " ".($i+1);?>:</label>
			<input id="<?php echo $this->get_field_id( 'image_'.$i ); ?>" name="<?php echo $this->get_field_name( 'image_'.$i ); ?>" value="<?php echo esc_url($image) ; ?>" class="" /> 
            </p>          
		<?php

		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		for( $i=0; $i<12; $i++ ) {
			$instance['image_'.$i]  = esc_url_raw($new_instance['image_'.$i])  ;
			$instance['title_'.$i]  = esc_attr($new_instance['title_'.$i])  ;
	
		}
        $instance['list_num']  = absint($new_instance['list_num'])  ;
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 	    
		echo $before_widget;
		$instance['list_num'] = isset($instance['list_num']) ? $instance['list_num'] : '6';
		for( $i=0; $i<12; $i++ ) {
		 $instance['image_'.$i] = isset($instance['image_'.$i]) ? $instance['image_'.$i] : '';
		 $instance['title_'.$i] = isset($instance['title_'.$i]) ? $instance['title_'.$i] : '';
		}
		?>
<div id="cordillera-carousel" class="owl-carousel cordillera-carousel clients" data-num="<?php echo absint($instance['list_num']);?>">
<?php
for( $i=0; $i<12; $i++ ) {
			if($instance['image_'.$i]  != ''){
				echo ' <div class="item"><img src="'.esc_url($instance['image_'.$i]).'" data-toggle="tooltip" data-placement="top" title="'.esc_html($instance['title_'.$i]).'" data-original-title="'.esc_html($instance['title_'.$i]).'" alt="'.esc_html($instance['title_'.$i]).'" /></div>';
				}
	
		}
?>
</div>
		<?php 
		echo $after_widget;
 	}
	
 }
 
//**************************************************************************************/

/**
 * blog widget
 */
 
class cordillera_blog extends WP_Widget {
 	function cordillera_blog() {
 		$widget_ops = array( 'classname' => 'cordillera_blog', 'description' => __( 'Display latest blog.', 'cordillera' ) );
		$control_ops = array( 'width' => 350, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Blog', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {

	$instance = wp_parse_args( (array) $instance, array("blog_num"=>"4") ); 
	?>
             <p>
               <label for="<?php echo $this->get_field_id( 'blog_num'  ); ?>"><?php _e('Posts List Num', 'cordillera'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'blog_num'  ); ?>" name="<?php echo $this->get_field_name( 'blog_num'  ); ?>" value="<?php echo absint( $instance['blog_num'] ); ?>" class="" /> 
            </p>
            
		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['blog_num'] = absint( $new_instance['blog_num'] );
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );
		$blog_num = isset($blog_num) ? $blog_num : '4';
 		global $post;
 		$blog_num = (is_numeric($blog_num) && $blog_num>0)?$blog_num:4;
		$get_posts = new WP_Query( array(
			'posts_per_page' 			=> $blog_num,
			'paged'                     => 1,
			'post_type'					=>  array( 'post' )
		) ); 
		echo $before_widget;
		$j         = 0 ;
		$css_style = "";
	   
	    while( $get_posts->have_posts() ):$get_posts->the_post();
		  
		 
		  if ( has_post_thumbnail() ) { 
		  $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cordillera_widget_blog' );
		 
	      $featured_image = '<a href="'.get_permalink().'" title="'.get_the_title().'"><img src="'.esc_url( $featured_image_url[0]).'" alt="'.get_the_title().'"/></a>';

	        }
			else{
				$featured_image = '<a href="'.get_permalink().'" title="'.get_the_title().'"><img src="'.get_template_directory_uri().'/images/no-featured-image.jpg" alt="'.get_the_title().'"/></a>';
				}
		$image_align = "";
	   $content_align = ""   ;
	   if( $j % 2 == 0){
		   $image_align = "float:left;";
		   $content_align = "float:right;"   ;
		   }
		   else{
			 $image_align = "float:right;";
			 $content_align = "float:left;";
			   }
	 echo '<div class="bloglist-box"><div class="row">
							<div class="col-md-6" style="'.$image_align.'">
								'.$featured_image.'
							</div>
							<div class="col-md-6" style="'.$content_align.'">
								<div class="bloglist-content">
									<div class="entry-header">
										<div class="entry-catagory">';
										 the_category(', '); 
										 echo '</div><a href="'.get_permalink().'"><h1 class="entry-title">'.get_the_title().'</h1></a>
										<div class="entry-meta">
											<div class="entry-date"><a href="'.get_month_link('', '').'">'.get_the_date("M d, Y").'</a></div>';
											echo '<div class="entry-comments">';
											 comments_popup_link( __('No comments yet', 'cordillera'), __('1 comment', 'cordillera'), __('% comments', 'cordillera'), 'comments-link', __('No comment', 'cordillera'));
											echo '</div>
										</div>
									</div>
									<div class="entry-summary">'.get_the_excerpt().'</div>
									<a href="'.get_permalink().'"><button class="btn-normal line">'. __('Read More', 'cordillera').'</button></a>
								</div>
							</div>		
						</div>
						</div>';
		
		 $j++;
				endwhile;


	  wp_reset_postdata();
	  echo $after_widget;
 	
 }
}

//**************************************************************************************/
 
 /**
 * social icons
 */
 
 class cordillera_social_icons extends WP_Widget {
 	function cordillera_social_icons() {
 		$widget_ops = array( 'classname' => 'cordillera_social_icons', 'description' => '' );
		$control_ops = array( 'width' => 300, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'cordillera: Social Icons', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
 		for ( $i=0; $i<12; $i++ ) {
 			$defaults['icon_'.$i]  = '';
			$defaults['title_'.$i]  = '';
			$defaults['link_'.$i]  = '';
 		}
        $defaults['title']  = '';
 		$instance = wp_parse_args( (array) $instance, $defaults );
 	    $title       = isset($instance['title'])?$instance['title']:"";
	?>
 
 <p>
            <label for="<?php echo $this->get_field_id( 'title'  ); ?>"><?php _e('Title', 'cordillera');?>:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr($title) ; ?>" class="" /> 
            </p>
		<?php for( $i=0; $i<12; $i++) { 
		$icon       = isset($instance['icon_'.$i])?$instance['icon_'.$i]:"";
		$icon_title = isset($instance['title_'.$i])?$instance['title_'.$i]:"";
		$link       = isset($instance['link_'.$i])?$instance['link_'.$i]:"";
		
		?>
         <p>
            <label for="<?php echo $this->get_field_id( 'title_'.$i  ); ?>"><?php _e('Icon Title', 'cordillera'); echo " ".($i+1) ;?>:</label>
			<input id="<?php echo $this->get_field_id( 'title_'.$i ); ?>" name="<?php echo $this->get_field_name( 'title_'.$i ); ?>" value="<?php echo esc_attr($icon_title) ; ?>" class="" /> 
            </p>
            <p>
            <label for="<?php echo $this->get_field_id( 'icon_'.$i  ); ?>">&nbsp;&nbsp;<?php _e('Icon', 'cordillera'); echo " ".($i+1) ;?>:</label>
			<input id="<?php echo $this->get_field_id( 'icon_'.$i ); ?>" name="<?php echo $this->get_field_name( 'icon_'.$i ); ?>" value="<?php echo esc_attr($icon) ; ?>" class="" /> 
            </p>
            
			 <p>
            <label for="<?php echo $this->get_field_id( 'link_'.$i  ); ?>">&nbsp;&nbsp;<?php _e('Link', 'cordillera'); echo " ".($i+1);?>:</label>
			<input id="<?php echo $this->get_field_id( 'link_'.$i ); ?>" name="<?php echo $this->get_field_name( 'link_'.$i ); ?>" value="<?php echo esc_url($link) ; ?>" class="" /> 
            </p>          
		<?php

		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		for( $i=0; $i<12; $i++ ) {
			$instance['icon_'.$i]  = esc_attr($new_instance['icon_'.$i])  ;
			$instance['title_'.$i]  = esc_attr($new_instance['title_'.$i])  ;
			$instance['link_'.$i]  = esc_url_raw($new_instance['link_'.$i])  ;
	
		}
		$instance['title']  = esc_attr($new_instance['title'])  ;
		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 	    $instance['title'] = isset($instance['title'])?$instance['title']:"";
		echo $before_widget;
		if ( !empty( $instance['title']) ) { echo $before_title. esc_attr( $instance['title']) . $after_title; } 
		echo '<ul class="widget-sns">';
		for( $i=0; $i<12; $i++ ) {
		 $instance['icon_'.$i] = isset($instance['icon_'.$i]) ? $instance['icon_'.$i] : '';
		 $instance['title_'.$i] = isset($instance['title_'.$i]) ? $instance['title_'.$i] : '';
		 $instance['link_'.$i] = isset($instance['link_'.$i]) ? $instance['link_'.$i] : '';
		if( $instance['icon_'.$i] != "" ){
		?>
              <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo esc_attr($instance['title_'.$i]);?>" href="<?php echo esc_url($instance['link_'.$i]);?>"><i class="fa <?php echo esc_attr($instance['icon_'.$i]);?>"></i></a></li>
		<?php 
		 }
		}
		echo '</ul>';
		echo $after_widget;
 	}
	
 }
 
 /**************************************************************************************/
/**
 * Sidebar slider.
 */
class cordillera_sidebar_slider extends WP_Widget {
 	function cordillera_sidebar_slider() {
 		$widget_ops = array( 'classname' => 'cordillera_sidebar_slider', 'description' => __( 'Display some pages as slider.', 'cordillera' ) );
		$control_ops = array( 'width' => 250, 'height' =>250 ); 
		parent::WP_Widget( false, $name = __( 'Cordillera: Sidebar Slider', 'cordillera' ), $widget_ops, $control_ops);
 	}

 	function form( $instance ) {
 		for ( $i=0; $i<6; $i++ ) {
 			$var = 'page_id'.$i;
 			$defaults[$var] = '';
 		}
 		$instance = wp_parse_args( (array) $instance, $defaults );
 		for ( $i=0; $i<6; $i++ ) {
 			$var = 'page_id'.$i;
 			$var = absint( $instance[ $var ] );
		}
	?>
		<?php for( $i=0; $i<6; $i++) { ?>
			<p>
				<label for="<?php echo $this->get_field_id( key($defaults) ); ?>"><?php _e( 'Page', 'cordillera' ); ?>:</label>
				<?php wp_dropdown_pages( array( 'show_option_none' =>' ','name' => $this->get_field_name( key($defaults) ), 'selected' => absint($instance[key($defaults)]) ) ); ?>
			</p>
		<?php
		next( $defaults );
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		for( $i=0; $i<6; $i++ ) {
			$var = 'page_id'.$i;
			$instance[ $var] = absint( $new_instance[ $var ] );
		}

		return $instance;
	}

	function widget( $args, $instance ) {
 		extract( $args );
 		extract( $instance );

 		global $post;
 		$page_array = array();
 		for( $i=0; $i<6; $i++ ) {
 			$var = 'page_id'.$i;
 			$page_id = isset( $instance[ $var ] ) ? absint($instance[ $var ]) : '';
 			
 			if( !empty( $page_id ) && $page_id > 0 )
 				array_push( $page_array, $page_id );
 		}
		$get_featured_pages = new WP_Query( array(
			'posts_per_page' 			=> -1,
			'post_type'					=>  array( 'page' ),
			'post__in'		 			=> $page_array,
			'orderby' 		 			=> 'post__in'
		) ); 
		echo $before_widget; ?>
			<?php 
			$i = 0;
			$controller = '';
			$images     = '';
 			while( $get_featured_pages->have_posts() ):$get_featured_pages->the_post();
				$page_title = get_the_title();
				$active     = '';
				if($i==0) $active = 'active';
				
				if (has_post_thumbnail( get_the_ID() ) ):
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'side-slider' );
				$controller .= '<li data-target="#carousel-slider-generic" data-slide-to="'.$i.'" class="'.$active.'"></li>'; 
				$images     .= '<div class="item '.$active.'"><a href="'.get_permalink().'"><img src="'.esc_url($image[0]).'" alt="'.get_the_title().'"></a></div>';
				$i++;
				endif;
				
				endwhile;
				?>
				<div class="widget-slider">
										<div id="carousel-slider-generic" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<?php echo $controller;?>
											</ol>
											<!-- Wrapper for slides -->
											<div class="carousel-inner">
												<?php echo $images;?>
											</div>
										</div>
										<div class="carousel-bg"></div>
									</div>
			<?php
	 		wp_reset_postdata();
 			?>
		<?php 
		echo $after_widget;
 	}
 }