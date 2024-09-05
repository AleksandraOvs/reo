<?php

/**
 
 */

get_header(); ?>

<div class="page-container">

    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
        <div class="page-section__header">
        <?php
        // if (has_post_thumbnail()) { // условие, если есть миниатюра
        //     the_post_thumbnail('full'); // если параметры функции не указаны, то выводится миниатюра текущего поста, размер thumbnail
        // } 
        ?>
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> Наши книги </h2>
            </div>
        </div>

        <div class="fixed-container">
        <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
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
                            <!-- <a data-fancybox data-src="#popup-buybook" href="javascript:;" class="button fill">Купить</a> -->
                            <a class="button button__book-more" href="<?php the_permalink()?>/#feedback">Отзывы</a>
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
