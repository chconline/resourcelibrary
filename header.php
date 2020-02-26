<?php



// Exit if accessed directly

if( !defined( 'ABSPATH' ) ) {

	exit;

}



/**

 * Header Template

 *

 *

 * @file           header.php

 * @package        Responsive

 * @author         Gerard Greenidge

 * @copyright      2014 - 2019 CyberChimps

 * @license        license.txt

 * @version        Release: 1.3

 * @filesource     wp-content/themes/responsive-child/header.php

 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29

 * @since          available since Release 1.0

 */

?>

	<!doctype html>

	<!--[if !IE]>

	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 7 ]>

	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 8 ]>

	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 9 ]>

	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->

	<!--[if gt IE 9]><!-->

<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head(); ?>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '138096150009706'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=138096150009706&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"o2zxr1DTcA20Ug", domain:"chconline.org",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=o2zxr1DTcA20Ug" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
	</head>
<body <?php body_class(); ?>>



<?php responsive_container(); // before container hook ?>

<div id="container" class="hfeed">



<?php responsive_header(); // before header hook ?>

	<div class="skip-container cf">
<div id="colophon-widget" class="col-940">
<div class="colophon-widget widget-wrapper widget_text">
		<a class="skip-link screen-reader-text focusable" href="#main"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
<div class="header-emergency-phone"><img src="/assets/phone-icon-red.png" width="25"
 height="25" alt="Emergency Phone Numbers" /><strong>24-hr Crisis Lines: 855.278.4204 (Santa Clara) | 650.579.0350 (San Mateo) | 415.781.0500 (San Francisco) | 800.273.8255 or Text BAY to 741-741 (National)</strong></div>
<!-- <a href="https://www.chconline.org/chc-receives-community-partnership-award-from-stanford-university/"><p class="announcement-line1">CHC Honored with the 2019 Stanford Partnership Award</p><p class="announcement-line2">Read more</p></a> -->
<!-- <a href="/closure-resources"><p class="announcement-line1">Help Resources & Presidents Day Holiday Staffing</p><p class="announcement-line2">help@chconline.org or 650.688.3660</p></a> -->
<a class="background-hover-reverse" href="https://www.chconline.org/career-open-house"><p class="announcement-line1">Join us at CHC's Career Open House</p><p class="announcement-line2">RSVP Now or Learn More</p></a>
<!-- <a href="https://goo.gl/uoSQuZ"><p class="announcement-line1">Holiday Closure and Help Resources</p><p class="announcement-line2">help@chconline.org or 650.617.3896</p></a>-->
	<!--<a href="https://goo.gl/XHAKbB"><p class="announcement-line1">In the wake of all the upsetting daily news,<br /> please remember CHC is here for you and your family.</p><p class="announcement-line2">help@chconline.org or 650.688.3625</p></a>-->
<!-- <a href="https://www.chconline.org/help/?utm_source=Promo%20Banner&utm_content=Not%20Alone&utm_medium=Everyday&utm_campaign=Everyday"><p class="announcement-line1">You are not alone.<br />Please remember, CHC is here for you and your family.</p><p class="announcement-line2">help@chconline.org or 650.688.3625</p></a> -->
<!-- <a href="https://goo.gl/D64qWL"><p class="announcement-line1">Intensive Outpatient Program for High School Teens</p><p class="announcement-line2">Open Now. Learn more &raquo;</p>
</a> -->
</div>
</div>
	</div><!-- .skip-container -->

	<div id="header">
		<div id="header_wrapper">


		<?php responsive_header_top(); // before header content hook ?>



		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
<!--
			<?php wp_nav_menu( array(

								   'container'      => '',

								   'fallback_cb'    => false,

								   'menu_class'     => 'top-menu',

								   'theme_location' => 'top-menu'

							   )

			);

			?>
-->

		<?php wp_nav_menu( array(

							   'container'       => 'div',

							   'container_class' => 'main-nav',

							   'fallback_cb'     => 'responsive_fallback_menu',

							   'theme_location'  => 'header-menu'

						   )

		);

		?>

		<?php } ?>



		<?php responsive_in_header(); // header hook ?>
			<!-- <div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/uploads/2018/06/CHC_SAFE_logo_web-slogan2018.png" alt="<?php bloginfo( 'name' ); ?>"/></a>

			</div>
			<div id="logo_mobile">
				<a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/uploads/2018/06/CHC_SAFE_logo_web-slogan2018-mobile.png" alt="<?php bloginfo( 'name' ); ?>"/></a>

			</div>-->

<!-- end of #logo -->

		<?php get_sidebar( 'top' ); ?>
<!--
		<?php wp_nav_menu( array(

							   'container'       => 'div',

							   'container_class' => 'main-nav',

							   'fallback_cb'     => 'responsive_fallback_menu',

							   'theme_location'  => 'header-menu'

						   )

		);

		?>



		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>

			<?php wp_nav_menu( array(

								   'container'      => '',

								   'menu_class'     => 'sub-header-menu',

								   'theme_location' => 'sub-header-menu'

							   )

			);

			?>

		<?php } ?>

-->

		<?php responsive_header_bottom(); // after header content hook ?>


</div><!-- end of #header_wrapper -->
	</div><!-- end of #header -->

	<div class="container">
			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/uploads/2017/09/CHC_logo_web-slogan2017.png" alt="<?php bloginfo( 'name' ); ?>"/></a>

			</div>
			<div id="logo_mobile">
				<a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/uploads/2017/09/CHC_logo_web-slogan2017-mobile.png" alt="<?php bloginfo( 'name' ); ?>"/></a>

			</div>
			</div>
