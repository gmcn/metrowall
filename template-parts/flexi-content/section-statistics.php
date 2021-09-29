<?php

  $section_statistics_copy = get_sub_field('section_statistics_copy');

  $estdate = new DateTime("2007-01-01");
  $today     = new DateTime();
  $interval  = $today->diff($estdate);

 ?>


<section class="container-fluid statistics">
  <div class="container">

    <div class="row">
      <div class="col-lg-8">
        <h2>Our Service</h2>
        <?php echo $section_statistics_copy; ?>


        <?php if ( have_rows('section-statistics_stats') ): ?>
          <div class="row statistics__counts__wrapper">
            <?php while ( have_rows('section-statistics_stats') ) : the_row();

            $statistics_qty = get_sub_field('statistics_qty');
            $statistics_title = get_sub_field('statistics_title');


            ?>
              <div class="col-6 col-md-3 statistics__count">
                
                <?php if ($statistics_qty): ?>
                  <span class="count wow fadeInUp"><?php echo $statistics_qty ?></span>
                <?php endif; ?>

                <p><?php echo $statistics_title ?></p>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

      </div>
      <div class="col-lg-3 offset-lg-1" style="align-self: flex-end;">
        <div class="statistics_exp">
          <span class="wow fadeInUp count"><?php echo $interval->format('%y') ?></span>
          <p>Years of experience in the industry</p>
        </div>
      </div>
    </div>

  </div>
</section>
