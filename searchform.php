<?php
/**
 * The template for displaying search forms in CrackerJack
 *
 * @package CrackerJack
 * @since CrackerJack 1.0
 */
?>
	<section id="searchSection">
		<hr>
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'cJack' ); ?>" />
			<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'cJack' ); ?>" />
		</form>
	</section>
