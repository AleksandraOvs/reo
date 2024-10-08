<div class="fixed-container">
    <div class="books-header__inner__head">
        <h2 class="site-page__title">
            Наши книги
        </h2>
    </div>
    <div class="books-description">
        <p>Уникальные знания, приобретенные в наших путешествиях, учредитель и организатор Клуба Курандерос Павел Берснев бережно собирает и описывает в книгах. Они погружают читателей в мир традиционного врачевания и уникальных ритуалов аутентичных родовых шаманов.</p>
    </div>

    <?php
$args = array(
    'post_type' => 'books',
    'publish' => true,
    //'paged' => get_query_var('paged'),
);
query_posts($args);
if (have_posts()) : ?>

    <div class="swiper books-slider">


        <div class="swiper-wrapper">

            <?php while (have_posts()) : the_post(); ?>
                <div class="swiper-slide books-slider__slide">

                    <div class="books-slider__slide__item">
                        <a class="books-slider__slide__link" href="<?php the_permalink() ?>">
                            
                        <?php
                        if ( has_post_thumbnail() ) {    
                        echo get_the_post_thumbnail();
                        }else {
                            ?>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/placeholder.jpg" alt="">
                            <?php
                        } ?>

                            <!-- <div class="books-slider__slide__excerpt"><?php //the_excerpt() ?></div> -->
                        </a>
                        <!-- <div class="entry-post__books__item__head">
                            
                        </div>    -->
                        <h3><?php the_title(); ?></h3>

                        <!-- <a class="button">Купить</a> -->
                    </div>


                    <!-- <div class="entry-post__books__quote">
                            <div class="post__books__quote">
                                <?php //if ($quote = carbon_get_post_meta(get_the_ID(), 'crb_boot_quote')){
                                // echo $quote;
                                //}
                                ?>
                            </div>
                             
                        </div> -->


                </div>
            <?php endwhile; ?>


        </div>


        <div class="books-slider__pagination"></div>


    </div>


<?php endif; ?>


</div>


