<?php

/**
 * Template name: page books
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
        <?php
        if (has_post_thumbnail()) { // условие, если есть миниатюра
            the_post_thumbnail('full'); // если параметры функции не указаны, то выводится миниатюра текущего поста, размер thumbnail
        } 
        ?>
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php the_title(); ?> </h2>
            </div>
        </div>

        <div class="site-page__content">
            <div class="fixed-container">

            <?php
            $args = array(
                'post_type' => 'books',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <ul class="books-archive__wrapper">
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="entry-post__books__item">
                        <a class="book-link tobottom" href="<?php the_permalink() ?>">
                            <?php echo get_the_post_thumbnail() ?>
                        </a>

                        <div class="entry-post__books__item__content">
                            <h3><?php the_title(); ?></h3>
                            <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                            <a data-fancybox data-src="#popup-buybook" href="javascript:;" class="button fill">Купить</a>
                            <a class="button__book-more" href="<?php the_permalink() ?>">Подробнее</a>
                        </div>   
                        
            </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>






                
            </div>
        </div>




    </section>

</div>

<?php
get_footer();
