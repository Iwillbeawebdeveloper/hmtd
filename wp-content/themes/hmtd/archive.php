<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hmtd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<!-- Adverts section -->

            <?php
            include('includes/adverts.php')
            

            ?>

            <!-- End of adverts section -->

		<?php
		if ( have_posts() ) : ?>
<div class="posts-section"><h2><?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?></h2><div class="posts-section-new">


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-index', get_post_format() );

			endwhile;

			?> </div></div> <div class="nav-links-container"><div class="nav-previous"><?php next_posts_link( 'Older tracks' ); ?></div>
<div class="nav-next"><?php previous_posts_link( 'Newer tracks' ); ?></div></div><?php
            

						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
