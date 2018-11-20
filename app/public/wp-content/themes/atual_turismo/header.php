<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package codesigner
 * @since codesigner 0.1
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'codesigner' ), max( $paged, $page ) );

	?></title>

<?php echo get_theme_mod('font_family');?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/icomoon.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/funcoes.js"></script>

<?php wp_head(); ?>

<?php
	$store = get_theme_mod( 'store_link' );
	$HeaderTopSwitch = get_theme_mod( 'codesigner_header_top_switch' );
	$phone = get_theme_mod( 'tel_1' );
	$phoneTitle = get_theme_mod( 'tel_1_title' );
	$HeaderSloganSwitch = get_theme_mod( 'codesigner_header_top_slogan_switch' );
	$HeaderPhoneSwitch = get_theme_mod( 'codesigner_header_top_phone_switch' );
	$HeaderSearchSwitch = get_theme_mod( 'header_bottom_search_switch' );


	$endereco = get_theme_mod( 'endereco' );

		$socialSwitch = get_theme_mod('footer_social_switch');
		$facebookUrl = get_theme_mod('facebook_url');
		$facebookIcon = get_theme_mod('facebook_icon');
		$twitterUrl = get_theme_mod('twitter_url');
		$twitterIcon = get_theme_mod('twitter_icon');
		$youtubeUrl = get_theme_mod('youtube_url');
		$youtubeIcon = get_theme_mod('youtube_icon');
		$instagramUrl = get_theme_mod('instagram_url');
		$instagramIcon = get_theme_mod('instagram_icon');
		$pinterestUrl = get_theme_mod('pinterest_url');
		$pinterestIcon = get_theme_mod('pinterest_icon');
		$gplusUrl = get_theme_mod('gplus_url');
		$gplusIcon = get_theme_mod('gplus_icon');

?>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>

		<?php get_template_part('snippets/full-search'); ?>


	<header class="main-header" role="navigation" id="main-header">

		<?php switch($HeaderTopSwitch):
		case 'yes': ?>
			<div class="header-top">
				<div class="container">
					<div class="wrapper">
						<div class="adress_content">
							<?php if($endereco) :?>
								<?php echo ($endereco);?>
							<?php endif ;?>
						</div>
						<div class="right_content">


						<div class="televendas_topo">
							<?php echo get_theme_mod('tel_1_icon');?>
							<div class="text">
								<?php if($phoneTitle):?><small><?php echo ($phoneTitle); ?></small><?php endif;?>
								<strong><?php echo ($phone); ?></strong>
							</div>
						</div>
						<div class="social_content">
									<ul class="social_list">
										<?php if ($facebookUrl) :?>
											<li><a href="<?php echo($facebookUrl) ?>"><?php echo($facebookIcon) ?></a></li>
										<?php endif; ?>
										<?php if ($twitterUrl) :?>
											<li><a href="<?php echo($twitterUrl) ?>"><?php echo($twitterIcon) ?></a></li>
										<?php endif; ?>
										<?php if ($youtubeUrl) :?>
											<li><a href="<?php echo($youtubeUrl) ?>"><?php echo($youtubeIcon) ?></a></li>
										<?php endif; ?>
										<?php if ($instagramUrl) :?>
											<li><a href="<?php echo($instagramUrl) ?>"><?php echo($instagramIcon) ?></a></li>
										<?php endif; ?>
										<?php if ($pinterestUrl) :?>
											<li><a href="<?php echo($pinterestUrl) ?>"><?php echo($pinterestIcon) ?></a></li>
										<?php endif; ?>
										<?php if ($gplusUrl) :?>
											<li><a href="<?php echo($gplusUrl) ?>"><?php echo($gplusIcon) ?></a></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		<?php break; ?>

		<?php endswitch; ?>


		<div class="header-bottom">
			<div class="container">
				<div class="wrapper">
					<div id="main-menu-trigger" class="visible-sm visible-xs">
						<i></i>
						<i></i>
						<i></i>
					</div>
					<div class="main-logo">
						<?php if ( get_theme_mod( 'upload_logo' ) ) : ?>
							<a href="<?php echo home_url(); ?>">
								<img src='<?php echo esc_url( get_theme_mod( 'upload_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							</a>
						<?php else :?>
							<a href="<?php echo home_url(); ?>">
								<?php bloginfo('name'); ?>
							</a>
						<?php endif; ?>
					</div>

					<div class="main-menu">
						<?php wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => 'div',
							'menu_class'        => 'main-menu-list'
						));	?>
					</div>

							<div class="search-trigger" style="float: right">
								<?php echo get_theme_mod('header_bottom_search_icon');?>
							</div>
				</div>

			</div>
		</div>
	</header>
