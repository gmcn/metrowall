<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer_contact">
					<h4>Get In Touch</h4>
					<p><a href="tel:1-888-798-8806">1-888-798-8806</a> <br>
						<a href="mailto:sales@metro-wall.com">sales@metro-wall.com</a><br>
						Mon - Fri 9am - 5pm</p>
						<ul>
							<li>
								<a href="/privacy-policy">Privacy Policy</a>
							</li>
						</ul>
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
				<div class="col-md-4 footer_branding">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.svg" alt="<?php echo get_bloginfo(); ?>" loading="lazy">
					<p class="footer_branding__copy">©<?php echo date('Y'); ?> METROWALL</p>
				</div>
				<div class="col-md-4 footer_feed">
					<h4>Latest from Facebook</h4>

					<?php if (!is_user_logged_in()): ?>

						<?php
						require_once 'vendor/autoload.php'; // change path as needed

						$fb = new \Facebook\Facebook([
						  'app_id' => '2140201249495949',
						  'app_secret' => '24a7612d4e6bf0b10aed02945f7d1144',
						  'default_graph_version' => 'v2.10',
						  //'default_access_token' => '{access-token}', // optional
						]);

						// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
						//   $helper = $fb->getRedirectLoginHelper();
						//   $helper = $fb->getJavaScriptHelper();
						//   $helper = $fb->getCanvasHelper();
						//   $helper = $fb->getPageTabHelper();

						try {
						  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
						  // If you provided a 'default_access_token', the '{access-token}' is optional.

							// $response = $fb->get('/me?fields=posts{id,created_time,message, permalink_url}', 'EAAeagG85W40BANgAtgZCy0tHp0u1icDV1EdhZBKj7pc5ZCVg1Bi1ZBmlTq9rSaTTDiSfkjfC9ZCKGY395XTqAzi0C8LmH9ZCZBEvIuQ6uZBxP6ZC2vApH6GDgNsWy7SBYIo2m0qgAFb39CYw1I32TBW7L0OJhgvGNgQyP4OulSwnbjSjm5qragdYT');
							$response = $fb->get('1353389074803101?fields=feed.limit(2){id,created_time,message,permalink_url}', 'EAAeagG85W40BAEKgQrpoWWjwZBubs6tiyl1LCwd94ZBb1RVmX8AUsDKOeFZBqumLjbbmUJbwL9fjv3EiZCIMFjyqyeWDr6A7YVbva97igP8gjAkQZCAH55SLOKz5qbJjOuvUiNTkgXfJ7wxgacJcWRmSyWvqVAzqmm1ZCZBRXMDhgZDZD');

							} catch(FacebookExceptionsFacebookResponseException $e) {
							  echo 'Graph returned an error: ' . $e->getMessage();
							  exit;
							} catch(FacebookExceptionsFacebookSDKException $e) {
							  echo 'Facebook SDK returned an error: ' . $e->getMessage();
							  exit;
							}

						$graphNode = $response->getGraphNode();

						// echo $graphNode;

						$array = json_decode($graphNode, true);
						$resultArray = isset($array['feed']) ? $array['feed'] : [];

						foreach($resultArray as $result){

							$message = $result['message'];
							$shortMessage = substr($message, 0, 80);
							$permalink = $result['permalink_url'];
							$id = $result['id'];
							$shortId = substr($id, 0, 10);
							$orgDate = $result['created_time']['date'];
							$newDate = date("j F @ G:i", strtotime($orgDate));

							// if($i < 2) {
								echo ' <a href="' . $permalink . '" target="_blank">';
								echo '<div>';
								echo '<p>';
								echo $shortMessage.'...';

								// echo 'www.fb.com/' . $shortId;

								echo '<p>';
								echo '</a>';

								echo '<p class="date"><svg xmlns="http://www.w3.org/2000/svg" width="8.501" height="17" viewBox="0 0 8.501 17">
									<path id="facebook" d="M13.136,2.823h1.552V.12A20.04,20.04,0,0,0,12.427,0c-2.238,0-3.77,1.407-3.77,3.994V6.375H6.187V9.4H8.656V17h3.027V9.4h2.369l.376-3.022H11.683V4.294c0-.873.236-1.471,1.453-1.471Z" transform="translate(-6.187)"/>
								</svg>' . $newDate .'</p>';
								echo '</div>';

						}

						 ?>

					 <?php endif; ?>


				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
_linkedin_partner_id = "3479521";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>

<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3479521&fmt=gif" />
</noscript>

</body>

</html>
