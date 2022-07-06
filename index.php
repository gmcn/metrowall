<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<section class="news-list">
<div class="container news-list__container">

	<header class="news-list__header">
		<h1 class="news-list__heading heading">Latest News</h1>

		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>

	</header>

		<?php
		if ( have_posts() ) : ?>

		<div class="filter controls news-list__filter">
			<button class="filter__item filter__item--active" type="button" data-filter="*">ALL</button>
			<button class="filter__item" type="button" data-filter=".__js_news">NEWS</button>
			<button class="filter__item" type="button" data-filter=".__js_industry">INDUSTRY</button>
			<!-- <button class="filter__item" type="button" data-filter=".__js_partitions">PARTITIONS</button> -->
			<!-- <button class="filter__item" type="button" data-filter=".__js_doors">DOORS</button> -->
			<button class="filter__item" type="button" data-filter=".__js_vetro">VETRO</button>
			<button class="filter__item" type="button" data-filter=".__js_lp-series">LP SERIES</button>
			<button class="filter__item" type="button" data-filter=".__js_dg-series">DG SERIES</button>
			<button class="filter__item" type="button" data-filter=".__js_sustainability">Sustainability</button>
		</div>

		<div class="grid-wrapper __js_news-list-filter">

			<?php /* Start the Loop */
			$i = 1; while ( have_posts() ) : the_post();

			$datetime = get_the_date('Y-m-d');
			$date = get_the_date('M d, Y');
			$content = get_the_content();
			$categories = wp_get_post_categories( get_the_ID() );

			 ?>



			<div class="article-list__item __js_news-list-item col-md-4 <?php
				//loop through them
				foreach($categories as $c){ $cat = get_category( $c );
					//get the name of the category
					$cat_id = get_cat_ID( $cat->name );
					//make a list item containing a link to the category
					echo '__js_'.$cat->slug." ";
				}
			?>">
				<div class="article-preview" tabindex="0">
					<div class="article-preview__image">
						<?php

						$img = get_the_post_thumbnail_url(get_the_ID(),'large');


						if ($img) : ?>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>" alt="<?php echo the_title() ?>" loading="lazy">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri();  ?>/images/blog_holder.svg" alt="<?php echo the_title() ?>" loading="lazy">
						<?php endif; ?>
					</div>
					<div class="article-preview__content">

						<h2 class="article-preview__heading"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?></a></h2>
						<div class="article-preview__author"><?php echo get_the_author() ?> </div> |
						<time class="article-preview__date" datetime="<?php echo $datetime ?>"><?php echo $date; ?></time>
						<div class="article-preview__text">

							<?php echo wp_trim_words( get_the_content(), 30, '' ); ?>


						</div>
						<a class="article-preview__btn" href="<?php echo the_permalink(); ?>">Read More

							<svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="10.594" viewBox="0 0 19.314 10.594">
								  <path id="right-arrow" d="M14.017,107.5l-.86.86,3.828,3.828H0v1.217H16.985l-3.828,3.828.86.86,5.3-5.3Z" transform="translate(0 -107.5)"/>
								</svg>


						</a>
					</div>
				</div>
			</div>

		<?php $i++; endwhile; ?>

	</div>

<?php	endif; ?>

</div>
</section>

<?php
//get_sidebar();
get_footer();
