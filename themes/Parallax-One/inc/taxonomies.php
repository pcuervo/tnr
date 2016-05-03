<?php

/*------------------------------------*\
	TAXONOMIES
\*------------------------------------*/

add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// APLICACIÓN
	if( ! taxonomy_exists('aplicacion')){

		$labels = array(
			'name'              => 'Aplicación',
			'singular_name'     => 'Aplicación',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Aplicación',
			'update_item'       => 'Actualizar Aplicación',
			'add_new_item'      => 'Nuevo Aplicación',
			'new_item_name'     => 'Nombre nuevo Aplicación',
			'menu_name'         => 'Aplicación'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'aplicacion' ),
		);
		register_taxonomy( 'aplicacion', 'puertas', $args );
	}

	/**
	 * Terms
	**/

	wp_insert_term('Comercialización', 'aplicacion');
	wp_insert_term('Fabricación', 'aplicacion');
	wp_insert_term('Manufactura', 'aplicacion');
	wp_insert_term('Minería', 'aplicacion');
	wp_insert_term('Procesamiento de alimentos', 'aplicacion');
	wp_insert_term('Industria automotriz', 'aplicacion');
	wp_insert_term('Estacionamiento', 'aplicacion');
	wp_insert_term('Aeropuertos', 'aplicacion');
	wp_insert_term('Estaciones de autobús', 'aplicacion');

}// custom_taxonomies_callback