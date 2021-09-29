<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<article class="blog-entry">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			 ?>

			<div class="container">
				<?php //the_post_navigation(); ?>
				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			</div>



		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</article><!-- #primary -->

<?php
//get_sidebar();
get_footer();
