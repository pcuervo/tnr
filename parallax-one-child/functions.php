<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/custom.css', array( $parent_style ));
}
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function parallax_one_childtheme_customize_register( $wp_customize ) {
$wp_customize->add_setting( 'parallax_image_child' );
$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'parallax_image_child',
        array(
            'label' => __('New parallax control from child theme','parallax-one'),
            'section' => 'parallax_one_ribbon_section',
            'priority'   => 15
        )
    )

);
add_action( 'customize_register', 'parallax_one_childtheme_customize_register' );
?>

