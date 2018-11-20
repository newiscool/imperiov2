<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 17/02/17
 * Time: 23:54
 */

?>

<?php
	$autoPlay = get_theme_mod('slider_auto_play');
	$timeOut = get_theme_mod('slider_time');
	$itemCount = get_theme_mod('slider_item_count');
	$showCats = get_theme_mod('slider_show_category');
	$alignment = get_theme_mod('slider_alignment');
?>

<div class="lightbox-wrapper" id="cotarProdutoBanner">
	<div class="lightbox-shadow"></div>
	<div class="lightbox-centralize">
		<div class="lightbox-panel">
				<span class="label-lightbox">
					<i class="icon-cotacao"></i><span>Orçamento</span>
				</span>
			<div class="lightbox-close">
				<i></i>
				<i></i>
			</div>
			<div class="lightbox-title">
				<h4>Informe os dados abaixo e receba retorno da nossa equipe em até 48h.</h4>
			</div>
			<div class="lightbox-body">
				<?php echo do_shortcode('[contact-form-7 id="93" title="Formulário de Orçamento"]')?>
			</div>
		</div>
	</div>
</div>

<!-- SLIDER -->
<?php
// args
$bannerargs = array(
	'numberposts'	=> -1,
	'posts_per_page' => $itemCount,
	'post_type'		=> array('post','produtos','eventos'),
	'meta_query'	=> array(
		'relation'		=> 'AND',
		array(
			'key'	  	=> 'destaque_no_banner',
			'value'	  	=> '1',
			'compare' 	=> '=',
		),
	),
);
$banner_query = new WP_Query( $bannerargs );

function custom_field_excerpt() {
	global $post;
	$text = get_field('descricao');
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 10; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
function custom_field_excerpt_longer() {
	global $post;
	$text = get_field('descricao');
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 25; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

?>

<?php if( $banner_query->have_posts() ): ?>

	<div class="join-call">

		<div class="homeslider">
			<?php while( $banner_query->have_posts() ) : $banner_query->the_post(); ?>
				<?php
				$bannerDefaultBg = esc_url( get_theme_mod( 'codesigner_banner_background' ) );
				$bannerCustomBg = get_field('imagem_do_banner');
				?>
				<div class="banner-item">
					<?php if($bannerCustomBg):?>
						<div class="fill" style='background-image: url(<?php echo ($bannerCustomBg); ?>);'></div>
					<?php else:?>
						<div class="fill" style='background-image: url(<?php echo ($bannerDefaultBg); ?>);'></div>
					<?php endif;?>
					<div class="container">
						<div class="banner-itembox <?php switch($showCats): case '1': echo('has_cats'); break; endswitch; switch($alignment): case 'left': echo(' align-left'); break; case 'center': echo(' align-center'); break; case 'right': echo (' align-right'); break; endswitch;?>">
							<?php switch($showCats):
								case '1': ?>
									<div class="category">
										<?php echo taxonomies_terms_links(); ?>
									</div>
								<?php break; ?>
							<?php endswitch; ?>

							<a href="<?php the_permalink(); ?>">
								<h1 class="banner-title"><?php the_title(); ?></h1>
							</a>
							<div class="slider-content">
								<a href="<?php the_permalink(); ?>"><?php echo custom_field_excerpt_longer(); ?></a>
								<?php if(get_field('texto_do_banner')):?>
								<a href="<?php the_permalink(); ?>"><?php echo(the_field('texto_do_banner'));?></a>
								<?php else:?>
								<a href="<?php the_permalink(); ?>"><?php the_content();?></a>
								<?php endif;?>
							</div>

							<?php if( get_field('tipo_de_venda') == 'Orçamento' ) : ?>
								<div class="form-trigger banner-trigger action-link"><i class="icon-cotacao"></i><span>Orçamento</span></div>
							<?php else :?>
								<a class="action-link" href="<?php echo the_permalink() ?>"><span>Saiba mais</span></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	</div>
<?php endif; ?>
<?php wp_reset_query() ;?>


<script type="text/javascript">
	$(document).ready(function(){
		$('.homeslider').owlCarousel({
			items: 1,
			autoplay: <?php echo ($autoPlay);?>,
			autoplayTimeout:<?php echo ($timeOut);?>000,
			loop:true,
			nav:true,
			navText: ['<?php echo get_theme_mod('slider_left_arrow')?>', '<?php echo get_theme_mod('slider_right_arrow')?>'],
			autoHeight : true,
		});
	});
</script>
