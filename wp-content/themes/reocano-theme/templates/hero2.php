<div class="section-hero2">

    <div class="section-hero2-elements1"></div>
    <div class="section-hero2-elements2"></div>

    <?php
    if ($hero_img = carbon_get_theme_option('crb_hero-image')) {
        $hero_img_url = wp_get_attachment_image_url($hero_img, 'full');
        echo '<img src="' . $hero_img_url . '" class="hero2-image animateBlur" alt="">';
    }
    ?>

    <div class="fixed-container">


        <?php
        if ($h1 = carbon_get_theme_option('crb_hero-head')) {
            echo '<div class="section-hero__img__title tobottom"><h1>' . $h1 . '</h1></div>';
        }
        ?>




        <div class="section-hero__img__left-content toopacity">


            <?php
            if ($hero_desc = carbon_get_theme_option('crb_hero-description')) {
                echo '<p class="hero-description">' . $hero_desc . ' </p>';
            }
            ?>

        </div>

        <div class="section-hero__programms">
            <?php
            $args = array(
                'post_type' => 'programms',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <h3>Сейчас доступна запись на наши авторские программы:</h3>
                <ul class="programms__list__onhero">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="programms__list__onhero__item">
                            <a href="<?php the_permalink() ?>" class="programms__list__item__thumb__link animateBlur">
                                <?php the_post_thumbnail('medium', array('class' => 'destr-img')); ?>

                                <h4><?php the_title(); ?></h4>
                            </a>

                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

        <?php
        // if ($hero_desc = carbon_get_theme_option('crb_hero-description')) {
        //     echo '<p class="hero-description">' . $hero_desc . ' </p>';
        // }
        ?>


        <?php
        //if ($button_link = carbon_get_theme_option('crb_button_link')) {
        ?>
        <!-- <a class="hero-button button" href="<?php //echo $button_link 
                                                    ?>"><?php //echo carbon_get_theme_option('crb_hero_button') 
                                                        ?></a> -->
        <?php
        //}
        ?>

    </div>
</div>