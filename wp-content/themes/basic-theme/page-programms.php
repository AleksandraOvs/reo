<?php

/**
 * Template name: page programms
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
        <?php get_template_part('templates/programms'); ?>
        </div>
        <div class="full-width-container">
       <?php the_content() ?>
        </div>
    </section>
 
</div>

<?php
get_footer();
