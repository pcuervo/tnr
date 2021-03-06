<!-- =========================
 SECTION: Button header
============================== -->
<?php $contactanos_home = get_page_by_path('contactanos-home'); ?>
<div class="[ services ][ bg-primary ]">
	<div class="container" id="buttom-scroll">
		<div class="[ arrow-video ]">
			<a href="http://tnrindustrial.com/#clients"><img class="[ icon-arrow ]" src="wp-content/themes/Parallax-One/icons/arrow-down-9.png" alt="Ícono flecha abajo"></a>
		</div>
		<div class="[ text-center ][ relative bottom--20 ]">
			<h3 class="[ inline-block ][ color-light ][ padding-bottom--20 ]"><?php echo $contactanos_home->post_content; ?></h3>
			<a href="http://tnrindustrial.com/#footer" class="[ margin--sides ]"><button class="standard-button [ button-yellow ]">Contáctanos</button></a>
		</div>
	</div>
</div>

<!-- =========================
 SECTION: CLIENTS LOGOs
============================== -->
<?php
	$parallax_one_logos = get_theme_mod('parallax_one_logos_content',
		json_encode(
			array(
				array("image_url" => parallax_get_file('/images/companies/1.png') ,"link" => "#" ),
				array("image_url" => parallax_get_file('/images/companies/2.png') ,"link" => "#" ),
				array("image_url" => parallax_get_file('/images/companies/3.png') ,"link" => "#" ),
				array("image_url" => parallax_get_file('/images/companies/4.png') ,"link" => "#" ),
				array("image_url" => parallax_get_file('/images/companies/5.png') ,"link" => "#" )
			)
		)
	);
	if(!empty($parallax_one_logos)){
		$parallax_one_logos_decoded = json_decode($parallax_one_logos);
		parallax_hook_logos_before();
		echo '<div class="clients" id="clients" role="region" aria-label="'.__('Affiliates Logos','parallax-one').'">';
		parallax_hook_logos_top();
		echo '<div class="container">';
			echo '<div class="section-header">';
				echo '<h2 class="dark-text">Aplicaciones</h2><div class="colored-line"></div>';
			echo '</div>';
			echo '<ul class="client-logos padding-bottom--50">';
			foreach($parallax_one_logos_decoded as $parallax_one_logo){
				if(!empty($parallax_one_logo->image_url)){

					echo '<li>';
					if(!empty($parallax_one_logo->link)){
						echo '<a href="'.$parallax_one_logo->link.'" title="">';
							echo '<img src="'.parallax_one_make_protocol_relative_url($parallax_one_logo->image_url).'" alt="'. esc_html__('Logo','parallax-one') .'">';
						echo '</a>';
					} else {
						echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_logo->image_url)).'" alt="'.esc_html__('Logo','parallax-one').'">';
					}
					echo '</li>';


				}
			}
			echo '</ul>';
		echo '</div>';
		parallax_hook_logos_bottom();
		echo '</div>';
		parallax_hook_logos_after();
	}
?>

