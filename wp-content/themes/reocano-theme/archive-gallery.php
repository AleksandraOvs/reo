<?php

/**
 * Template name: Фотогалерея
 **/

get_header() ?>

<div class="page-container">

    <section class="site-page">
        <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> Фотогалерея </h2>
            </div>

        </div>
        <div class="fixed-container">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>
        </div>

        <div class="site-page__content _photo-gallery">
            <div class="fixed-container">

            <div class="photo-gallery__content-area">
                <?php the_content() ?>
            </div>

                <?php
                $args = array(
                    'post_type' => 'gallery',
                    'publish' => true,
                    //'paged' => get_query_var('paged'),
                );
                query_posts($args);
                if (have_posts()) : ?>
                    <ul class="photo-gallery__list">
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="photo-gallery__list__item">
                            <a class="photo-gallery__list__item__link" href="<?php the_permalink() ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'destr-img'));
                                    } else {
                                        echo '<img src="' . get_stylesheet_directory_uri() . '/images/placeholder.jpg" />';
                                    }
                                    ?>
                                
                                <div class="photo-gallery__list__item__content">
                                    <h3><?php the_title(); ?></h3>
                                </div>

                            </a>
                            

                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>

    </section>
</div>

<?php get_footer() ?>