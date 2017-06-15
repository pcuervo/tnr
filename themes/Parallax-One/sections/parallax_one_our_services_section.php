<?php
	$puertas = new WP_Query( array('posts_per_page' => -1, 'post_type' => array( 'puertas' ) ) );
	$puerta_count_0 = 0;
	$puerta_count_1 = 1;
	if ( $puertas->have_posts() ) :
?>
		<section class="[ services ]" id="services" role="region" aria-label="<?php esc_html_e('Services','parallax-one') ?>">
			<?php parallax_hook_services_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<div class="section-header">
						<h2 class="dark-text">Nuestras puertas</h2>
						<div class="colored-line"></div>
						<div class="sub-heading">TNR México ofrece una nueva generación de puertas industriales de alto rendimiento de caucho reforzado con garantía de por vida, brindando un ahorro de energía y mantenimiento como ninguna otra marca en el mercado.</div>
					</div>

					<div id="our_services_wrap" class="services-wrap our_services_wrap_piterest parallax_one_grid parallax_one_grid_DgNZR5qWGT">

						<?php while ( $puertas->have_posts() ) : $puertas->the_post();
							$ficha = get_post_meta($post->ID, '_ficha_puerta_meta', true);
							$mas = get_post_meta($post->ID, '_mas_puerta_meta', true);
							$terms = get_the_terms($post->ID, 'aplicacion');
						?>
							<div class="parallax_one_grid_col_3 parallax_one_grid_column_<?php echo $puerta_count_1; ?> parallax_one_grid_first">
								<div class="service-box" parallax_onegrid-attr="this-<?php echo $puerta_count_0; ?>">
									<div class="single-service border-bottom-hover">
										<?php the_post_thumbnail('medium'); ?>
										<div class="clearfix"></div>
										<h3 class="colored-text"><?php the_title(); ?></h3>
										<?php the_content(); ?>
										<a target="_blank" href="<?php echo $ficha; ?>">Ficha técnica</a> <br />
										<a target="_blank" href="<?php echo $mas; ?>">Ver más</a>
										<div class="[ text-center ]">
											<h6>Aplicaciones</h6>
											<?php foreach ($terms as $term) { ?>
												<img class="[ inline-block ][ margin--small ][ width--15-percent ]" src="<?php echo THEMEPATH.'images/aplicaciones/'.$term->slug.'.png'; ?>" alt="<?php echo $term->slug; ?>">
											<?php } ?>
										</div>

									</div>
								</div>
							</div>

						<?php $puerta_count_1++; $puerta_count_0++; endwhile; ?>

						<div class="parallax_one_grid_col_3 parallax_one_grid_column_<?php echo $puerta_count_1; ?> parallax_one_grid_first">
							<div class="service-box" parallax_onegrid-attr="this-<?php echo $puerta_count_0; ?>">
								<div class="[ bg-primary ] single-service border-bottom-hover">
									<div class="service-icon colored-text">
										<span class="No Icon"></span>
									</div>
									<h3 class="color-light">Conoce más de nuestros diferentes modelos de puertas</h3>
									<p>
										<br>
										<a href="http://www.tnrdoors.com/" target="_blank">
											<button class="standard-button [ button-yellow ]">
												Más productos
											</button>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php endif; ?>