<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div class="page-container">


  <section class="site-page" style="padding-top:140px;" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                                        ?>>
    <!-- <div class="page-header__inner">
            <div class="fixed-container">
                <h2 class="site-page__title toopacity white"> <?php //the_title(); 
                                                              ?> </h2>
            </div>
        </div> -->
    <div class="fixed-container site-page__container">
     
        <h2>Публикации по тегу: &laquo;<?php single_tag_title()?>&raquo;</h2>


      <?php if (have_posts()) : ?>
        <div class="posts__grid">
          <?php
          while (have_posts()) : the_post();
          ?>

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

      </li>
<?php
          endwhile;
          ?>
        </div>


        <div class="pagination">
          <?php
          echo paginate_links(array(
            'prev_next' => true,
            'prev_text' => __('<i class="icon arrow_carrot-left"></i>>'),
            'next_text' => __('<i class="icon arrow_carrot-right"></i>>'),
          ));
          ?>

        </div>

      <?php else : ?>
        <p>По вашему запросу ничего не найдено</p>
      <?php endif; ?>
    </div>


  </section>

</div>




<?php
get_footer();



