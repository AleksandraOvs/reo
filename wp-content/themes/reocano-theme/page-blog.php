<?php

/**
 * Template name: Blog
 */

get_header(); ?>

<div class="page-container">


    <section class="site-page" style="padding-top:140px;">

        <div class="fixed-container site-page__container">

            <h2><?php the_title() ?></h2>
          
            <div class="blog-description">
            <?php
                echo get_category_by_slug('blog')->description;
                ?>
            </div>


            <?php
            $args = array(
                'category_name' => 'blog',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <ul class="blog__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="blog__list__item">
                            <div class="blog__list__item__thumb">
                                <?php the_post_thumbnail('medium', array('class' => 'destr-img')); ?>
                            </div>
                            <div class="blog__list__item__content">
                                <h3><?php the_title(); ?></h3>
                                <div class="blog__excerpt"><?php the_excerpt() ?>
                                </div>
                            </div>

                            <div class="blog__list__item__more">
                                <a href="<?php the_permalink() ?>" class="blog__more-button button">Читать далее</a>
                            </div>

                            <?php get_template_part('templates/tags') ?>

                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>


    </section>

</div>




<?php
get_footer();
