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
<meta name="facebook-domain-verification" content="nr9mk0z4dtnmb6agi29uqvb44usib4" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Open+Sans:wght@300;400&family=Oswald:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- Google Tag Manager *11.11.22 -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6PHD8B');</script>
<!-- End Google Tag Manager -->

<!-- Hotjar Tracking Code for https://www.metro-wall.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3187096,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6PHD8B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>


		<nav class="navbar navbar-expand-lg navbar-dark <?php if (is_front_page() || is_single() || $size == 'large') : ?> fixed-top <?php endif; ?> ">
	    <a class="navbar-brand" href="/">


				<?php $size = get_field('header_size'); ?>

				<?php if (is_front_page() || is_single() ) : ?>


        <img class="d-lg-none" src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">

        <img class="d-none d-lg-flex" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">

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

				<div class="inline-block ml-2 ml-xl-5 mt-3 mt-md-0 d-none d-lg-flex">
					<a class="quote" href="/quote">

            GET A FREE QUOTE

						<svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
						  <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
						</svg>


					</a>
				</div>

				<div class="inline-block ml-2 ml-xl-5 mt-3 mt-md-0 d-none d-lg-flex">
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

            <li>

              <a href="https://www.youtube.com/channel/UCCDOewzqvY1ziSD3AFiTHmA" target="_blank">


                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="19.836" viewBox="0 0 27 19.836">
                    <g id="youtube-svgrepo-com" transform="translate(0 -6.5)">
                      <g id="Group_6" data-name="Group 6" transform="translate(0 6.5)">
                        <path id="Path_7" data-name="Path 7" d="M21.631,6.5H5.369A5.384,5.384,0,0,0,0,11.886v9.065a5.383,5.383,0,0,0,5.369,5.386H21.631A5.384,5.384,0,0,0,27,20.951V11.886A5.384,5.384,0,0,0,21.631,6.5ZM25.9,20.951a4.28,4.28,0,0,1-4.267,4.284H5.369A4.28,4.28,0,0,1,1.1,20.951V11.886A4.28,4.28,0,0,1,5.369,7.6H21.631A4.28,4.28,0,0,1,25.9,11.886Z" transform="translate(0 -6.5)"/>
                        <path id="Path_8" data-name="Path 8" d="M26.487,20.445l-7.655-4.484a.552.552,0,0,0-.832.477v8.967a.552.552,0,0,0,.832.477L26.487,21.4a.553.553,0,0,0,0-.954Zm-7.382,4V17.4l6.009,3.52Z" transform="translate(-8.095 -10.729)"/>
                      </g>
                    </g>
                  </svg>


              </a>

            </li>


					</ul>
				</div>



	  </nav>




	</header><!-- header -->

	<div id="content" class="site-content">

    <a class="quotemobile d-md-none" href="/quote">

      GET A FREE QUOTE

      <svg xmlns="http://www.w3.org/2000/svg" width="8.661" height="10.105" viewBox="0 0 8.661 10.105">
        <path id="play-button" d="M35.353,0l8.661,5.052L35.353,10.1Z" transform="translate(-35.353)" fill="#fff"/>
      </svg>


    </a>
