<?php get_header() ?>

<section class="page-section">

    <div class="page-section__header">
        <?php
        if (has_post_thumbnail()) { // условие, если есть миниатюра
            the_post_thumbnail('full'); // если параметры функции не указаны, то выводится миниатюра текущего поста, размер thumbnail
        } 
        ?>
        <div class="fixed-container">
            <!-- <ul class="breadcrumbs__list">
                    <?php //echo true_breadcrumbs(); 
                    ?>
                </ul> -->

            <h2 class="toright"><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="page-section__content">
        <div class="fixed-container">
            <div class="entry-post__books__heading">
                <?php if ($quote = carbon_get_post_meta(get_the_ID(), 'crb_boot_quote')) {
                ?>
                    <div class="entry-post__books__books-img">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <div class="entry-post__books__quote">
                        <div class="post__books__quote">

                            <?php echo $quote; ?>

                        </div>
                    </div>
                <?php
                } else{
                ?>
                    <div class="entry-post__books__book-img2">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>

                    <?php
                }
                ?>
            </div>
            <?php the_content() ?>
        </div>
    </div>

</section>

<?php get_footer() ?>