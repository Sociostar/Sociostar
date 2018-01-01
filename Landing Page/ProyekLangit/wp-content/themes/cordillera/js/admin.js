jQuery(document).ready(function($) {
								
		$("body").on('change','.widget-area-column',function(){
													  
													  
											 
		var column            = parseInt($(this).val());
		var width             = parseInt(12/column);
		var citem             = "";

		var sanitize_areaname = $(this).parents(".list-item ").find(".section-widget-id").val();
		if(column > 1){
		for(var i=1;i<=column;i++){
			citem = citem + '<label> Column '+i+' width :</label><select id="widget-area-column-item-'+i+'" name="widget-area[widget-area-column-item]['+sanitize_areaname+'][]" class="widget-area-column-item">';
			for(var j=0;j<12;j++){
				var selected            = "";
				if(j == width) selected = ' selected="selected" ';
				citem = citem + '<option '+selected+' value="'+j+'">'+j+'/12 </option>';
				}
				
				citem = citem + '</select>';
			}
		}
		$(this).parents(".list-item ").find(".widget-secton-column").html(citem);
		
		});

 
 ////
 
  $(function() {
	  $( "#list-widget-areas" ).sortable({
	  cursor: "move",
	  items :".list-item", 
	  opacity: 0.6, 
	  revert: true, 
	  handle : ".widget-area-name"
	  });
  });
  
  jQuery(function() {
        var listItem = jQuery('#list-widget-areas');
        
        jQuery(document).on('click','#addItem' ,function() {
		jQuery("#list-item-notice").html("");											 
		var column   = jQuery(this).parents("#section-widget").find("#widget_layout").val();		
		var areaName = jQuery(this).parents("#section-widget").find("#list-item-val").val();
		var i      = listItem.find('.list-item').size() + 1;	
		if(areaName == "" || areaName == null){
			jQuery("#list-item-notice").html("Widget area name is required.");
			return false;
			}
		var repeated = false;
		jQuery(".section-widget-area-name-item").each(function(){
				if(jQuery(this).val() == areaName)	{
					repeated = true;
					}								   
															   
               });	
		if(repeated == true){
			jQuery("#list-item-notice").html("Widget area name already exists.");
			return false;
			}
		
	 jQuery.ajax({
				 type:"POST",
				 dataType:"html",
				 url:ajaxurl,
				 data:"column="+column+"&areaname="+areaName+"&num="+i+"&action=cordillera_widget_area_generator",
				 success:function(data){
					
					jQuery(data).appendTo(listItem);
					jQuery('.of-color').wpColorPicker();
					jQuery('[data-toggle="confirmation"]').confirmation({title: "Remove this item?",onConfirm:function(){jQuery(this).parents(".list-item").remove();}});
	
	var optionsframework_upload;
	var optionsframework_selector;

	function optionsframework_add_file(event, selector) {

		var upload = jQuery(".uploaded-file"), frame;
		var $el = jQuery(this);
		optionsframework_selector = selector;

		event.preventDefault();

		// If the media frame already exists, reopen it.
		if ( optionsframework_upload ) {
			optionsframework_upload.open();
		} else {
			// Create the media frame.
			optionsframework_upload = wp.media.frames.optionsframework_upload =  wp.media({
				// Set the title of the modal.
				title: $el.data('choose'),

				// Customize the submit button.
				button: {
					// Set the text of the button.
					text: $el.data('update'),
					// Tell the button not to close the modal, since we're
					// going to refresh the page when the image is selected.
					close: false
				}
			});

			// When an image is selected, run a callback.
			optionsframework_upload.on( 'select', function() {
				// Grab the selected attachment.
				var attachment = optionsframework_upload.state().get('selection').first();
				optionsframework_upload.close();
				optionsframework_selector.find('.upload').val(attachment.attributes.url);
				if ( attachment.attributes.type == 'image' ) {
					optionsframework_selector.find('.screenshot').empty().hide().append('<img src="' + attachment.attributes.url + '"><a class="remove-image">Remove</a>').slideDown('fast');
				}
				optionsframework_selector.find('.upload-button').unbind().addClass('remove-file').removeClass('upload-button').val(optionsframework_l10n.remove);
				optionsframework_selector.find('.of-background-properties').slideDown();
				optionsframework_selector.find('.remove-image, .remove-file').on('click', function() {
					optionsframework_remove_file( jQuery(this).parents('.section:first') );
				});
			});

		}

		// Finally, open the modal.
		optionsframework_upload.open();
	}

	function optionsframework_remove_file(selector) {
		selector.find('.remove-image').hide();
		selector.find('.upload').val('');
		selector.find('.of-background-properties').hide();
		selector.find('.screenshot').slideUp();
		selector.find('.remove-file').unbind().addClass('upload-button').removeClass('remove-file').val(optionsframework_l10n.upload);
		// We don't display the upload button if .upload-notice is present
		// This means the user doesn't have the WordPress 3.5 Media Library Support
		if ( jQuery('.section-upload .upload-notice').length > 0 ) {
			jQuery('.upload-button').remove();
		}
		selector.find('.upload-button').on('click', function(event) {
			optionsframework_add_file(event, jQuery(this).parents('.section'));
		});
	}

	jQuery('.remove-image, .remove-file').on('click', function() {
															  
		optionsframework_remove_file( jQuery(this).parents('.section') );
    });

    jQuery('.upload-button').on('click', function( event ) {
												 
    	optionsframework_add_file(event, jQuery(this).parents('.section:first'));
    });

		 },error:function(){
					 alert("error");
					 }
				 });
	 
						});
		
		
		
 jQuery(document).on('click','.edit-section' ,function() {
       jQuery(this).parents(".list-item").find(".section-widget-area-wrapper").toggle();
   }); 

 jQuery('[data-toggle="confirmation"]').confirmation({title: "Remove this item?",onConfirm:function(){jQuery(this).parents(".list-item").remove();}});

	
});
								
});