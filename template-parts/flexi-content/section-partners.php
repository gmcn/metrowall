<section class="webpage__partners partners">
  <div class="partners__inner container">


  <?php if ( have_rows('partners', 'option') ): ?>
    <ul class="partners__list">
      <?php  $i = 1; while ( have_rows('partners', 'option') ) : the_row(); ?>
        <li class="partners__item wow <?php if ($i % 2): ?>fadeInUp <?php else : ?> fadeInDown<?php endif ?>">
          <?php
            $image = get_sub_field('partner_logo', 'option');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
            <?php endif; ?>
            <?php //the_sub_field('partner_name'); ?>
        </li>
      <?php $i++; endwhile; ?>
    </ul>
  <?php endif; ?>



  <div class="partners__line"></div>
  </div>
</section>
