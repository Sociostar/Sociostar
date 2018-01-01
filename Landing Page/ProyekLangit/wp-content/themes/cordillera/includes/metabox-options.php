<?php

/**
 * Calls the class on the post edit screen.
 */
function cordillera_call_metaboxClass() {
    new cordillera_metaboxClass();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'cordillera_call_metaboxClass' );
    add_action( 'load-post-new.php', 'cordillera_call_metaboxClass' );
}

/** 
 * The Class.
 */
class cordillera_metaboxClass {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'cordillera_add_meta_box' ) );
		add_action( 'save_post', array( $this, 'cordillera_save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function cordillera_add_meta_box( $post_type ) {
            $post_types = array('post', 'page');     //limit meta box to certain post types
            if ( in_array( $post_type, $post_types )) {
		add_meta_box(
			'some_meta_box_name'
			,__( 'Cordillera Metabox Options', 'cordillera' )
			,array( $this, 'cordillera_render_meta_box_content' )
			,$post_type
			,'advanced'
			,'high'
		);
            }
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function cordillera_save( $post_id ) {
	
		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['cordillera_inner_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['cordillera_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'cordillera_inner_custom_box' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;
	
		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */

		// Sanitize the user input.
		$show_breadcrumb            = sanitize_text_field( $_POST['cordillera_show_breadcrumb'] );
		$cordillera_layout          = sanitize_text_field( $_POST['cordillera_layout'] );

		
		// Update the meta field.
		update_post_meta( $post_id, '_cordillera_show_breadcrumb', $show_breadcrumb );
		update_post_meta( $post_id, '_cordillera_layout', $cordillera_layout );
	
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function cordillera_render_meta_box_content( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'cordillera_inner_custom_box', 'cordillera_inner_custom_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
	    $show_breadcrumb = get_post_meta( $post->ID, '_cordillera_show_breadcrumb', true );
		$cordillera_layout      = get_post_meta( $post->ID, '_cordillera_layout', true );
	
		// Display the form, using the current value.
		echo '<p class="meta-options"><label for="cordillera_show_breadcrumb"  style="display: inline-block;width: 150px;">';
		_e( 'Show Breadcrumb :', 'cordillera' );
		echo '</label> ';
		echo '<select name="cordillera_show_breadcrumb" id="cordillera_show_breadcrumb"><option '.selected($cordillera_layout,'yes',false).' value="yes">'.__("Yes","cordillera").'</option><option '.selected($cordillera_layout,'no',false).' value="no">'.__("No","cordillera").'</option></select></p>';
		
		
		echo '<p class="meta-options"><label for="cordillera_layout"  style="display: inline-block;width: 150px;">';
		_e( 'Choose Sidebar Layout :', 'cordillera' );
		echo '</label> ';
		echo '<select name="cordillera_layout" id="cordillera_layout">
		<option  value="right" '.selected($cordillera_layout,'right',false).'>'.__("right","cordillera").'</option>
		<option  value="left" '.selected($cordillera_layout,'left',false).'>'.__("left","cordillera").'</option>
		<option  value="both" '.selected($cordillera_layout,'both',false).'>'.__("both","cordillera").'</option>
		<option  value="none" '.selected($cordillera_layout,'none',false).'>'.__("none","cordillera").'</option>
		</select></p>';
		
		
		
	}
}