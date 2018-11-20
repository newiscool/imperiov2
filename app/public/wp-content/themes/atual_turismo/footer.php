<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package codesigner
 * @since codesigner 0.1
 */
?>

<?php
	$newsSwitch = get_theme_mod('footer_newsletter_switch');
	$mainSwitch = get_theme_mod('footer_main_switch');
	$mail1 = get_theme_mod( 'email_1' );
	$mail1Name = get_theme_mod( 'email_1_name' );
	$mail2 = get_theme_mod( 'email_2' );
	$mail2Name = get_theme_mod( 'email_2_name' );
	$mail3 = get_theme_mod( 'email_3' );
	$mail3Name = get_theme_mod( 'email_3_name' );
	$mail4 = get_theme_mod( 'email_4' );
	$mail4Name = get_theme_mod( 'email_4_name' );
	$tel1 = get_theme_mod( 'tel_1' );
	$tel1Title =get_theme_mod( 'tel_1_title' );
	$tel2 = get_theme_mod( 'tel_2' );
	$tel2Title =get_theme_mod( 'tel_2_title' );
	$tel3 = get_theme_mod( 'tel_3' );
	$tel3Title =get_theme_mod( 'tel_3_title' );
	$tel4 = get_theme_mod( 'tel_4' );
	$tel4Title =get_theme_mod( 'tel_4_title' );
	$dados = get_theme_mod( 'dados_empresa' );
	$endereco = get_theme_mod( 'endereco' );
	$horario = get_theme_mod( 'horario_atendimento' );
	$logo_footer = get_theme_mod( 'footer_logo' );

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

<footer class="footer">
	<?php switch($newsSwitch):
		case '1': ?>
			<div class="footer-newsletter">
				<div class="container">
					<h3><?php echo get_theme_mod('footer_news_title');?></h3>
					<?php echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="5" PAGINATE="1" PERPAGE="5" SHOWFORM="1" HIDEREVIEWS="0" HIDERESPONSE="0" SNIPPET="" MORE="" HIDECUSTOM="0" ]'); ?>


				</div>
			</div>
		<?php break; ?>
	<?php endswitch; ?>

	<?php switch($mainSwitch):
	case '1': ?>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-xs-12">

					<div class="footer-box">
						<?php if(get_theme_mod('facebook_url')):?>
						<div class="likebox">
							<div class="fb-page" data-href="<?php echo get_theme_mod( 'facebook_url' ); ?>" data-small-header="true" data-adapt-container-width="true" data-width="1000" data-hide-cover="true" data-show-facepile="true"><blockquote cite="<?php echo get_theme_mod( 'facebook_url' ); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_theme_mod( 'facebook_url' ); ?>">Stra Medical</a></blockquote></div>
						</div>
						<?php endif;?>
						<?php if ($mail1) :?>
						<div class="footer-block">
							<?php if ($mail1Name) :?>
							<h3><?php echo ($mail1Name) ?></h3>
							<?php endif; ?>
							<p><?php echo ($mail1);?></p>
						</div>
						<?php endif; ?>
						<?php if ($mail2) :?>
						<div class="footer-block">
							<?php if ($mail2Name) :?>
								<h3><?php echo ($mail2Name) ?></h3>
							<?php endif; ?>
							<p><?php echo ($mail2);?></p>
						</div>
						<?php endif; ?>
						<?php if ($mail3) :?>
						<div class="footer-block">
							<?php if ($mail3Name) :?>
								<h3><?php echo ($mail3Name) ?></h3>
							<?php endif; ?>
							<p><?php echo ($mail3);?></p>
						</div>
						<?php endif; ?>
						<?php if ($mail4) :?>
						<div class="footer-block">
							<?php if ($mail4Name) :?>
								<h3><?php echo ($mail4Name) ?></h3>
							<?php endif; ?>
							<p><?php echo ($mail4);?></p>
						</div>
						<?php endif; ?>
					</div>

				</div>
				<div class="col-sm-5 col-xs-12">
					<div class="footer-box">
						<?php if ($dados || $endereco) :?>
						<div class="footer-block">
							<p>
							<?php if($dados) :?>
								<?php echo ($dados);?>
							<?php endif ;?>
							<?php if($endereco) :?>
								<?php echo ($endereco);?>
							<?php endif ;?>
							</p>
						</div>
						<?php endif; ?>

						<?php if ($horario) :?>
							<div class="footer-block">
								<h3>Horário de atendimento</h3>
								<p><?php echo ($horario);?></p>
							</div>
						<?php endif; ?>

						<div class="footer-block">
						<?php if ($tel1) :?>
							<div class="televendas">
								<?php echo get_theme_mod('tel_1_icon');?>
								<div class="text">
									<?php if($tel1Title):?><small><?php echo ($tel1Title); ?></small><?php endif;?>
									<strong><?php echo ($tel1); ?></strong>
								</div>
							</div>
						<?php endif; ?>
						<?php if ($tel2) :?>
							<div class="televendas">
								<?php echo get_theme_mod('tel_2_icon');?>
								<div class="text">
									<?php if($tel2Title):?><small><?php echo ($tel2Title); ?></small><?php endif;?>
									<strong><?php echo ($tel2); ?></strong>
								</div>
							</div>
						<?php endif; ?>
						<?php if ($tel3) :?>
							<div class="televendas">
								<?php echo get_theme_mod('tel_3_icon');?>
								<div class="text">
									<?php if($tel3Title):?><small><?php echo ($tel3Title); ?></small><?php endif;?>
									<strong><?php echo ($tel3); ?></strong>
								</div>
							</div>
						<?php endif; ?>
						<?php if ($tel4) :?>
							<div class="televendas">
								<?php echo get_theme_mod('tel_4_icon');?>
								<div class="text">
									<?php if($tel4Title):?><small><?php echo ($tel4Title); ?></small><?php endif;?>
									<strong><?php echo ($tel4); ?></strong>
								</div>
							</div>
						<?php endif; ?>
						</div>

						<?php if ($logo_footer) :?>
							<div class="footer-block footer-logo">
								<img src="<?php echo ($logo_footer);?>" alt="">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php break; ?>
	<?php endswitch; ?>

	<div class="footer-ressalva">
		<div class="container">
			<?php if (get_theme_mod('ressalva_title')): ?>
				<h3><?php echo get_theme_mod('ressalva_title')?></h3>
			<?php endif;?>
			<p><?php echo get_theme_mod('ressalva_text');?></p>
		</div>
	</div>
	<?php switch($socialSwitch):
	case '1': ?>
	<div class="footer_social">
		<div class="container">
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
		<?php break; ?>
	<?php endswitch; ?>


</footer><!-- #colophon -->
<?php wp_footer(); ?>
<?php echo get_theme_mod('analytics');?>
</body>
</html>
