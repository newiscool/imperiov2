<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="widget-search">
		<input type="text" class="search-field" name="s" id="s" placeholder="<?php esc_attr_e( 'Busca', 'codesigner' ); ?>" />
		<button type="submit" class="btn btn-secondary" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'OK', 'codesigner' ); ?>"><span class="icon-search"></span>OK</button>
	</form>

<!--<div class="col-lg-6">-->
<!--	<div class="input-group">-->
<!--		<input type="text" class="form-control" placeholder="Search for...">-->
<!--          <span class="input-group-btn">-->
<!--            <button class="btn btn-default" type="button">Go!</button>-->
<!--          </span>-->
<!--	</div><!-- /input-group -->
<!--</div>-->
