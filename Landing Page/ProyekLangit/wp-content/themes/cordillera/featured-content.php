<div class="homepage-main" role="main">

<?php 
	global $cordillera_home_sections;
	if( !$cordillera_home_sections )
	$cordillera_home_sections = get_option('_cordillera_home_widget_area');	
    if($cordillera_home_sections !=""){
    $home_sections_array = json_decode($cordillera_home_sections, true);
	
     if(isset($home_sections_array['section-widget-area-name']) && is_array($home_sections_array['section-widget-area-name']) ){
	  
	   $num = count($home_sections_array['section-widget-area-name']);
	   for($i=0; $i<$num; $i++ ){
 
    $areaname          = isset($home_sections_array['section-widget-area-name'][$i])? esc_attr($home_sections_array['section-widget-area-name'][$i]):"Section ".$i;
	$sanitize_areaname = sanitize_title($areaname);
	$widget_id         = isset($home_sections_array['section-widget-id'][$i])?$home_sections_array['section-widget-id'][$i]:'home-page-section-'.$i;
	
	$color             = isset($home_sections_array['list-item-color'][$i])? esc_attr($home_sections_array['list-item-color'][$i]):"";
	$image             = isset($home_sections_array['list-item-image'][$i])? esc_url($home_sections_array['list-item-image'][$i]):"";
	$repeat            = isset($home_sections_array['list-item-repeat'][$i])? esc_attr($home_sections_array['list-item-repeat'][$i]):"";
	$position          = isset($home_sections_array['list-item-position'][$i])? esc_attr($home_sections_array['list-item-position'][$i]):"";
	$attachment        = isset($home_sections_array['list-item-attachment'][$i])? esc_attr($home_sections_array['list-item-attachment'][$i]):"";
	$layout            = isset($home_sections_array['widget-area-layout'][$i])? esc_attr($home_sections_array['widget-area-layout'][$i]):"";
	$padding           = isset($home_sections_array['widget-area-padding'][$i])? absint($home_sections_array['widget-area-padding'][$i]):"";
	$column            = isset($home_sections_array['widget-area-column'][$i])? absint($home_sections_array['widget-area-column'][$i]):"";
	$columns           = isset($home_sections_array['widget-area-column-item'][$widget_id])? $home_sections_array['widget-area-column-item'][$widget_id]:array("12");
	$background_style = ""; 
	
	
    if ($image!="") {
	$background_style .= "background-image:url('".$image. "');background-repeat:".$repeat.";background-position:".$position.";background-attachment:".$attachment.";";
	}
	
	if( $color !=""){
	$background_style .= "background-color:".$color.";";
	 }
	if(is_numeric($padding))
	{
		$background_style .= "padding-top:".$padding."px;padding-bottom:".$padding."px;";
		}
	if($layout == "full"){
		$container = 'full-width';
		}else{
	    $container = 'container';
			}
	
	$column_num       = count($columns);
	$j               = 1;
   
		   echo '<section class="home-section '.$sanitize_areaname.'" style="'.$background_style.'"><div class="'.$container.'">';
	
		if(is_array($columns)){	
		     
	          echo '<div class="row">';
			foreach($columns as $columnItem){
			  
			   if($column_num > 1){
				 $widget_name = sprintf(__('%s Column %d','cordillera'),$areaname,$j);
		         $widget_id   = $widget_id.'-'.$j;
				 
				 }else{
				 $widget_name = $areaname;
				// $widget_id   = $widget_id;
				 }
				 
		 

			echo '<div class="col-md-'.$columnItem.'">';
		   dynamic_sidebar( $widget_id );
		   echo '</div>';
		   $j++;
		   }

	          echo '</div>';
	
		    
	   }else{
	    
		   echo '<div class="col-md-full">';
		   dynamic_sidebar($sanitize_areaname);
		   echo '</div>';
		    
		   }
		   echo '<div class="clear"></div></div></section>';
	      
	         }
		   }
	   }
?>
		</div>