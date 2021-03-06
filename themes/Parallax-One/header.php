<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package parallax-one
 */
?><!DOCTYPE html>
<?php parallax_hook_html_before(); ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php parallax_hook_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SEO -->
<meta name="keywords" content="tnr, tnr industrial, tnr doors, puertas industriales, alto rendimiento, puertas de alto rendimiento, garantía de por vida, doors, industrial doors, puertas uso rudo, puertas para exteriores, puertas para fabricas, puertas refrigeración de alta velocidad, puerta de pvc, puertas industriales, puertas rapidas, cortinas rapidas, cortinas industriales, puertas impactables, puertas para anden de carga, puertas de PVC, puertas de refrigeracion, puertas tnr">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="canonical" href="<?php echo site_url(); ?>">


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <script src="https://use.typekit.net/isn0ktx.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script> -->
<?php parallax_hook_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?> dir="<?php if (is_rtl()) echo "rtl"; else echo "ltr"; ?>">
<?php parallax_hook_body_top(); ?>
<div id="mobilebgfix">
  <div class="mobile-bg-fix-img-wrap">
    <div class="mobile-bg-fix-img"></div>
  </div>
  <div class="mobile-bg-fix-whole-site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parallax-one' ); ?></a>
	<!-- =========================
     PRE LOADER
    ============================== -->
	<?php

	 global $wp_customize;

	 if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ):

		$parallax_one_disable_preloader = get_theme_mod('paralax_one_disable_preloader');

		if( isset($parallax_one_disable_preloader) && ($parallax_one_disable_preloader != 1)):

			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';

		endif;

	endif; ?>


	<!-- =========================
     SECTION: HOME / HEADER
    ============================== -->
	<!--header-->
  <?php parallax_hook_header_before(); ?>
	<header itemscope itemtype="http://schema.org/WPHeader" id="masthead" role="banner" data-stellar-background-ratio="0.5" class="header header-style-one site-header">
    <?php parallax_hook_header_top(); ?>
        <!-- COLOR OVER IMAGE -->
        <?php
			$paralax_one_sticky_header = get_theme_mod('paralax_one_sticky_header','parallax-one');
			if( isset($paralax_one_sticky_header) && ($paralax_one_sticky_header != 1)){
				$fixedheader = 'sticky-navigation-open';
			} else {
				if( !is_front_page() ){
					$fixedheader = 'sticky-navigation-open';
				}else{
					$fixedheader = '';
					if ( 'posts' != get_option( 'show_on_front' ) ) {
						if( isset($paralax_one_sticky_header) && ($paralax_one_sticky_header != 1)){
							$fixedheader = 'sticky-navigation-open';
						} else {
							$fixedheader = '';
						}
					}
				}
			}
        ?>
		<div class="overlay-layer-nav <?php if(!empty($fixedheader)) {echo esc_attr($fixedheader);} ?>">

            <!-- STICKY NAVIGATION -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll">
				<!-- CONTAINER -->
                <div class="container">

                    <div class="navbar-header">

                        <!-- LOGO -->

                        <button title='<?php _e( 'Toggle Menu', 'parallax-' ); ?>' aria-controls='menu-main-menu' aria-expanded='false' type="button" class="navbar-toggle menu-toggle" id="menu-toggle" data-toggle="collapse" data-target="#menu-primary">
                            <span class="screen-reader-text"><?php esc_html_e('Toggle navigation','parallax-one'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

						<?php

							$parallax_one = get_theme_mod('paralax_one_logo', parallax_get_file('/images/logo-nav.png') );



							if(!empty($parallax_one)):

								echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand" title="'.get_bloginfo('title').'">';

									echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one)).'" alt="'.get_bloginfo('title').'">';

								echo '</a>';

								echo '<div class="header-logo-wrap text-header paralax_one_only_customizer">';

									echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';

									echo '<p itemprop="description" id="site-description" class="site-description">'.get_bloginfo( 'description' ).'</p>';

								echo '</div>';

							else:

								if( isset( $wp_customize ) ):

									echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand paralax_one_only_customizer" title="'.get_bloginfo('title').'">';

										echo '<img src="" alt="'.get_bloginfo('title').'">';

									echo '</a>';

								endif;

								echo '<div class="header-logo-wrap text-header">';

									echo '<h1 itemprop="headline" id="site-title" class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';

									echo '<p itemprop="description" id="site-description" class="site-description">'.get_bloginfo( 'description' ).'</p>';

								echo '</div>';
							endif;

						?>

                    </div>

                    <!-- MENU -->
					<div itemscope itemtype="http://schema.org/SiteNavigationElement" aria-label="<?php esc_html_e('Primary Menu','parallax-one') ?>" id="menu-primary" class="navbar-collapse collapse">
						<!-- LOGO ON STICKY NAV BAR -->
						<div id="site-header-menu" class="site-header-menu">
							<nav id="site-navigation" class="[ inline-block middle ] main-navigation" role="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location'    => 'primary',
										'menu_class'        => 'primary-menu small-text',
										'depth'           	=> 4,
										'fallback_cb'       => 'parallax_one_wp_page_menu'
										 )
								);
							?>
							</nav>
							<a class="[ hidden-xs ][ inline-block middle margin-left--small ][ standard-button button--small ]" href="http://tnrindustrial.com/#footer">Contáctanos</a>
						</div>
                    </div>


                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION -->
