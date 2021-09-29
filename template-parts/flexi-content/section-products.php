<section class="container-fluid section-products">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2>Our Products</h2>
        <p>We have developed an extensive range of options capable of hundreds of configurations allowing almost any result to be accomplished.</p>

        <p>From minimalist and budget-driven designs to high end glass solutions, one thing each of our three ranges has in common is that they deliver on functionality, aesthetics and budget. Our extensive 10,000 sq ft showroom in New York showcases our wide range of products and provides all the inspiration you may need to transform your office space.</p>

      </div>
    </div>


    <div class="services">

      <div class="row">

        <?php

          $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => 1512,
              'order'          => 'ASC',
              'orderby'        => 'menu_order'
           );


          $parent = new WP_Query( $args );

          if ( $parent->have_posts() ) : ?>

            <?php $i = 1; while ( $parent->have_posts() ) : $parent->the_post();

            $service_page_button_title = get_field('service_page_button_title');

            ?>

              <?php if ($i % 2): ?>

                <div class="col-lg-4 services__service">

                  <div class="row">

                    <div class="col-12 services__service__img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center no-repeat; background-size: cover;">

                    </div>

                    <div class="col-12 services__service__copy wow fadeInUp">
                      <h2><?php echo the_title(); ?></h2>
                      <?php echo the_excerpt(); ?>
                      <a href="<?php echo the_permalink(); ?>">
                        Find out more

                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11.667" viewBox="0 0 10 11.667">
                          <path id="play-button" d="M35.353,0l10,5.833-10,5.833Z" transform="translate(-35.353)"/>
                        </svg>

                      </a>
                    </div>

                  </div>


                </div>


              <?php else : ?>

                <div class="col-lg-4 services__service">

                  <div class="row">

                    <div class="col-12 services__service__copy wow fadeInDown">
                      <h2><?php echo the_title(); ?></h2>
                      <?php echo the_excerpt(); ?>
                      <a href="<?php echo the_permalink(); ?>">
                        Find out more

                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11.667" viewBox="0 0 10 11.667">
                          <path id="play-button" d="M35.353,0l10,5.833-10,5.833Z" transform="translate(-35.353)"/>
                        </svg>

                      </a>
                    </div>

                    <div class="col-12 services__service__img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center no-repeat; background-size: cover;">

                    </div>



                  </div>


                </div>

              <?php endif; ?>


            <?php $i++; endwhile; ?>

          <?php endif;  wp_reset_postdata(); ?>

      </div>

    </div>



  </div>
</section>
