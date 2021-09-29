<?php

  $sectionParagraphHeading = get_sub_field('section_paragraph_heading');
  $sectionParagraphCopy = get_sub_field('section_paragraph_copy');

 ?>

<section class="container section-paragraph">

  <div class="section-paragraph_wrap">
    <h2><?php echo $sectionParagraphHeading ?></h2>
    <?php echo $sectionParagraphCopy ?>
  </div>

</section>
