<?php

  $section_video_title = get_sub_field('section_video_title');
  $section_video_background = get_sub_field('section_video_background');
  $section_video_link = get_sub_field('section_video_link');


 ?>

 <div class="container-fluid section-video" style="background: url(<?php echo $section_video_background ?>) center center; background-size: cover;">

   <a class="fancybox" data-fancybox-type="iframe" href="<?php echo $section_video_link ?>">

     <svg xmlns="http://www.w3.org/2000/svg" width="139.87" height="139.87" viewBox="0 0 139.87 139.87">
        <g id="Group_8" data-name="Group 8" transform="translate(-959.065 -5393.065)">
          <path id="play-button" d="M35.353,0,86.089,29.6l-50.736,29.6Z" transform="translate(979.647 5433.404)" fill="#fff"/>
          <g id="play" transform="translate(69 -18)">
            <circle id="Ellipse_1" data-name="Ellipse 1" cx="69" cy="69" r="69" transform="translate(891 5412)" fill="none" stroke="#fff" stroke-width="1.87"/>
          </g>
        </g>
      </svg>

      <br />

     <?php echo $section_video_title ?>

   </a>

 </div>
