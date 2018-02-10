<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hmtd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<footer class="entry-footer">
		<?php hmtd_entry_footer(); ?>
    	</footer><!-- .entry-footer -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hmtd' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hmtd' ),
				'after'  => '</div>',
			) );?>
        <p><a href="<?php the_field('discogs_url')?>">Buy On Discogs</a></p><?php
    
        echo '<p>' .  "Genre:    " . strip_tags(get_the_term_list( $post->ID, 'genre', '', ', ', '' )) .'</p>';
        echo '<p>' .  "Label:    " . strip_tags(get_the_term_list( $post->ID, 'label', '', ', ', '' )) .'</p>';
        echo '<p>' .  "Release Year:    " .  strip_tags(get_the_term_list( $post->ID, 'release_year', '', ', ', '' )) .'</p>';
		?>
	</div><!-- .entry-content -->
	<?php
if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
    echo do_shortcode( '[jetpack-related-posts]' );
}
?>
	

	
</article><!-- #post-## -->
