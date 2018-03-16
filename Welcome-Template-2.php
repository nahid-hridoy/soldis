<?php

/*
Template Name: HomePage Template V2
*/

get_header(  );

?>

<?php

//GENERAL INFO
 $phn_no = cs_get_option( 'phone_no' );
 $address_info = cs_get_option( 'address' );
 $email_info = cs_get_option( 'mail_info' );

 //HERO AREA INFO
 $hero_title = cs_get_option( 'hero_area_title' );
 $hero_desc = cs_get_option( 'hero_area_desc' );

//COMPANY AREA INFO
 $company_title = cs_get_option( 'company_area_title' );
 $company_desc = cs_get_option( 'company_area_desc' );

//FEATURE AREA INFO
 $feature_title = cs_get_option( 'feature_area_title' );
 $feature_desc = cs_get_option( 'feature_area_desc' );
 $feature_bg = cs_get_option('feature_area_background');
 $feature_bg_array = wp_get_attachment_image_src( cs_get_option('feature_area_background'), 'large' );



if (!empty($feature_bg)) {
    $feature_bg = $feature_bg_array[0];
}else{
    $feature_bg = ''.get_template_directory_uri().'/assets/img/BG.png';
}



//PARTNER LOGOS
 $partner_logo = cs_get_option( 'partner_logos' );
 $partner_logo_array = explode( ',', $partner_logo );


?>

    <!-- PROJECT-SECTION-START -->

    <?php get_template_part( 'template-parts/home-projects' ); ?>

    <!-- PROJECT-SECTION-END -->


    <!-- TESTIMONILA-SECTION-START -->

    <div class="testimonial-section" id="about-company">
        <div class="container">
            <div class="row about-company-top">
                <div class="col-md-6">
                    <div class="testimonial-intro">
                        <h1><?php echo $company_title; ?></h1>
                        <?php echo wpautop( $company_desc ); ?>
                    </div>
                </div>
            </div>

            <div class="row" id="our-team">
                <div class="testimonial-carousel">

                    <?php
                        global $post;
                        $args = array(
                            'posts_per_page' => 8,
                            'post_type' => 'team-member',
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        );
                        $myposts = get_posts($args);

                        foreach($myposts as $post):
                            setup_postdata($post); ?>


                    <?php 
                       $person_intro = get_post_meta($post->ID, 'person-intro', true);
                    ?>


                    <!-- single-testimonial-intro-start -->
                    <div class="single-testimonial">
                        <div class="col-md-6">
                            <div class="person-details">
                                <p class="person-name"><?php the_title( ); ?></p>
                                <p class="person-intro"><?php echo $person_intro; ?></p>
                            </div>
                            <div class="person-quote">
                                
                                    <?php the_content(); ?>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="person-image">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-1.png" alt=""> -->
                                <img src="<?php the_post_thumbnail_url(); ?>);" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonial-intro-end -->

                    <?php endforeach; wp_reset_query(); ?>


                </div>
            </div>

        </div>
    </div>
    <!-- TESTIMONILA-SECTION-END -->

    <!-- Features Section Start -->

    <div class="feature-section" id="features" style="background-image: linear-gradient(to right bottom, rgba(226, 226, 226, 0.8), rgba(211, 211, 211, 0.8)), url('<?php echo $feature_bg; ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="count-up-features">

                        <?php
                        global $post;
                        $args = array(
                            'posts_per_page' => 5,
                            'post_type' => 'feature',
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        );
                        $myposts = get_posts($args);

                        foreach($myposts as $post):
                            setup_postdata($post); ?>


                        <?php 
                           $feature_value = get_post_meta($post->ID, 'Feature-Value', true);
                           $feature_value_type = get_post_meta($post->ID, 'Value-Type', true);
                        ?>


                        <!-- single feature start -->
                        <div class="single-counter-box">
                            <div class="col-md-3 feature-desc">
                                <p class="counter-number">
                                    <span><?php echo $feature_value; ?></span><?php echo $feature_value_type; ?>
                                    <!-- <?php
                                        if( $feature_value_type == 1 ){
                                            echo 'M<sup>2</sup>';
                                        }else{
                                            echo 'лет';
                                        }

                                    ?> -->
                                    
                                </p>
                                <div class="under-desc">
                                    <?php the_content( ); ?>
                                </div>
                                
                            </div>

                            <div class="col-md-3 feature-icon">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>

                        </div>
                        <!-- single feature ennd -->

                        <?php endforeach; wp_reset_query(); ?>



                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="features-text-block">
                        <h4><?php echo $feature_title; ?></h4>
                        <?php echo wpautop( $feature_desc ); ?>
                        
                        <ul>

                            <?php $list_datas = cs_get_option('feature_area_lists'); foreach($list_datas as $list_data) : ?>
                                    
                                <li>
                                    <a>
                                        <i class="fa  fa-check-square-o"></i>
                                        <?php echo $list_data['s_l_d']; ?>
                                    </a>
                                </li>

                            <?php endforeach; ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Section End -->





    <!-- PROJECT-SECTION-START -->

    <!-- <?php get_template_part( 'template-parts/projects', 'nav' ); ?> -->

    <!-- PROJECT-SECTION-END -->


    <!-- LOGO-SECTION-START -->
    <div class="logo-section" id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Нам доверяют</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 hd-pc-col-width">
                    
                <?php foreach($partner_logo_array as $single_partner_logo): $p_logo_array = wp_get_attachment_image_src($single_partner_logo,'full' ); ?>

                    <div class="col-md-3"> 
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo $p_logo_array[0]; ?>" alt="">
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- LOGO-SECTION-END -->

<?php get_footer(); ?>