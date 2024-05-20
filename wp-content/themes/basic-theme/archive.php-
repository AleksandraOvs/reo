<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div class="page-container">

       
    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
         <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"><?php echo single_term_title(); ?></h2>
            </div>
        </div>

         <?php
      
        if (have_posts()) : ?>
            <div class="fixed-container">
            <div class="archive-posts__grid">
                <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('templates/entry-content'); ?>
                <?php endwhile; ?>
                </div>
            </div>
       <?php endif; ?>



    </section>
 
</div>
</main>



<?php
get_footer();
