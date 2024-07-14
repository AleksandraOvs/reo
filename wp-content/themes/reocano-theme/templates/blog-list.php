<li class="blog__list__item">
                            <div class="blog__list__item__thumb">
                                <?php the_post_thumbnail('medium', array('class' => 'destr-img')); ?>
                            </div>
                            <div class="blog__list__item__content">
                                <h3><?php the_title(); ?></h3>
                                <div class="blog__excerpt"><?php the_excerpt() ?>
                                </div>
                            </div>

                            <div class="blog__list__item__more">
                                <a href="<?php the_permalink() ?>" class="blog__more-button button">Читать далее</a>
                            </div>

                            <?php get_template_part('templates/tags') ?>

                        </li>