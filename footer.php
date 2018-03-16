<?php

//GENERAL INFO
 $phn_no = cs_get_option( 'phone_no' );
 $address_info = cs_get_option( 'address' );
 $email_info = cs_get_option( 'mail_info' );

 //HERO AREA INFO
 $hero_title = cs_get_option( 'hero_area_title' );
 $hero_desc = cs_get_option( 'hero_area_desc' );

  //LOGO
 $header_logo = cs_get_option('header_logo');
 $header_logo_array = wp_get_attachment_image_src( cs_get_option('header_logo'), 'large' );

 $footer_logo = cs_get_option('footer_logo');
 $footer_logo_array = wp_get_attachment_image_src( cs_get_option('footer_logo'), 'large' );

if (!empty($header_logo)) {
    $header_logo = $header_logo_array[0];
}else{
    $header_logo = ''.get_template_directory_uri().'/assets/img/logo.png';
}


if (!empty($footer_logo)) {
    $footer_logo = $footer_logo_array[0];
}else{
    $footer_logo = ''.get_template_directory_uri().'/assets/img/footer-logo.png';
}

?>


    <!-- FOOTER-AREA-START -->

    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 footer-logo">
                        <a href="<?php echo site_url( ); ?>"><img src="<?php echo $footer_logo; ?>" alt=""></a>
                    </div>

                    <div class="col-md-6 footer-info">
                        <p class="phone-no-footer"><?php echo $phn_no; ?></p>
                        <p class="address-footer"><?php echo $address_info; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER-AREA-END -->


</div>



    <?php wp_footer(); ?>
</body>

</html>
