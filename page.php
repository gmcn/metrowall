<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header();

$size = get_field('header_size');

?>

<?php if (get_field("header_image")): ?>

	<?php if ($size == 'large'): ?>

		<div class="header_bg large" style="background: url(<?php echo get_field('header_image') ?>) center center">

				<h1><?php echo the_title(); ?></h1>

		</div>

	<?php else : ?>

		<div class="header_bg" style="background: url(<?php echo get_field('header_image') ?>) center center"></div>

	<?php endif; ?>

<?php endif; ?>

<?php if (!is_front_page()): ?>
	<div class="container page_header__wrapper">
		<?php if ($size != 'large'): ?>
			<h1 class="page_header"><?php echo the_title(); ?></h1>
		<?php endif; ?>
		<?php echo the_content(); ?>
	</div>
<?php endif; ?>


<?php if (is_page('gallery')): ?>

	<?php include(locate_template("template-parts/flexi-content/gallery.php")); ?>

<?php endif; ?>


<?php if (is_page('our-services') || is_page('products')): ?>

	<?php include(locate_template("template-parts/content-services.php")); ?>

<?php endif; ?>

<?php include(locate_template("template-parts/content-flexi.php")); ?>

<?php
//get_sidebar();
get_footer();
