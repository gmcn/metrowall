<?php
$args = array(
  'post_type' => 'project',
  'posts_per_page' => -1,
  'orderby' => 'rand',

);
$query = new WP_Query( $args );

?>


<?php if ( $query->have_posts() ) : ?>


<div class="latest-projects">

  <div class="container latest-projects__header">
    <div class="row">
      <div class="col-md-6">
        <h2>Latest Projects</h2>
      </div>
      <div class="col-md-6 d-none d-md-flex">

        <div class="filter controls news-list__filter">

          <button class="filter__item filter__item--active" type="button" data-filter="*">all</button>
          <button class="filter__item" type="button" data-filter=".__js_vetro">Vetro</button>
          <button class="filter__item" type="button" data-filter=".__js_lp-series">LP Series</button>
          <button class="filter__item" type="button" data-filter=".__js_dg-series">DG Series</button>

        </div>


      </div>
    </div>
  </div>


<div class="grid-wrapper row no-gutters __js_gallery-filter">

  <?php $i = 1; while ( $query->have_posts() ) : $query->the_post();

  // $categories = wp_get_post_categories( get_the_ID() );
  $categories = get_the_terms( get_the_ID(), 'project_category' );

  ?>
    <div class="latest-projects__project __js_news-list-item <?php if ($i == 1 ): ?>col-md-6<?php else : ?>col-md-3 <?php endif; ?> <?php
      //loop through them
      foreach($categories as $c){ $cat = get_category( $c );
        //get the name of the category
        $cat_id = get_cat_ID( $cat->name );
        //make a list item containing a link to the category
        echo '__js_'.$cat->slug." ";
      }
    ?>">

      <?php if ($i == 1 ): ?>

        <img src="<?php echo the_post_thumbnail_url('project-featured_large') ?>" alt="<?php the_title(); ?>">

      <?php else : ?>

        <img src="<?php echo the_post_thumbnail_url('project-featured_small') ?>" alt="<?php the_title(); ?>">

      <?php endif; ?>

        <div class="latest-projects__project__hover align-self-center">
          <?php if (is_front_page()): ?>

            <a href="/products/<?php
              //loop through them
              foreach($categories as $c){ $cat = get_category( $c );
                //get the name of the category
                $cat_id = get_cat_ID( $cat->name );
                //make a list item containing a link to the category
                echo $cat->slug;
              }
            ?>/">

            <?php else : ?>

              <a class="fancybox" rel="group<?php echo $i ?>" href="<?php echo the_post_thumbnail_url() ?>">

          <?php endif; ?>
          <div class="align-center">
            <?php if (is_front_page()): ?>
            <h3>
              <?php
                //loop through them
                foreach($categories as $c){ $cat = get_category( $c );
                  //get the name of the category
                  $cat_id = get_cat_ID( $cat->name );
                  //make a list item containing a link to the category
                  echo $cat->slug;
                }
              ?>
            </h3>

            <!-- <ul>
              <li>Interesting point 1</li>
              <li>Something about profiles</li>
              <li>Double Glazed</li>
              <li>Argon Filled</li>
              <li>Low Noise</li>
            </ul> -->

          <?php else : ?>

            <h3><?php the_title(); ?></h3>

            <?php echo the_content(); ?>

          <?php endif; ?>

          </div>
          </a>
        </div>

        <?php
          $images = get_field('project_gallery');
          if( $images ): ?>
              <ul class="d-none">
                  <?php foreach( $images as $image ): ?>
                      <li>

                          <a class="fancybox" rel="group<?php echo $i ?>" href="<?php echo esc_url($image['url']); ?>">
                               <img src="<?php echo esc_url($image['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </a>


                      </li>
                  <?php endforeach; ?>
              </ul>
          <?php endif; ?>

    </div>
  <?php $i++; endwhile; ?>

</div>


</div>

<?php endif; wp_reset_postdata(); ?>
