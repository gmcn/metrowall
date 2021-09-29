<div class="services">

  <div class="container">


    <?php

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

        <?php $i = 1; while ( $parent->have_posts() ) : $parent->the_post();

        $service_page_button_title = get_field('service_page_button_title');

        ?>

          <?php if ($i % 2): ?>
            <div class="row services__service">

              <div class="col-lg-7 d-lg-none">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy">
              </div>

              <div class="col-lg-4 services__service__excerpt align-self-center wow fadeInLeft">
                <h2><?php echo the_title(); ?></h2>
                <?php echo the_excerpt(); ?>

                <?php if (is_page('products')): ?>
                  <a href="<?php echo the_permalink() ?>">

                    View Now

                    <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
        						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
        						</svg>

                  </a>
                <?php endif; ?>

              </div>

              <div class="offset-lg-1 col-lg-7 d-none d-lg-block wow fadeInRight" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
                <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy"> -->
              </div>

            </div>
          <?php else : ?>
            <div class="row services__service">

              <div class="col-lg-5 wow fadeInLeft" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
                <img class="d-lg-none" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy">
              </div>

              <div class="col-lg-6 offset-lg-1 services__service__excerpt service_even align-self-center wow fadeInRight">
                <h2><?php echo the_title(); ?></h2>
                <?php echo the_excerpt(); ?>
                <?php if (is_page('products')): ?>
                  <a href="<?php echo the_permalink() ?>">

                    View Now

                    <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
        						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
        						</svg>

                  </a>
                <?php endif; ?>
              </div>

            </div>
          <?php endif; ?>


        <?php $i++; endwhile; ?>

      <?php endif;  wp_reset_postdata(); ?>


  </div>



</div>
