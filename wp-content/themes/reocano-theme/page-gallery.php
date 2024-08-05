<?php

/**
 * Template name: Фотогалерея
 **/

get_header() ?>

<div class="page-container">

    <section class="site-page">
        <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php the_title(); ?> </h2>
            </div>
        </div>

        <div class="site-page__content _photo-gallery">
            <div class="fixed-container">
                <div class="photo-gallery__sidebar">
                    <?php
                    $section_names = carbon_get_post_meta(get_the_ID(), 'photo_sections');
                    ?>
                    <ul class="photo-gallery__sidebar__list">
                        <?php
                        foreach ($section_names as $section_name) {
                            $section_heading = $section_name['crb_pg_section_name'];
                            $section_id = $section_name['crb_pg_section_id'];
                        ?>
                            <li class="photo-gallery__sidebar__list__item">
                                <a href="#<?php echo $section_id ?>" href=""><?php echo $section_heading ?></a>

                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="photo-gallery__content">
                    <?php


                    foreach ($section_names as $section_name) {
                        $section_heading = $section_name['crb_pg_section_name'];
                        $section_id = $section_name['crb_pg_section_id'];

                        echo '<div class="section-item"><h3 id="' . $section_id . '" class="title">' . $section_heading . '</h3>';

                    ?>

                        <?php
                        //print_r ($section_photos = $section_name['crb_pg_photos']);
                        ?>
                        <?php
                        if ($section_photos = $section_name['crb_pg_photos']) {
                        ?>
                            <ul class="photo-gallery__list">
                                <?php
                                foreach ($section_photos as $section_photo) {
                                    $section_photo_full = wp_get_attachment_image_url($section_photo['crb_pg_image'], 'full');
                                    $section_photo_thumb = wp_get_attachment_image_url($section_photo['crb_pg_image'], 'medium');

                                    //echo $section_photo['crb_pg_image'];
                                ?>
                                    <li class="photo-gallery__list__item">
                                        <a href="<?php echo $section_photo_full ?>" data-fancybox="gallery" data-caption="<?php echo $section_photo_caption ?>">
                                            <img class="destr-img" src="<?php echo $section_photo_thumb ?>" alt="">
                                        </a>

                                        <?php
                                        if ($section_photo_caption = $section_photo['crb_pg_image_description']) {
                                            echo '<div class="photo-desc">
                                            <p>' . $section_photo_caption . '</p>
                                        </div>';
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        <?php
                        }

                        ?>
                </div>

            <?php
                    }



            ?>
            </div>
        </div>

    </section>
</div>

<?php get_footer() ?>