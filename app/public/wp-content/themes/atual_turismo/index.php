<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package codesigner
 * @since codesigner 0.1
 */

get_header(); ?>

<?php
	$sliderTrigger = get_theme_mod('slider_trigger');
	$PostsTrigger = get_theme_mod('posts_trigger');
	$ProductsTrigger = get_theme_mod('products_trigger');
	$EventsTrigger = get_theme_mod('events_trigger');
	$AboutTrigger = get_theme_mod('about_trigger');
;?>


<?php switch($sliderTrigger):
	case '1': ?>
		<?php get_template_part('snippets/slider')?>
	<?php break; ?>
<?php endswitch; ?>


	<div id="page">
		<?php do_action( 'before' ); ?>
		<div id="main">

			<div class="banner-home">
				<?php echo do_shortcode('[banner group="banner-home"]'); ?>
			</div>

			<?php switch($PostsTrigger):
				case '1': ?>
					<?php get_template_part('snippets/featured-posts'); ?>
				<?php break; ?>
			<?php endswitch; ?>

			<div class="" id="destinos">
				<div class="container">
						<div class="title_site">
									<h2>os melhores <b>DESTINOS</b></h2>
						</div>
						<ul>
							<?php
										$slug = 'destinos';
										$term = get_category_by_slug($slug);
										$children = get_terms( $term->taxonomy, array(
												'parent'    => $term->term_id,
												'hide_empty' => false
										) );

										if ( $children ) {
												foreach( $children as $subcat )
												{
														$image = get_field('img_destinos_category', $subcat->taxonomy . '_' . $subcat->term_id );
														echo '<li class="hovereffect"><a href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '" ><figure class="img_content"><img src=" '.$image.' " /></figure><div class="title_hover"><span class="title">'. $subcat->name . '</span><div class="cta">SAIBA MAIS</div></div></a></li>';
												}
										}
								?>
							</ul>
					</div>
			</div>

			<div id="servicos">
					<div class="title_site">
								<h2>nossos <b>SERVIÇOS</b></h2>
					</div>
					<?php get_template_part('snippets/featured-servicos'); ?>
			</div>

			<div id="promocoes">
				<div class="title_site">
							<h2>oba! <b>PROMOÇÕES</b></h2>
				</div>
					<?php get_template_part('snippets/featured-destinos'); ?>
			</div>

			<div class="" id="depoimentos">
				<div class="title_site">
							<h2>confira alguns <b>DEPOIMENTOS</b></h2>
				</div>
				<div class="container">
					<div class="comentarios">
						<?php echo do_shortcode('[testimonial_view id="1"]'); ?>
					</div>
			
			</div>
			</div>

			<div class="" id="sobre">
				<div class="title_site">
							<h2>conheça a <b>ATUAL TURISMO</b></h2>
				</div>

				<?php get_template_part('snippets/about'); ?>
			</div>

		</div><!-- #main -->

	</div><!-- #page -->

	<?php get_footer(); ?>
