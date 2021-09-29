<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Open+Sans:wght@300;400&family=Oswald:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194354637-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-194354637-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 385898292 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-385898292"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-385898292');
</script>

<script>
  gtag('config', 'AW-385898292/IOY6CJn3jYwCELSugbgB', {
    'phone_conversion_number': '1-888-798-8806'
  });
</script>

<?php if (is_page('thank-you')): ?>

  <!-- Event snippet for Contact Us - Thank You conversion page -->
  <script>
    gtag('event', 'conversion', {'send_to': 'AW-385898292/KfvQCMfKsowCELSugbgB'});
  </script>

<?php endif; ?>

<?php if (is_page('quote-thank-you')): ?>

  <!-- Event snippet for Request quote - thank you page conversion page -->
  <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-385898292/zTdOCOnwpPcCELSugbgB',
        'value': 3000.0,
        'currency': 'USD'
    });
  </script>

<?php endif; ?>

<!-- Event snippet for Email Address Click conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
	function gtag_report_conversion(url) {
	  var callback = function () {
	    if (typeof(url) != 'undefined') {
	      window.location = url;
	    }
	  };
	  gtag('event', 'conversion', {
	      'send_to': 'AW-385898292/cpGlCLedr4wCELSugbgB',
	      'event_callback': callback
	  });
	  return false;
	}
</script>

<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '387762516393312');
	fbq('track', 'PageView');
</script>

<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=387762516393312&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>


		<nav class="navbar navbar-expand-lg navbar-dark <?php if (is_front_page() || is_single() || $size == 'large') : ?> fixed-top <?php endif; ?> ">
	    <a class="navbar-brand" href="/">


				<?php $size = get_field('header_size'); ?>

				<?php if (is_front_page() || is_single() ) : ?>


        <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">

        <img class="d-none d-md-flex" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">

				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">
				<?php endif; ?>

			</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarCollapse',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>

				<div class="inline-block ml-5 mt-3 mt-md-0 d-none d-md-flex">
					<a class="quote" href="/quote">Have a project?

						<svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
						</svg>


					</a>
				</div>

				<div class="inline-block ml-5 mt-3 mt-md-0 d-none d-md-flex">
					<ul class="social">
						<li>

							<a href="https://www.linkedin.com/company/metrowall-llc/?trk=ppro_cprof" target="_blank">

								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
									<path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"/>
								</svg>



							</a>

						</li>
						<li>
							<a href="https://www.facebook.com/MetroWall" target="_blank">

								<svg xmlns="http://www.w3.org/2000/svg" width="8.501" height="17" viewBox="0 0 8.501 17">
									<path id="facebook" d="M13.136,2.823h1.552V.12A20.04,20.04,0,0,0,12.427,0c-2.238,0-3.77,1.407-3.77,3.994V6.375H6.187V9.4H8.656V17h3.027V9.4h2.369l.376-3.022H11.683V4.294c0-.873.236-1.471,1.453-1.471Z" transform="translate(-6.187)"/>
								</svg>

							</a>

						</li>
						<li>

							<a href="https://www.instagram.com/metrowallnyc/" target="_blank">

								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
									<g id="logo-instagram" transform="translate(-32 -32)">
										<path id="Path_47" data-name="Path 47" d="M44.042,33.417a3.553,3.553,0,0,1,3.542,3.542v7.083a3.553,3.553,0,0,1-3.542,3.542H36.958a3.553,3.553,0,0,1-3.542-3.542V36.958a3.553,3.553,0,0,1,3.542-3.542h7.083m0-1.417H36.958A4.973,4.973,0,0,0,32,36.958v7.083A4.973,4.973,0,0,0,36.958,49h7.083A4.973,4.973,0,0,0,49,44.042V36.958A4.973,4.973,0,0,0,44.042,32Z"/>
										<path id="Path_48" data-name="Path 48" d="M152.84,108.792a1.059,1.059,0,1,1,.751-.31A1.061,1.061,0,0,1,152.84,108.792Zm-4.6.707a2.829,2.829,0,1,1-2.829,2.829,2.829,2.829,0,0,1,2.829-2.829m0-1.414a4.243,4.243,0,1,0,4.243,4.243A4.243,4.243,0,0,0,148.243,108.084Z" transform="translate(-107.741 -71.83)"/>
									</g>
								</svg>


							</a>

						</li>
					</ul>
				</div>

	  </nav>

	</header><!-- header -->

	<div id="content" class="site-content">
