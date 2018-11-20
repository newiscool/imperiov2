<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package codesigner
 * @since codesigner 0.1
 */
?>
		<div id="secondary" class="widget-area col-sm-4" role="complementary">
			<div class="filter-close visible-xs">
				<i></i>
				<i></i>
			</div>
			<div class="sidebar-inner">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

					<aside id="search" class="widget widget_search">
						<?php get_search_form(); ?>
					</aside>

					<aside id="archives" class="widget">
						<h1 class="widget-title"><?php _e( 'Archives', 'codesigner' ); ?></h1>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget">
						<h1 class="widget-title"><?php _e( 'Meta', 'codesigner' ); ?></h1>
						<ul>
							<?php wp_register(); ?>
							<aside><?php wp_loginout(); ?></aside>
							<?php wp_meta(); ?>
						</ul>
					</aside>

				<?php endif; // end sidebar widget area ?>
			</div>
		</div><!-- #secondary .widget-area -->