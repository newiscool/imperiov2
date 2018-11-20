<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 17/02/17
 * Time: 18:51
 */

?>
<!-- UPDATES -->

<?php
	$productColumns = get_theme_mod('ft_products_columns');
	$itemButton = get_theme_mod('ft_products_item_show_button');
?>

<?php switch($productColumns):
	case '1':
		$productCount = '1';
	break;
	case '2':
		$productCount = '2';
	break;
	case '3':
		$productCount = '3';
	break;
	case '4':
		$productCount = '4';
	break;
endswitch; ?>

<div class="featured-block featured-products">
	<div class="container">
		<div class="updates-wrapper">
			<ul class="updates-list promotion-travel">
				<?php
				$product = new WP_Query(
					array(
						'category' => 'destinos',
						'posts_per_page' => $productCount,
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key' => 'destino_em_promocao',
								'value'	  	=> '1',
								'compare' 	=> '=',
							),
						),
					)
				);
				?>
				<?php if( $product->have_posts() ): ?>
					<?php while( $product->have_posts() ) : $product->the_post(); ?>
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
									<div class="title_bg">
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
					<?php endwhile;?>
				<?php endif;?>
				<?php wp_reset_query() ;?>
			</ul>
		</div>
	</div>
</div>

<style>
  .title_bg{
    background-image: url("<?php bloginfo('template_directory'); ?>/img/staticimg.png ");
  }
</style>
