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
	

	<div class="entry-content">
		<?php
            $args = array( 
                'posts_per_page' => 1,
                'orderby' => 'rand'
            );

            $adverts = new WP_Query( $args );

            while ( $adverts->have_posts() ) : $adverts->the_post();?>

                <div class="advert advert-main">
                    <div class="flex-site-title">
                        <?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hmtd' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) ); ?>
                   
                    </div>
                </div>
<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
        
        ?>
        <div class="entry-meta">
			<?php hmtd_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header>
            <?php endwhile;
                        ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
