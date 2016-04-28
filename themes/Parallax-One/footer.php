<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package parallax-one
 */
?>

    <footer itemscope itemtype="http://schema.org/WPFooter" id="footer" role="contentinfo" class = "footer grey-bg">

        <div class="container">
            <div class="footer-widget-wrap">

				<?php
					if( is_active_sidebar( 'footer-area' ) ){
				?>
						<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-1" class="col-md-6 col-sm-8 col-xs-12 widget-box" aria-label="<?php esc_html_e('Widgets Area 1','parallax-one'); ?>">
							<h2 class="[ text-center ] dark-text">Contáctanos</h2><div class="colored-line"></div>
							<?php
								dynamic_sidebar( 'footer-area' );
							?>
						</div>

				<?php
					}
					if( is_active_sidebar( 'footer-area-2' ) ){
				?>
						<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-2" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e('Widgets Area 2','parallax-one'); ?>">
							<?php
								dynamic_sidebar( 'footer-area-2' );
							?>
						</div>
				<?php
					}
					if( is_active_sidebar( 'footer-area-3' ) ){
				?>
						<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-3" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e('Widgets Area 3','parallax-one'); ?>">
						   <?php
								dynamic_sidebar( 'footer-area-3' );
							?>
						</div>
				<?php
					}
					if( is_active_sidebar( 'footer-area-4' ) ){
				?>
						<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-4" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e('Widgets Area 4','parallax-one'); ?>">
							<?php
								dynamic_sidebar( 'footer-area-4' );
							?>
						</div>
				<?php
					}
				?>

            </div><!-- .footer-widget-wrap -->
            <?php
				$parallax_one_contact_info_item = get_theme_mod('parallax_one_contact_info_content',
					json_encode(
						array(
								array("icon_value" => "icon-basic-mail" ,"text" => "contact@site.com", "link" => "#" ),
								array("icon_value" => "icon-basic-geolocalize-01" ,"text" => "Company address", "link" => "#" ),
								array("icon_value" => "icon-basic-tablet" ,"text" => "0 332 548 954", "link" => "#" )
							)
					)
				);

				if( !parallax_one_general_repeater_is_empty($parallax_one_contact_info_item) ){
					$parallax_one_contact_info_item_decoded = json_decode($parallax_one_contact_info_item);
				?>
						<?php parallax_hook_contact_before(); ?>
						<div class="contact-info" id="contactinfo" role="region" aria-label="<?php esc_html_e('Contact Info','parallax-one'); ?>">
							<?php parallax_hook_contact_top(); ?>
							<div class="section-overlay-layer [ hidden-xs ]">
								<div class="container">

									<!-- CONTACT INFO -->
									<div class="row contact-links">

										<?php

											if(!empty($parallax_one_contact_info_item_decoded)){

													foreach($parallax_one_contact_info_item_decoded as $parallax_one_contact_item){
														if(!empty($parallax_one_contact_item->link)){
															parallax_hook_contact_entry_before();
															echo '<div class="col-sm-4 contact-link-box col-xs-12">';
															parallax_hook_contact_entry_top();
															if(!empty($parallax_one_contact_item->icon_value)){
																echo '<div class="icon-container"><span class="'.esc_attr($parallax_one_contact_item->icon_value).' colored-text"></span></div>';
															}
															if(!empty($parallax_one_contact_item->text)){
																echo '<a href="'.$parallax_one_contact_item->link.'" class="strong">'.html_entity_decode($parallax_one_contact_item->text).'</a>';
															}
															parallax_hook_contact_entry_bottom();
															echo '</div>';
															parallax_hook_contact_entry_after();
														} else {
															parallax_hook_contact_entry_before();
															echo '<div class="col-sm-4 contact-link-box  col-xs-12">';
															parallax_hook_contact_entry_top();
															if(!empty($parallax_one_contact_item->icon_value)){
																echo '<div class="icon-container"><span class="'.esc_attr($parallax_one_contact_item->icon_value).' colored-text"></span></div>';
															}
															if(!empty($parallax_one_contact_item->text)){
																if(function_exists('icl_t')){
																	echo '<a href="" class="strong">'.icl_t('Contact',$parallax_one_contact_item->id.'_contact',html_entity_decode($parallax_one_contact_item->text)).'</a>';
																} else {
																	echo '<a href="" class="strong">'.html_entity_decode($parallax_one_contact_item->text).'</a>';
																}
															}
															parallax_hook_contact_entry_bottom();
															echo '</div>';
															parallax_hook_contact_entry_after();
														}
													}
											}

										?>
									</div><!-- .contact-links -->
								</div><!-- .container -->
							</div>
							<?php parallax_hook_contact_bottom(); ?>
						</div><!-- .contact-info -->
						<?php parallax_hook_contact_after(); ?>
			<?php
				}
			?>

	        <div class="footer-bottom-wrap">
				<?php
					global $wp_customize;

					/* COPYRIGHT */
					$paralax_one_copyright = get_theme_mod('parallax_one_copyright','Themeisle');

					if( !empty($paralax_one_copyright) ){
						echo '<span class="parallax_one_copyright_content">'.esc_attr($paralax_one_copyright).'</span>';
					} elseif ( isset( $wp_customize )   ) {
						echo '<span class="parallax_one_copyright_content paralax_one_only_customizer"></span>';
					}

					/* OPTIONAL FOOTER LINKS */

					echo '<div itemscope role="navigation" itemtype="http://schema.org/SiteNavigationElement" id="menu-secondary" aria-label="'.esc_html__('Secondary Menu','parallax-one').'">';
						echo '<h2 class="screen-reader-text">'.esc_html__( 'Secondary Menu', 'parallax-one' ).'</h2>';
						wp_nav_menu(
							array(
								'theme_location'    => 'parallax_footer_menu',
								'container'         => false,
								'menu_class'        => 'footer-links small-text',
								'depth' 			=> 1,
								'fallback_cb'       => false ) );
					echo '</div>';
					/* SOCIAL ICONS */

					$parallax_one_social_icons = get_theme_mod('parallax_one_social_icons',json_encode(array(array('icon_value' =>'icon-social-facebook' , 'link' => '#'),array('icon_value' =>'icon-social-twitter' , 'link' => '#'),array('icon_value' =>'icon-social-googleplus' , 'link' => '#'))));

					if( !empty( $parallax_one_social_icons ) ){

						$parallax_one_social_icons_decoded = json_decode($parallax_one_social_icons);

						if( !empty($parallax_one_social_icons_decoded) ){

							echo '<ul class="social-icons">';

								foreach($parallax_one_social_icons_decoded as $parallax_one_social_icon){

									echo '<li><a target="_blank" href="'.esc_url($parallax_one_social_icon->link).'"><span class="parallax-one-footer-icons '.esc_attr($parallax_one_social_icon->icon_value).' transparent-text-dark"></span></a></li>';

								}

							echo '</ul>';

						}
					}
				?>

	        </div><!-- .footer-bottom-wrap -->

			<div class="[ text-center font-size--small ] [ margin-top--small ]">Todos los derechos reservados.</div>

            <?php echo apply_filters("parallax_one_plus_footer_text_filter",'<div class="[ hidden ] powered-by"><a href="https://themeisle.com/themes/parallax-one/" target="_blank" rel="nofollow">Parallax One </a>'.esc_html__('powered by ','parallax-one').'<a class="" href="http://wordpress.org/" target="_blank" rel="nofollow">'.esc_html__('WordPress','parallax-one').'</a></div>');?>



	    </div><!-- container -->

		<a class="[ standard-button fixed-button button--left ]" href="tel:+525553353277">
			<img class="[ width--25 ]" src="wp-content/themes/Parallax-One/icons/phone-5.png" alt="ícono teléfono">
		</a>
		<div id="buttom-scroll">
			<a class="[ standard-button fixed-button button-right ]" href="http://tnrindustrial.com/#footer">
				<img class="[ width--25 ]" src="wp-content/themes/Parallax-One/icons/email-2.png" alt="ícono email">
			</a>
		</div>


    </footer>

  </div>
</div>

  <?php parallax_hook_body_bottom(); ?>
	<?php wp_footer(); ?>
</body>
</html>
