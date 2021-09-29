<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">

		<div class="container entry-header_title">

			<?php
			if ( is_single() ) :
				the_title( '<h1 class="page">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>

		</div>



		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!-- <?php starting_theme_posted_on(); ?> -->
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="container entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'starting-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starting-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="container">


		<ul class="social_share">
			Share:
			<li>

				<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">

					<svg xmlns="http://www.w3.org/2000/svg" width="20.923" height="17" viewBox="0 0 20.923 17">
						<g id="twitter" transform="translate(0 -48)">
							<g id="Group_8" data-name="Group 8" transform="translate(0 48)">
								<path id="Path_29" data-name="Path 29" d="M20.923,50.013a8.943,8.943,0,0,1-2.472.677,4.265,4.265,0,0,0,1.887-2.371,8.572,8.572,0,0,1-2.72,1.038,4.289,4.289,0,0,0-7.42,2.933,4.417,4.417,0,0,0,.1.978,12.141,12.141,0,0,1-8.841-4.487,4.291,4.291,0,0,0,1.318,5.733,4.236,4.236,0,0,1-1.938-.528v.047a4.309,4.309,0,0,0,3.437,4.215,4.281,4.281,0,0,1-1.125.141,3.793,3.793,0,0,1-.812-.073A4.33,4.33,0,0,0,6.345,61.3a8.619,8.619,0,0,1-5.318,1.829A8.034,8.034,0,0,1,0,63.075,12.076,12.076,0,0,0,6.58,65,12.124,12.124,0,0,0,18.789,52.794c0-.19-.007-.373-.016-.554A8.557,8.557,0,0,0,20.923,50.013Z" transform="translate(0 -48)"/>
							</g>
						</g>
						</svg>

				</a>

			</li>
			<li>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&t=<?php echo the_title() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">

					<svg xmlns="http://www.w3.org/2000/svg" width="8.501" height="17" viewBox="0 0 8.501 17">
						<path id="facebook" d="M13.136,2.823h1.552V.12A20.04,20.04,0,0,0,12.427,0c-2.238,0-3.77,1.407-3.77,3.994V6.375H6.187V9.4H8.656V17h3.027V9.4h2.369l.376-3.022H11.683V4.294c0-.873.236-1.471,1.453-1.471Z" transform="translate(-6.187)"/>
					</svg>

				</a>

			</li>
			<li>

				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_title() ?> - <?php echo the_permalink(); ?>" target="_blank">

					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
						<path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"/>
					</svg>



				</a>

			</li>


			<li>

					<a href="mailto:?subject=<?php echo the_title() ?> <?php echo the_permalink(); ?>" title="Share by Email">

					<svg xmlns="http://www.w3.org/2000/svg" width="26.196" height="17" viewBox="0 0 26.196 17">
					  <path id="letter" d="M2.068,0h22.06a2.077,2.077,0,0,1,2.034,1.682L13.1,8.962.034,1.682A2.077,2.077,0,0,1,2.068,0Zm22.06,17H2.068A2.074,2.074,0,0,1,0,14.932V3.24l12.76,7.114a.726.726,0,0,0,.338.09.652.652,0,0,0,.338-.09L26.2,3.24V14.932A2.07,2.07,0,0,1,24.128,17Zm0,0"/>
					</svg>

				</a>

			</li>


		</ul>

	</div>

	<section class="container post-sb__related wow fadeIn">
		<div class="post-sb__related-title">Related Posts</div>
		<div class="post-sb__related-wrapper row">

			<?php
			$args = array(
			  'post_type' => 'post',
				'posts_per_page' => 3,

			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) : ?>


			<?php while ( $query->have_posts() ) : $query->the_post();

			$date = get_the_date('M d, Y');

			?>

				<div class="post-related col-sm-4">
				<div class="post-related__pic" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>) no-repeat center center / cover">
					<div class="post-related__hover">
						<div class="post-related__hover__wrap">
							<a class="post-related__title align-self-center" href="<?php echo the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
							<?php echo wp_trim_words( get_the_content(), 30, '' ); ?>
						</div>
					</div>
				</div>
			</div>


			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>


		</div>
	</section>

	<!--<footer class="entry-footer">
		<?php starting_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
