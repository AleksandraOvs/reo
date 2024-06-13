<section class="section-hero">
    <?php
    if ($hero_img = carbon_get_theme_option('crb_hero-image')) {
        $hero_img_url = wp_get_attachment_image_url($hero_img, 'full');
        echo '<img src="' . $hero_img_url . '" class="hero-image destr-img" alt="">';
    }
    ?>

    <!-- <div class="section-hero__background"></div> -->

    <div class="section-hero__img">
        <div class="fixed-container">


            <?php
            if ($h1 = carbon_get_theme_option('crb_hero-head')) {
                echo '<div class="section-hero__img__title"><h1>' . $h1 . '</h1></div>';
            }
            ?>




            <div class="section-hero__img__left-content">
                <?php
                if ($hero_desc = carbon_get_theme_option('crb_hero-description')) {
                    echo '<p class="hero-description">' . $hero_desc . ' </p>';
                }
                ?>


                <?php
                if ($button_link = carbon_get_theme_option('crb_button_link')) {
                ?>
                    <a class="hero-button button" href="<?php echo $button_link ?>"><?php echo carbon_get_theme_option('crb_hero_button') ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>








</section>


<div class="section-hero__slider">
    <!-- <div class="fixed-container"> -->
    <?php
    if ($hero_slides = carbon_get_theme_option('hero-slider')) {
    ?>
        <div class="section-hero__slider__img">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/2020-02.jpg' ?>" alt="">
        </div>
        <!-- Slider main container -->
        <!-- <div class="fixed-container"> -->
        <div class="hero-slider swiper">
            <div class="section-hero__slider__header-block">
                <div class="fixed-container">
                    <h2>
                        <?php if ($hero_head = carbon_get_theme_option('crb_hero-slider_head')) {
                            echo $hero_head;
                        }
                        ?>
                    </h2>
                </div>

            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper hero-slider__wrapper">
                <?php
                foreach ($hero_slides as $hero_slide) {
                ?>
                    <div class="swiper-slide hero-slider__slide">


                        <div class="slider-content">
                            <?php echo $hero_slide['hero-slider_content'] ?>
                        </div>

                    </div>

                <?php } ?>

                
            </div>
          <div class="section-hero__slider__controls">
                        <div class="hero-slider__button-prev">
                            <svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.553106 23.6279L23.0049 0.565417C23.7405 -0.189756 24.9315 -0.188486 25.6658 0.569323C26.3996 1.32704 26.3977 2.55447 25.662 3.31023L4.54666 25.0001L25.6628 46.6899C26.3984 47.4457 26.4003 48.6724 25.6666 49.4302C25.2985 49.8101 24.8162 50 24.3339 50C23.8528 50 23.3725 49.8113 23.005 49.4341L0.553106 26.3722C0.198813 26.0091 1.56258e-06 25.5149 1.56258e-06 25.0001C1.56258e-06 24.4853 0.199381 23.9917 0.553106 23.6279Z" fill="white" />
                            </svg>
                        </div>

                        <div class="hero-slider__button-next">
                            <svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.6627 26.3721L3.21092 49.4346C2.47532 50.1898 1.28435 50.1885 0.549981 49.4307C-0.183824 48.673 -0.181928 47.4455 0.553773 46.6898L21.6692 24.9999L0.553018 3.31015C-0.182588 2.55429 -0.184484 1.32763 0.549226 0.569824C0.917361 0.189941 1.39964 1.2235e-07 1.88193 1.64512e-07C2.36298 2.06567e-07 2.84336 0.188675 3.21084 0.565918L25.6627 23.6278C26.017 23.9909 26.2158 24.4851 26.2158 24.9999C26.2158 25.5147 26.0164 26.0083 25.6627 26.3721Z" fill="white" />
                            </svg>
                        </div>
                    </div>
            <div class="hero-slider__pagination"></div>
            <!-- 
            <div class="hero-slider__controls">
                
            </div> -->
        </div>
        <!-- </div> -->
    <?php } ?>
    <!-- </div> -->
</div>