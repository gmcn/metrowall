<?php if( have_rows('flexible_content') ): ?>
 <?php while( have_rows('flexible_content') ): the_row(); ?>


   <?php if( get_row_layout() == 'section_hero_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/hero-slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_usp' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-usp.php")); ?>

   <?php elseif( get_row_layout() == 'section_intro' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-intro.php")); ?>

   <?php elseif( get_row_layout() == 'section_paragraph' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-paragraph.php")); ?>

   <?php elseif( get_row_layout() == 'section_video' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-video.php")); ?>

   <?php elseif( get_row_layout() == 'section_paragraph-image' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section_paragraph-image.php")); ?>

   <?php elseif( get_row_layout() == 'section_our-products' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-products.php")); ?>

   <?php elseif( get_row_layout() == 'section_downloads' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-downloads.php")); ?>

   <?php elseif( get_row_layout() == 'section_cta' ): ?>

     <?php include(locate_template("template-parts/flexi-content/cta-bar.php")); ?>

   <?php elseif( get_row_layout() == 'section_partners' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-partners.php")); ?>

   <?php elseif( get_row_layout() == 'section_brochure_download_form' ): ?>

     <?php include(locate_template("template-parts/flexi-content/form_download.php")); ?>

   <?php elseif( get_row_layout() == 'section_newsletter_form' ): ?>

     <?php include(locate_template("template-parts/flexi-content/form_newsletter.php")); ?>

   <?php elseif( get_row_layout() == 'section_quote_form' ): ?>

     <?php include(locate_template("template-parts/flexi-content/form_quote.php")); ?>

   <?php elseif( get_row_layout() == 'section_testimonials' ): ?>

     <?php include(locate_template("template-parts/flexi-content/testimonials_slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_latest_projects' ): ?>

     <?php include(locate_template("template-parts/flexi-content/latest_projects.php")); ?>

   <?php elseif( get_row_layout() == 'section_product_gallery_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/product_gallery_slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_content_left_right' ): ?>

     <?php include(locate_template("template-parts/flexi-content/content_left_right.php")); ?>

   <?php elseif( get_row_layout() == 'section_statistics' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-statistics.php")); ?>

   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
