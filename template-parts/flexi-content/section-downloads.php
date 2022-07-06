<section class="news-list">
<div class="container news-list__container download-list_container">

		<?php if ( have_rows('downloads', 'options') ): ?>

		<div class="filter controls news-list__filter download-item__filter">
			<button class="filter__item filter__item--active" type="button" data-filter="*">ALL</button>
			<button class="filter__item" type="button" data-filter=".__js_vetro">VETRO</button>
			<button class="filter__item" type="button" data-filter=".__js_lp-series">LP SERIES</button>
			<button class="filter__item" type="button" data-filter=".__js_dg-series">DG SERIES</button>
      <button class="filter__item" type="button" data-filter=".__js_sustainability">Sustainability</button>
		</div>

		<div class="grid-wrapper __js_news-list-filter">

			<?php /* Start the Loop */
			$i = 1; while ( have_rows('downloads', 'options') ) : the_row();

      $download_title = get_sub_field('download_title');
      $download_file = get_sub_field('download_file');
      $download_image = get_sub_field('download_image');
      $download_colour = get_sub_field('download_colour');
      $download_category = get_sub_field('download_category');

			 ?>


			<div class="article-list__item download__item __js_news-list-item col-md-3 __js_<?php echo $download_category ?>">
				<div class="article-preview" tabindex="0">
					<div class="article-preview__image">

            <?php
              $size = 'download-pagination'; // (thumbnail, medium, large, full or custom size)
              if( $download_image ) {
                  echo wp_get_attachment_image( $download_image, $size );
              }

              ?>


              <div class="download__item__stamp <?php echo $download_colour ?>">
								<?php if ($download_colour == 'dark-grey' || $download_colour == 'grey'): ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.svg" alt="" loading="lazy">
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="" loading="lazy">
								<?php endif; ?>

              </div>

					</div>
					<div class="article-preview__content">

						<h2 class="article-preview__heading"> <?php echo $download_title; ?></h2>

						<img src="<?php echo get_template_directory_uri(); ?>/images/pdf_icon.jpg" alt="Download <?php echo $download_title; ?>">

						<a class="article-preview__btn" data-toggle="modal" data-target="#downloadModal<?php echo $i ?>"> Download </a>


						<!-- Modal -->
						<div class="modal fade bd-example-modal-xl" id="downloadModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="#downloadModal<?php echo $i ?>Label" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered modal-xl">
						    <div class="modal-content">

						      <h2>Enter Your <span>Details</span></h2>

									<p>Due to increasing amounts of spam requests, we ask that you enter your details below to download your requested file. We will not share your information with third parties for marketing purposes, nor do we ever pass on or sell your details to a third party.</p>

						      <div class="modal-body">
						        <?php //echo do_shortcode('[contact-form-7 id="1810" title="Download a brochure (Download Page)"]') ?>

										<form action="/downloads/#wpcf7-f1810-o1" method="post" class="contact-form wpcf7-form init" novalidate="novalidate" data-status="init">
											<div style="display: none;">
											<input type="hidden" name="_wpcf7" value="1810">
											<input type="hidden" name="_wpcf7_version" value="5.4.2">
											<input type="hidden" name="_wpcf7_locale" value="en_US">
											<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1810-o1">
											<input type="hidden" name="_wpcf7_container_post" value="0">
											<input type="hidden" name="_wpcf7_posted_data_hash" value="">
											</div>
											<div class="col-md-4 form-group">
											    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Enter your name..."></span> <p></p>
											</div>
											<div class="col-md-4 form-group">
											    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="youremail@domain.com"></span> <p></p>
											</div>
											<div class="col-md-4 form-group">
											    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Company"></span>
											  </div>
											<div class="col-md-12 form-group">
											<p><span class="wpcf7-form-control-wrap checkbox-701"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-701[]" value="I agree to my data being stored in line with our Privacy Policy"><span class="wpcf7-list-item-label">I agree to my data being stored in line with our Privacy Policy</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-701[]" value="I'm happy to receive the latest news and promotions by email."><span class="wpcf7-list-item-label">I'm happy to receive the latest news and promotions by email.</span></label></span></span></span>
											</p></div>
											<div class="col-md-12">
											    <input type="submit" value="Download Now" class="wpcf7-form-control wpcf7-submit" id="download<?php echo $i ?>">
											  </div>
											<div class="wpcf7-response-output" aria-hidden="true"></div>
										</form>



						      </div>

									<script type="text/javascript">
									    document.getElementById("download<?php echo $i ?>").onclick = function () {
													//alert('you clicked me');
									        // window.open = "<?php echo $download_file ?>";
													// window.open('<?php echo $download_file ?>', '_blank').focus();
									    };
									</script>

						    </div>
						  </div>
						</div>

					</div>
				</div>
			</div>

		<?php $i++; endwhile; ?>

	</div>

<?php	endif; ?>

</div>
</section>
