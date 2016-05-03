<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// VIDEO HOME
	if( ! get_page_by_path('video-home') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Video home',
			'post_name'   => 'video-home',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// CONTÁCTANOS HOME
	if( ! get_page_by_path('contactanos-home') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Contáctanos home',
			'post_name'   => 'contactanos-home',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}


});
