<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {

		get_header();

		parallax_one_get_template_part( apply_filters("parallax_one_plus_header_layout","/sections/parallax_one_header_section"));
	?>
		</div>
		<!-- /END COLOR OVER IMAGE -->
		<?php parallax_hook_header_bottom(); ?>
	</header>
	<!-- /END HOME / HEADER  -->
	<div class="[ relative ]">	<!-- VIDEO HEADER -->
		<div class="[ hidden-sm ]">
			<div class="[ bg-image rectangle ]" style="background-image: url('wp-content/themes/Parallax-One/images/header-bg.jpg');" alt="imagen tnr">
				<div class="[ container width--100 ][ title-video ]">
					<p>PUERTAS INDUSTRIALES DE ALTO RENDIMIENTO</p>
				</div>
			</div>
		</div>
		<div class="[ hidden-xs ][ content-video ]">
			<!-- <iframe width="100%" height="700" src="https://www.youtube.com/embed/XMPPpV7sHRE?autoplay=1&rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe> -->
			<video class="[ width--100 ][ position-video ]" autoplay loop muted>
				<source src="wp-content/themes/Parallax-One/video/tnr_approved.mp4" type="video/mp4">
			</video>
		</div>
	</div>

	<?php parallax_hook_header_after(); ?>

	<?php parallax_hook_content_before(); ?>
	<div itemprop id="content" class="content-warp" role="main">
	<?php parallax_hook_content_top(); ?>
	<?php

		$sections_array = apply_filters("parallax_one_plus_sections_filter",array('sections/parallax_one_logos_section','sections/parallax_one_our_services_section','sections/parallax_one_our_story_section','sections/parallax_one_our_team_section','sections/parallax_one_happy_customers_section','sections/parallax_one_ribbon_section','sections/parallax_one_latest_news_section','sections/parallax_one_contact_info_section','sections/parallax_one_map_section'));

		if(!empty($sections_array)){
			foreach($sections_array as $section){
				parallax_one_get_template_part($section);
			}
		}
	?>
	<?php parallax_hook_content_bottom(); ?>
	</div><!-- .content-wrap -->
	<?php parallax_hook_content_after(); ?>
	<?php

	get_footer();
} else {

	include( get_page_template() );
}
?>
