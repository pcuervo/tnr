<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// PUERTAS
	$labels = array(
		'name'          => 'Puertas',
		'singular_name' => 'Puerta',
		'add_new'       => 'Nueva puerta',
		'add_new_item'  => 'Nueva puerta',
		'edit_item'     => 'Editar puerta',
		'new_item'      => 'Nueva puerta',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver puerta',
		'search_items'  => 'Buscar puerta',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Puertas'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'archivo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'puertas', $args );

	// VIDEOS
	$labels = array(
		'name'          => 'Videos',
		'singular_name' => 'Puerta',
		'add_new'       => 'Nuevo video',
		'add_new_item'  => 'Nuevo video',
		'edit_item'     => 'Editar video',
		'new_item'      => 'Nuevo video',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver video',
		'search_items'  => 'Buscar puerta',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Videos'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'archivo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'videos', $args );

	// CERTIFICACIONES
	$labels = array(
		'name'          => 'Certificaciones',
		'singular_name' => 'Puerta',
		'add_new'       => 'Nueva certificación',
		'add_new_item'  => 'Nueva certificación',
		'edit_item'     => 'Editar certificación',
		'new_item'      => 'Nueva certificación',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver certificación',
		'search_items'  => 'Buscar puerta',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Certificaciones'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'archivo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'certificaciones', $args );

});