<?php
/**
 * @package CrackerJack
 * @since CrackerJack 1.0
 */
?>

<li><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cJack' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a> <span class="entry-meta"><?php cJack_posted_on(); ?></span>
</li>