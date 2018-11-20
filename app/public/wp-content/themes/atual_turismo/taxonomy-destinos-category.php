<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package codesigner
 * @since codesigner 0.1
 */

get_header();

?>

<div class="filter-overlay"></div>

	<div id="page" class="container">
		<?php do_action( 'before' ); ?>
		<div id="main" class="row">
			<div id="primary" class="col-sm-8 col-xs-12">
				<div id="content" role="main">
					<?php if ( have_posts() ) : ?>
						<ul class="postlist-row updates-list promotion-travel">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<li>
									<span class="trigger_services">
										<figure>
											<?php the_post_thumbnail( '' ); ?>
										</figure>
										<div class="promotion-label">
												<h2>
													<span>PROMOÇÃO POR TEMPO LIMITADO</span>
													<?php the_title()?>
												</h2>
											</div>
										</span>
										<div class="content_form_toogle">
											<span class="close_btn">
												<svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink"
												width="25px" height="25px">
												<path fill-rule="evenodd"  fill="rgb(36, 98, 17)"
												d="M15.242,12.387 L23.808,3.821 C24.596,3.032 24.596,1.754 23.808,0.966 C23.019,0.177 21.741,0.177 20.952,0.966 L12.387,9.532 L3.821,0.966 C3.032,0.177 1.754,0.177 0.966,0.966 C0.177,1.754 0.177,3.032 0.966,3.821 L9.532,12.387 L0.966,20.952 C0.177,21.741 0.177,23.019 0.966,23.808 C1.754,24.596 3.032,24.596 3.821,23.808 L12.387,15.242 L20.952,23.808 C21.741,24.596 23.019,24.596 23.808,23.808 C24.596,23.019 24.596,21.741 23.808,20.952 L15.242,12.387 Z"/>
												</svg>
											</span>
											<div class="title_bg" style="background: url('<?php the_field( 'img_featured_modal' ); ?>')">
												<span><?php the_title()?></span>
											</div>
											<div class="content_form">
												<div class="description_content">
													<?php the_content(); ?>
												</div>
												<div class="form_contact-info">
													<span>Gostou?<b>Entre em contato</b></span>
													 <?php echo do_shortcode('[wpforms id="78" title="false" description="false"]');?>
												</div>
											</div>
									</div>

									<div class="toogle-bg"></div>
								<?php switch($itemButton):
									case 'yes': ?>
										<a href="<?php the_permalink() ?>" class="btn-default">Saiba mais</a>
									<?php break; ?>
								<?php endswitch; ?>
								</li>
							<?php endwhile; ?>
						</ul>
						<div class="pag text-right">
						<?php
						if ( function_exists('vb_pagination') ) {
							vb_pagination();
						}
						?>
						</div>

					<?php else : ?>

						<div class="col-xs-12">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'codesigner' ); ?></h1>
							<div class="entry-content">
								<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'codesigner' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</div><!-- #post-0 -->

					<?php endif; ?>

				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
