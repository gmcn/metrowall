<div class="services block">

  <div class="container">


    <?php if ( have_rows('content_block') ): ?>
        <?php $i = 1; while ( have_rows('content_block') ) : the_row();

        $link = get_sub_field('content_block_link');


         ?>

          <?php if ($i % 2): ?>
            <div class="row services__service">

              <div class="col-lg-7 d-lg-none">
                <img src="<?php the_sub_field('content_block_image'); ?>" alt="<?php the_sub_field('content_block_heading'); ?>" loading="lazy">
              </div>

              <div class="col-lg-4 services__service__excerpt align-self-center wow fadeInLeft">

                <h2><?php the_sub_field('content_block_heading'); ?></h2>
                <?php the_sub_field('content_block_copy'); ?>

                <?php if ( have_rows('content_block_gallery') ): ?>
                  <ul class="services__service__gallery">

                    <?php while ( have_rows('content_block_gallery') ) : the_row();

                    $gallery_item_thumbnail = get_sub_field('gallery_item_thumbnail');
                    $gallery_item = get_sub_field('gallery_item');

                    ?>
                    <li>

                      <a class="fancybox" href="<?php echo $gallery_item; ?>">

                        <?php if( !empty( $gallery_item_thumbnail ) ): ?><img src="<?php echo esc_url($gallery_item_thumbnail['url']); ?>" alt="<?php echo esc_attr($gallery_item_thumbnail['alt']); ?>" /><?php endif; ?>

                      </a>

                    </li>

                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>

                      <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
            						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
            						</svg>

                      </a>
                  <?php endif; ?>



              </div>

              <div class="offset-lg-1 col-lg-7 d-none d-lg-block wow fadeInRight" style="background: url(<?php the_sub_field('content_block_image'); ?>) center center; background-size: cover;">
              </div>

            </div>
          <?php else : ?>
            <div class="row services__service">

              <div class="col-lg-5 wow fadeInLeft" style="background: url(<?php the_sub_field('content_block_image'); ?>) center center; background-size: cover;">
                <img class="d-lg-none" src="<?php the_sub_field('content_block_image'); ?>" alt="<?php the_sub_field('content_block_heading'); ?>" loading="lazy">
              </div>

              <div class="col-lg-6 offset-lg-1 services__service__excerpt service_even align-self-center wow fadeInRight">

                <h2><?php the_sub_field('content_block_heading'); ?></h2>
                <?php the_sub_field('content_block_copy'); ?>

                <?php if ( have_rows('content_block_gallery') ): ?>
                  <ul class="services__service__gallery">

                    <?php while ( have_rows('content_block_gallery') ) : the_row();

                    $gallery_item_thumbnail = get_sub_field('gallery_item_thumbnail');
                    $gallery_item = get_sub_field('gallery_item');

                    ?>
                    <li>

                      <a class="fancybox" href="<?php echo $gallery_item; ?>">

                        <?php if( !empty( $gallery_item_thumbnail ) ): ?><img src="<?php echo esc_url($gallery_item_thumbnail['url']); ?>" alt="<?php echo esc_attr($gallery_item_thumbnail['alt']); ?>" /><?php endif; ?>

                      </a>

                    </li>

                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>

                      <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
            						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
            						</svg>

                      </a>
                  <?php endif; ?>

              </div>

            </div>
          <?php endif; ?>





        <?php $i++; endwhile; ?>
    <?php endif; ?>


  </div>



</div>
