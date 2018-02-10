<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
            
            if ( have_posts() ) :
                ?>
                    <div class="posts-section">
                        <h2>New Tracks</h2>
                        <div class="posts-section-new">
                            <?php
			if ( is_home() && ! is_front_page() ) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>

                                <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-index', get_post_format() );

			endwhile;
            
            ?>
                        </div>
                    </div>
                    <div class="nav-links-container">
                        <div class="nav-next">
                            <?php previous_posts_link( '<< Newer tracks' ); ?>
                        </div>
                        <div class="nav-previous">
                            <?php next_posts_link( 'Older tracks >>' ); ?>
                        </div>
                    </div>
                    <?php
            
            
            

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

        </main>
                        </div>


    <?php
get_sidebar();
get_footer();
