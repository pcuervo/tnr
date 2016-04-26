<!-- =========================
 SECTION: TEAM
============================== -->
<?php
	global $wp_customize;
	$parallax_one_our_team_title = get_theme_mod('parallax_one_our_team_title',esc_html__('Our Team','parallax-one'));
	$parallax_one_our_team_subtitle = get_theme_mod('parallax_one_our_team_subtitle',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'));
	$parallax_one_team_content = get_theme_mod('parallax_one_team_content',
		json_encode(
			array(
					array('image_url' => parallax_get_file('/images/team/1.jpg'),'title' => esc_html__('Albert Jacobs','parallax-one'),'subtitle' => esc_html__('Founder & CEO','parallax-one')),
					array('image_url' => parallax_get_file('/images/team/2.jpg'),'title' => esc_html__('Tonya Garcia','parallax-one'),'subtitle' => esc_html__('Account Manager','parallax-one')),
					array('image_url' => parallax_get_file('/images/team/3.jpg'),'title' => esc_html__('Linda Guthrie','parallax-one'),'subtitle' => esc_html__('Business Development','parallax-one'))
			)
		)
	);

	if(!empty($parallax_one_our_team_title) || !empty($parallax_one_our_team_subtitle) || !parallax_one_general_repeater_is_empty($parallax_one_team_content) ){
?>
		<?php parallax_hook_team_before(); ?>
		<section class="[ padding-bottom--80 ]" id="team" role="region" aria-label="<?php esc_html_e('Team','parallax-one') ?>">
			<?php parallax_hook_team_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<?php
						if( !empty($parallax_one_our_team_title) || !empty($parallax_one_our_team_subtitle)){ ?>
							<div class="section-header">
							<?php
								if( !empty($parallax_one_our_team_title) ){
									echo '<h2 class="dark-text">'.esc_attr($parallax_one_our_team_title).'</h2><div class="colored-line"></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>';
								}

							?>

							<?php
								if( !empty($parallax_one_our_team_subtitle) ){
									echo '<div class="sub-heading">'.esc_attr($parallax_one_our_team_subtitle).'</div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<div class="sub-heading paralax_one_only_customizer"></div>';
								}
							?>
							</div>
					<?php
						}


						if(!empty($parallax_one_team_content)){
							echo '<div class="row team-member-wrap">';
							$parallax_one_team_decoded = json_decode($parallax_one_team_content);
							foreach($parallax_one_team_decoded as $parallax_one_team_member){
								if( !empty($parallax_one_team_member->image_url) ||  !empty($parallax_one_team_member->title) || !empty($parallax_one_team_member->subtitle)){?>
									<div class="col-md-3 team-member-box [ no-padding ]">
										<div class="team-member border-bottom-hover">
											<div class="member-pic">
												<?php
													if( !empty($parallax_one_team_member->image_url)){
														if( !empty($parallax_one_team_member->title) ){
															echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_team_member->image_url)).'" alt="'.esc_attr($parallax_one_team_member->title).'">';
														} else {
															echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_team_member->image_url)).'" alt="'.esc_html__('Avatar','parallax-one').'">';
														}
													} else {
														$default_url = parallax_get_file('/images/team/default.png');
														echo '<img src="'.parallax_one_make_protocol_relative_url($default_url).'" alt="'.esc_html__('Avatar','parallax-one').'">';
													}
												?>
											</div><!-- .member-pic -->

											<?php if(!empty($parallax_one_team_member->title) || !empty($parallax_one_team_member->subtitle)){?>
											<div class="member-details">
												<div class="member-details-inner">
													<?php
													if( !empty($parallax_one_team_member->title) ){
														if(function_exists('icl_t')){
															echo '<h5 class="colored-text">'.icl_t('Team',$parallax_one_team_member->id.'_team_title',esc_attr($parallax_one_team_member->title)).'</h5>';
														} else {
															echo '<h5 class="colored-text">'.esc_attr($parallax_one_team_member->title).'</h5>';
														}
													}
													if( !empty($parallax_one_team_member->subtitle) ){ ?>
														<div class="small-text">
															<?php
																if(function_exists('icl_t')){
																	echo icl_t('Team',$parallax_one_team_member->id.'_team_subtitle',esc_attr($parallax_one_team_member->subtitle));
																} else {
																	echo esc_attr($parallax_one_team_member->subtitle);
																}
															?>
														</div>

													<?php
													}
													if( !empty( $parallax_one_team_member->social_repeater ) ){
														$icons = html_entity_decode($parallax_one_team_member->social_repeater);
														$icons_decoded = json_decode($icons, true);
														if( !empty( $icons_decoded ) ){
													 		echo '<ul class="social-icons">';
													 		foreach ($icons_decoded as $value) {
													 			if(!empty($value['icon'])){
													 				echo '<li>';
													 				if(!empty($value['link'])){
													 					echo '<a target="_blank" href="'.esc_url($value['link']).'"><span class="'.esc_attr($value['icon']).'"></span></a>';
													 				} else {
													 					echo '<span class="'.esc_attr($value['icon']).'"></span>';
													 				}
													 				echo '</li>';
													 			}
													 		}
													 		echo '</ul>';
													 	}
													}
													?>
												</div><!-- .member-details-inner -->
											</div><!-- .member-details -->
											<?php } ?>
										</div><!-- .team-member -->
									</div><!-- .team-member -->
									<!-- MEMBER -->
						<?php
								}
							}
							echo '</div>';
						}?>
				</div>
			</div><!-- container  -->
			<?php parallax_hook_team_bottom(); ?>
		</section><!-- #section9 -->
		<?php parallax_hook_team_after(); ?>
