<div class="entry-post__inner">

              <a href="<?php the_permalink() ?>" class="entry-img">
                <?php if(has_post_thumbnail()) {
                   the_post_thumbnail('full', array('class' => 'destr-img'));
                }else {
                  echo '<img class="destr-img" src="' . get_bloginfo( 'stylesheet_directory' ) 
                  . '/images/placeholder.jpg" />';
                }?>
          
              </a>
    <div class="entry-post__inner__head">
        <h3><?php the_title(); ?></h3>
        <a href="<?php echo the_permalink() ?>" class="button">Читать далее</a>
    </div>

</div>