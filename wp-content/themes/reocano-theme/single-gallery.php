<?php get_header() ?>

<div class="page-container">

    <section class="site-page">
        <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php the_title() ?> </h2>
            </div>
        </div>

        <div class="site-page__content _photo-gallery">
            <div class="fixed-container">
                <?php
                if ($gallery_photos = carbon_get_post_meta(get_the_ID(), 'crb_pg_photos')) {
                ?>
                    <?php
                    //print_r ($section_photos = $section_name['crb_pg_photos']);
                    ?>

                    <ul class="photo-gallery__item__list">
                        <?php
                        foreach ($gallery_photos as $photo) {
                            $section_photo_full = wp_get_attachment_image_url($photo['crb_pg_image'], 'full');
                            $section_photo_thumb = wp_get_attachment_image_url($photo['crb_pg_image'], 'full');
                            $section_photo_caption = $photo['crb_pg_image_description'];

                            //echo $section_photo['crb_pg_image'];
                        ?>
                            <li class="photo-gallery__photo">
                                <a href="<?php echo $section_photo_full ?>" data-fancybox="gallery" data-caption="<?php echo $section_photo_caption ?>">
                                    <img class="destr-img" src="<?php echo $section_photo_thumb ?>" alt="">
                                </a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer() ?>