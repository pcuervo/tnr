<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){

	global $post;

	switch ( $post->post_name ) {
		case 'info-contacto':
			add_metaboxes_contacto();
			break;
		default:
			add_metaboxes_puertas();
	}// switch

});



/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/


/**
* Add metaboxes for post type "Talleres"
**/
function add_metaboxes_puertas(){

	add_meta_box( 'ficha_puerta', 'Ficha', 'metabox_ficha_puerta', 'puertas', 'advanced', 'high' );
	add_meta_box( 'mas_puerta', 'Más', 'metabox_mas_puerta', 'puertas', 'advanced', 'high' );

}// add_metaboxes_puertas




/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/



/**
* Display metabox Ficha in post type "Talleres"
* @param obj $post
**/
function metabox_ficha_puerta( $post ){

	$ficha_puerta = get_post_meta($post->ID, '_ficha_puerta_meta', true);
	wp_nonce_field(__FILE__, '_ficha_puerta_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_ficha_puerta_meta' value='$ficha_puerta' />";

}// metabox_ficha_puerta

/**
* Display metabox Más in post type "Talleres"
* @param obj $post
**/
function metabox_mas_puerta( $post ){

	$mas_puerta = get_post_meta($post->ID, '_mas_puerta_meta', true);
	wp_nonce_field(__FILE__, '_mas_puerta_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_mas_puerta_meta' value='$mas_puerta' />";

}// metabox_mas_puerta



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

add_action('save_post', function( $post_id ){

	save_metabox_puertas( $post_id );

});

/**
* Save the metaboxes for post type "Talleres"
* @param int $post_id
**/
function save_metabox_puertas( $post_id ){

	// Ficha taller
	if ( isset($_POST['_ficha_puerta_meta']) and check_admin_referer( __FILE__, '_ficha_puerta_meta_nonce') ){
		update_post_meta($post_id, '_ficha_puerta_meta', $_POST['_ficha_puerta_meta']);
	}
	// Más taller
	if ( isset($_POST['_mas_puerta_meta']) and check_admin_referer( __FILE__, '_mas_puerta_meta_nonce') ){
		update_post_meta($post_id, '_mas_puerta_meta', $_POST['_mas_puerta_meta']);
	}

}// save_metabox_puertas