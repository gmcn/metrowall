<div class="news-masonry__container">

<section class="webpage__masonry masonry">

		<?php if ( have_rows('gallery') ): ?>

		<header class="works__header">

			<div class="filter controls news-list__filter gallery-list__filter">

				<button class="filter__item filter__item--active" type="button" data-filter="*">all</button>
				<button class="filter__item" type="button" data-filter=".__js_news">News</button>
				<button class="filter__item" type="button" data-filter=".__js_industry">INDUSTRY</button>
				<button class="filter__item" type="button" data-filter=".__js_partitions">PARTITIONS</button>
				<button class="filter__item" type="button" data-filter=".__js_doors">DOORS</button>
				<button class="filter__item" type="button" data-filter=".__js_vetro">VETRO</button>
				<button class="filter__item" type="button" data-filter=".__js_lp-series">LP SERIES</button>
				<button class="filter__item" type="button" data-filter=".__js_dg-series">DG SERIES</button>

			</div>

		</header>

			<div class="grid-wrapper gallery __js_gallery-filter">

				<?php while ( have_rows('gallery') ) : the_row();

				$post_date = get_sub_field('gallery_item_year');
	      $services = get_sub_field('gallery_item_services');

	      $field = get_sub_field( 'gallery_item_work_type' );

				?>

				<div class="masonry-item gallery-item <?php echo "__js_" . implode( ' __js_', $field ); ?>">


						<?php
							$image = get_sub_field('gallery_item_image');
							if( $image ):

							    // Image variables.
							    $url = $image['url'];
							    $title = $image['title'];
							    $alt = $image['alt'];
							    $caption = $image['caption'];

							    // Thumbnail size attributes.
							    $size = 'large';
									$sizeM = 'large';
							    $thumb = $image['sizes'][ $size ];
									$medthumb = $image['sizes'][ $sizeM ];
							    $width = $image['sizes'][ $size . '-width' ];
							    $height = $image['sizes'][ $size . '-height' ]; ?>

					        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?> <?php echo get_sub_field('gallery_item_name'); ?>" loading="lazy" />

									<div class="gallery-item__share">
										<a href="mailto:someone@yoursite.com?subject=I saw this photo on metro-wall.com and wanted to share it with you!&body=I saw this photo on metro-wall.com and wanted to share it with you! %0D <?php echo $url; ?>" >

											<svg xmlns="http://www.w3.org/2000/svg" width="25.237" height="23.017" viewBox="0 0 25.237 23.017">
											  <path id="share" d="M25.237,12,14.749.5V7.361h-2.23A12.519,12.519,0,0,0,0,19.881v3.636l.99-1.085A17.773,17.773,0,0,1,14.118,16.64h.631V23.5Zm0,0" transform="translate(0 -0.5)" fill="#fff"/>
											</svg>


										</a>
									</div>

									<div class="gallery-item__hover">

										<p class="gallery-item__title"><?php echo implode( ' __js_', $field ); ?></p>

										<a class="fancybox" rel="group" href="<?php echo $medthumb; ?>">

											<svg xmlns="http://www.w3.org/2000/svg" width="88.345" height="88.345" viewBox="0 0 88.345 88.345">
											  <path id="Path_29" data-name="Path 29" d="M84.664-49.08A3.75,3.75,0,0,0,87.424-50a3.75,3.75,0,0,0,.92-2.761V-74.848a3.75,3.75,0,0,0-.92-2.761,3.75,3.75,0,0,0-2.761-.92H62.577a3.75,3.75,0,0,0-2.761.92,3.75,3.75,0,0,0-.92,2.761,3.75,3.75,0,0,0,.92,2.761,3.75,3.75,0,0,0,2.761.92h13.5l-31.9,31.9-31.9-31.9h13.5a3.75,3.75,0,0,0,2.761-.92,3.75,3.75,0,0,0,.92-2.761,3.75,3.75,0,0,0-.92-2.761,3.75,3.75,0,0,0-2.761-.92H3.681a2.5,2.5,0,0,0-1.841.614L.614-76.688A2.5,2.5,0,0,0,0-74.848v22.086A3.75,3.75,0,0,0,.92-50a3.75,3.75,0,0,0,2.761.92A3.75,3.75,0,0,0,6.442-50a3.75,3.75,0,0,0,.92-2.761v-13.5l31.9,31.9-31.9,31.9v-13.5a3.75,3.75,0,0,0-.92-2.761,3.75,3.75,0,0,0-2.761-.92,3.75,3.75,0,0,0-2.761.92A3.75,3.75,0,0,0,0-15.951V6.135A3.75,3.75,0,0,0,.92,8.9a3.75,3.75,0,0,0,2.761.92H25.767a3.75,3.75,0,0,0,2.761-.92,3.75,3.75,0,0,0,.92-2.761,3.75,3.75,0,0,0-.92-2.761,3.75,3.75,0,0,0-2.761-.92H12.27l31.9-31.9,31.9,31.9h-13.5a3.75,3.75,0,0,0-2.761.92,3.75,3.75,0,0,0-.92,2.761,3.75,3.75,0,0,0,.92,2.761,3.75,3.75,0,0,0,2.761.92H84.664a3.75,3.75,0,0,0,2.761-.92,3.75,3.75,0,0,0,.92-2.761V-15.951a3.75,3.75,0,0,0-.92-2.761,3.75,3.75,0,0,0-2.761-.92,3.75,3.75,0,0,0-2.761.92,3.75,3.75,0,0,0-.92,2.761v13.5l-31.9-31.9,31.9-31.9v13.5A3.75,3.75,0,0,0,81.9-50,3.75,3.75,0,0,0,84.664-49.08Z" transform="translate(0 78.529)" fill="#fff"/>
											</svg>

										</a>



									</div>


							<?php endif; ?>


				</div>



			<?php endwhile; ?>

		</div>

		<?php endif; ?>

		<!-- <a class="works__more more-btn" href="#">
		<span class="more-btn__text">more</span>
		</a> -->
		<!-- </div> -->
		</section>
</div>
