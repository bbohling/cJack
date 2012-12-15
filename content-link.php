<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package CrackerJack
 * @since CrackerJack 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php if (function_exists('mbj_link_blog_link_url_display')) { 
mbj_link_blog_link_url_display(); 
} 
?>"><?php the_title(); ?> &rarr;</a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'cJack' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'cJack' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->