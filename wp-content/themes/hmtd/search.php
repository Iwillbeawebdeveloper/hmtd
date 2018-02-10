<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hmtd
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<!-- Adverts section -->

            <?php
            include('includes/adverts.php')
            

            ?>

            <!-- End of adverts section -->

		<?php
		if ( have_posts() ) : ?>
            <div class="posts-section"><h2><?php printf( esc_html__( 'Search Results for: %s', 'hmtd' ), '<span>' . get_search_query() . '</span>' ); ?></h2><div class="posts-section-new">



			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content-index', 'search' );

			endwhile;

			?> </div></div> <div class="nav-links-container"><div class="nav-previous"><?php next_posts_link( 'Older tracks' ); ?></div>
<div class="nav-next"><?php previous_posts_link( 'Newer tracks' ); ?></div></div><?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
