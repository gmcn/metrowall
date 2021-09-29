<?php

  $sectionParagraphImageHeading = get_sub_field('section_paragraph-image_heading');
  $sectionParagraphImageCopy = get_sub_field('section_paragraph-image_copy');
  $sectionParagraphImageLink = get_sub_field('section_paragraph-image_link');
  $sectionParagraphImageImage = get_sub_field('section_paragraph-image_image');

 ?>


<div class="container-fluid section_paragraph-image">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h2><?php echo $sectionParagraphImageHeading; ?></h2>
        <?php echo $sectionParagraphImageCopy; ?>

        <?php
          if( $sectionParagraphImageLink ):
              $link_url = $sectionParagraphImageLink['url'];
              $link_title = $sectionParagraphImageLink['title'];
              $link_target = $sectionParagraphImageLink['target'] ? $sectionParagraphImageLink['target'] : '_self';
              ?>
              <a class="main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <?php echo esc_html( $link_title ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
    						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"></path>
    						</svg>
              </a>
          <?php endif; ?>



      </div>

      <div class="col-md-6">

        <?php if( !empty( $sectionParagraphImageImage ) ): ?>
          <img src="<?php echo esc_url($sectionParagraphImageImage['url']); ?>" alt="<?php echo esc_attr($sectionParagraphImageImage['alt']); ?>" />
        <?php endif; ?>

      </div>

    </div>


  </div>
</div>
