<?php

//GENERAL INFO

$phn_no = cs_get_option('phone_no');

$address_info = cs_get_option('address');

$email_info = cs_get_option('mail_info');

$preloader = cs_get_option('site_preloader');

$preloader_array = wp_get_attachment_image_src(cs_get_option('site_preloader'), 'large');

//HERO AREA INFO

$hero_title = cs_get_option('hero_area_title');

$hero_desc = cs_get_option('hero_area_desc');

$hero_bg = cs_get_option('hero_area_background');

$hero_bg_array = wp_get_attachment_image_src(cs_get_option('hero_area_background'), 'large');

//Favicon

$fav_logo = cs_get_option('site_favicon');

$fav_logo_array = wp_get_attachment_image_src(cs_get_option('site_favicon'), 'large');

//LOGO

$header_logo = cs_get_option('header_logo');

$header_logo_array = wp_get_attachment_image_src(cs_get_option('header_logo'), 'large');

$footer_logo = cs_get_option('footer_logo');

$footer_logo_array = wp_get_attachment_image_src(cs_get_option('footer_logo'), 'large');

if (!empty($header_logo)) {

	$header_logo = $header_logo_array[0];

} else {

	$header_logo = '' . get_template_directory_uri() . '/assets/img/logo.png';

}

if (!empty($footer_logo)) {

	$footer_logo = $footer_logo_array[0];

} else {

	$footer_logo = '' . get_template_directory_uri() . '/assets/img/footer-logo.png';

}

if (!empty($preloader)) {

	$preloader = $preloader_array[0];

} else {

	$preloader = '' . get_template_directory_uri() . '/assets/img/preloader.gif';

}

if (!empty($hero_bg)) {

	$hero_bg = $hero_bg_array[0];

} else {

	$hero_bg = '' . get_template_directory_uri() . '/assets/img/hero-bg.png';

}

if (!empty($fav_logo)) {

	$fav_logo = $fav_logo_array[0];

} else {

	$fav_logo = '' . get_template_directory_uri() . '/assets/img/favicon.png';

}

?>



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Favicons -->

    <link rel="shortcut icon" href="<?php echo $fav_logo; ?>">



    <!-- <title>Soldis</title> -->



    <?php wp_head();?>

</head>



<body>

    <!-- PRELOADER START -->

    <div id="preloader"><img src="<?php echo $preloader; ?>" alt="pre-loader"></div>

    <!-- PRELOADER END -->



    <!-- OFF CANVAS MENU START -->

    <?php get_template_part( 'template-parts/secondary-nav', 'nav' ); ?>

    <!-- OFF CANVAS MENU END -->



<div class="site-wrapper">

    <!-- hero-area area start -->

    <div class="soldis-header border-bottom-3" id="home">

        <div class="container-fluid home-sticky">

            <div class="row h-area">

                <div class="col-md-2">

                    <div class="soldis-burger-menu-trigger soldis-burger-menu-trigger-home">



                        <div class="burger-align">

                            <div id="simply-burger">

                                <span></span>

                                <span></span>

                                <span></span>

                            </div>

                            <div class="simply-burger-txt">

                                <p>Меню</p>

                            </div>

                        </div>



                    </div>

                </div>

                <div class="col-md-6">

                    <div class="soldis-logo">

                        <a href="<?php echo site_url(); ?>"><img src="<?php echo $header_logo; ?>" alt=""></a>

                    </div>

                </div>

                <!--

                <div class="col-md-2">

                    <div class="soldis-phone-no-header update1">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-telephone.png" alt=""> <a href="tel:<?php echo $phn_no; ?>"><?php echo $phn_no; ?></a></p>

                    </div>

                </div>



                <div class="col-md-2">

                    <div class="soldis-phone-no-header update1">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.png" alt=""> <a href="mailto:<?php echo $email_info; ?>"><?php echo $email_info; ?></a></p>

                    </div>

                </div> -->







                <!-- Updated at Feb 23 -->

                <div class="col-md-2 phone-col">

                    <div class="soldis-phone-no-header update1">

                        <a href="tel:<?php echo $phn_no; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-telephone.png" alt=""> <p class="mobile-display-none"><?php echo $phn_no; ?></p></a>

                    </div>

                </div>

                <div class="col-md-2">

                    <div class="soldis-phone-no-header update1 tablet-display-none mobile-display-none"> <!-- Added at Feb 23 -->

                        <a href="mailto:<?php echo $email_info; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.png" alt=""> <p><?php echo $email_info; ?></p></a>

                    </div>

                </div>







            </div>

        </div>











    </div>

    <!-- hero-area area end -->