<?php
	} else {
		if( isset( $wp_customize ) ) {
?>

			<?php parallax_hook_team_before(); ?>
			<section class="team paralax_one_only_customizer" id="team" role="region" aria-label="<?php esc_html_e('Team','parallax-one') ?>">
				<?php parallax_hook_team_top(); ?>
				<div class="section-overlay-layer">
					<div class="container">
						<div class="section-header">
							<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>
							<div class="sub-heading paralax_one_only_customizer"></div>
						</div>
					</div>
				</div>
				<?php parallax_hook_team_bottom(); ?>
			</section>
			<?php parallax_hook_team_after(); ?>
<?php
		}
	}
?>

<!-- =========================
 SECTION: Videos
============================== -->
<section class="[ services ]" id="videos" role="region" aria-label="">
	<div class="section-overlay-layer">
		<div class="container">
			<!-- SECTION HEADER -->
			<div class="section-header">
				<h2 class="dark-text">Videos</h2><div class="colored-line"></div>
				<div class="sub-heading">Nuestras puertas en acción</div>
			</div>
			<?php
				echo '<div class="services-wrap">';
					echo '<div class="service-box">';
					echo '<div class="single-service single-videos border-bottom-hover">';
						echo '<div class="[ relative ]">';
							echo '<iframe width="100%" height="200" src="https://www.youtube.com/embed/XMPPpV7sHRE" frameborder="0" allowfullscreen></iframe>';
						echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="service-box">';
					echo '<div class="single-service single-videos border-bottom-hover">';
						echo '<div class="[ relative ]">';
							echo '<iframe width="100%" height="200" src="https://www.youtube.com/embed/XMPPpV7sHRE" frameborder="0" allowfullscreen></iframe>';
						echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="service-box">';
					echo '<div class="single-service single-videos border-bottom-hover">';
						echo '<div class="[ relative ]">';
							echo '<iframe width="100%" height="200" src="https://www.youtube.com/embed/XMPPpV7sHRE" frameborder="0" allowfullscreen></iframe>';
						echo '</div>';
					echo '</div>';
					echo '</div>';
				echo '</div>';
			?>
			<div class="[ clearfix ]"></div>
			<div class="[ services-wrap ]" id="buttom-scroll">
				<a href="http://pcuervo.com/tnr/#footer"><button class="standard-button">Contáctanos</button></a>
			</div>
		</div>
	</div>
</section>
