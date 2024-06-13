<h2 class="site-page__title">
                Наши книги
            </h2>
            <div class="programms-description">
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
                <div class="archive-posts__grid books">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="entry-post__books">

                        <div class="entry-post__books__item">
<?php echo get_the_post_thumbnail() ?>
                            <div class="entry-post__inner__head">
                                <h3><?php the_title(); ?></h3>
                                <div class="entry-post__excerpt"><?php the_excerpt() ?></div>
                                </div>
                        </div>

                        <!-- <div class="entry-post__books__quote">
                            <div class="post__books__quote">
                                <?php //if ($quote = carbon_get_post_meta(get_the_ID(), 'crb_boot_quote')){
                                   // echo $quote;
                                //}
                                ?>
                            </div>
                             
                        </div> -->
                            
                        <a href="<?php the_permalink() ?>" class="entry-post__books__more">Подробнее</a> 
                            

                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>