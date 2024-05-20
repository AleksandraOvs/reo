<?php

/**
 * Template name: page programms
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

    <section class="site-page" <?php //if (is_active_sidebar('page-sidebar1')) : echo 'style="width:73%;"'; endif;
                                ?>>
        <h2 class="site-page__title" id="programms">
                Авторские программы
            </h2>
            <div class="programms-description">
                <p>Наши программы путешествий — это авторские программы Павла Берснева, Юлии Грабарь и команды Клуба Курандерос. Они составлены со знанием, опытом и любовью к древним цивилизациям, традиционной культуре и самобытности коренных народов. Мы собрали настоящую сокровищницу знаний, ритуалов и обычаев, которые помогают участникам наших программ путешествий познать мир, себя и найти ключи к душевному и физическому здоровью и гармонии.</p>
                <p>
                    Мы осуществляем как групповые, так и индивидуальные программы путешествий по вашему запросу.</p>
            </div>

        <div class="fixed-container programms-container">

        <?php get_template_part('templates/programms'); ?>


        </div>


    </section>

</div>



<?php
get_footer();
