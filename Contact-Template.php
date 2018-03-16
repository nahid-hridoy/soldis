<?php

/*
Template Name: Contact Template
 */

/*get_header('t2');*/
get_header('t3');

?>

<?php

//GENERAL INFO
$phn_no = cs_get_option('phone_no');
$address_info = cs_get_option('address');
$email_info = cs_get_option('mail_info');

//HERO AREA INFO
$hero_title = cs_get_option('hero_area_title');
$hero_desc = cs_get_option('hero_area_desc');

//CONTACT AREA
$gmap_lat = cs_get_option('google_map_lat');
$gmap_lan = cs_get_option('google_map_lan');

$contact_img = cs_get_option('contact_area_img');
$contact_img_array = wp_get_attachment_image_src(cs_get_option('contact_area_img'), 'large');

if (!empty($contact_img)) {
	$contact_img = $contact_img_array[0];
} else {
	$contact_img = '' . get_template_directory_uri() . '/assets/img/contact-page.jpg';
}

?>

    <!-- CONTACT US AREA START -->
    <div class="section-padding">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 custom-col-padding-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project-header">
                                <h3>Контактная информация</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 column-100">
                            <div class="contact-image">
                                <img src="<?php echo $contact_img; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 column-100">
                            <!-- <div class="contact-info">
                                <?php echo wpautop($phn_no); ?>
                                <?php echo wpautop($address_info); ?>
                                <?php echo wpautop($email_info); ?>
                            </div> -->
                            <div class="contact-info">
                                <p><a href="tel:<?php echo $phn_no; ?>"><?php echo $phn_no; ?></a></p>
                                <?php echo wpautop($address_info); ?>
                                <p><a href="mailto:<?php echo $email_info; ?>"><?php echo $email_info; ?></a></p>
                            </div>

                            <div class="contact-form">
                                <?php dynamic_sidebar('contact-form'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="googleMap3" latitude="<?php echo $gmap_lat; ?>" longitude="<?php echo $gmap_lan; ?>" style="width:100%;  background-color:#333"></div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>
    <!-- CONTACT US AREA END -->

<?php get_footer();?>