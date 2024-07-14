            <h2 class="site-page__title" id="programms">
                Авторские программы
            </h2>
            <div class="programms-description">
                <p>Наши программы путешествий — это авторские программы Павла Берснева, Юлии Грабарь и команды Клуба Курандерос. Они составлены со знанием, опытом и любовью к древним цивилизациям, традиционной культуре и самобытности коренных народов. Мы собрали настоящую сокровищницу знаний, ритуалов и обычаев, которые помогают участникам наших программ путешествий познать мир, себя и найти ключи к душевному и физическому здоровью и гармонии.</p>
                <p>
                    Мы осуществляем как групповые, так и индивидуальные программы путешествий по вашему запросу.</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'programms',
                'publish' => true,
                //'paged' => get_query_var('paged'),
            );
            query_posts($args);
            if (have_posts()) : ?>
                <ul class="programms__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="programms__list__item">
                            <div class="programms__list__item__thumb">
                            <?php the_post_thumbnail('medium', array('class' => 'destr-img'));?>
                            </div>
                            <div class="programms__list__item__content">
                                <h3><?php the_title(); ?></h3>
                                <div class="programms__excerpt"><?php the_excerpt() ?>
                                </div>
                            </div>

                            <div class="programms__list__item__more">
                                <a href="<?php the_permalink() ?>" class="programms__more-button button">Узнать подробнее</a>
                            </div>


                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>