<?php
/*
Template Name: Single programm
Template Post Type: post
*/

?>

<?php get_header() ?>

<section class="page-section">
<div class="page-header__inner solid header-programms">
   
        
    <div class="fixed-container">
        <h2><?php the_title()?></h2>
    </div>
     <div class="programms-thumb">
        <div class="programms__list__item__thumb">
                            <?php the_post_thumbnail('medium', array('class' => 'destr-img'));?>
                            </div>
    </div>
</div>

    <!-- <div class="page-header__inner">
        <div class="fixed-container">
            <h2 class="site-page__title toopacity white"> <?php the_title(); ?> </h2>
        </div>
    </div> -->


    <div class="page-section__content">
        <div class="fixed-container">
            <?php the_content() ?>
        </div>
    </div>

</section>

<?php get_footer() ?>