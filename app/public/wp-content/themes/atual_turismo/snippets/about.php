<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 17/02/17
 * Time: 23:42
 */?>

<!-- SOBRE A EMPRESA -->

<div id="sobre" class="parallax-about">
	<div class="container">
		<?php
		$sobre = new WP_Query(
			array(
				'pagename' => 'quem-somos',
				'posts_per_page' => 1,
			)
		);
		?>
		<?php if( $sobre->have_posts() ): ?>
			<?php while( $sobre->have_posts() ) : $sobre->the_post(); ?>
				<div class="content">
					<?php the_content() ?>
				</div>
			<?php endwhile;?>
		<?php endif;?>
		<?php wp_reset_query() ;?>
	</div>
</div>
