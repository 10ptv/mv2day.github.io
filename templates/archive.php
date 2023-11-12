<?php

/**
 * The template for displaying Archive pages.
 *
 * Theme: My Theme
 */

get_header();
?>

<section id="primary">
    <div id="content" role="main">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">Doctors</h1>
            </header>

            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>
            <p>No doctors found.</p>
        <?php endif; ?>

    </div><!-- #content -->
</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>