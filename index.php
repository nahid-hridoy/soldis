<?php

// if(!is_home()){
//     get_header('t2'); 
// }else{
//     get_header(); 
// }

get_header();
?>

    <!-- TESTIMONILA-SECTION-START -->

    <div class="testimonial-section" id="about-company">
        <div class="container">
            <div class="row about-company-top">
                <div class="col-md-6">
                    <div class="testimonial-intro">
                        <h1>О компании</h1>
                        <p>Подавляющее большинство заказчиков в период сотрудничества с нашей компанией становятся друзьями
                            и партнерами на долгие годы – в этом основная сила нашей компании.</p>
                        <p>Главным капиталом компании является безупречная репутация, надежные деловые связи, компетентность
                            и профессионализм.
                        </p>
                        <p>У нас твердые позиции и уверенный взгляд в будущее.</p>
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

    <div class="feature-section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="count-up-features">

                        <?php
                        global $post;
                        $args = array(
                            'posts_per_page' => 5,
                            'post_type' => 'features',
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
                                    <span><?php echo $feature_value; ?></span>
                                    <?php
                                        if( $feature_value_type == 1 ){
                                            echo 'M<sup>2</sup>';
                                        }else{
                                            echo 'лет';
                                        }

                                    ?>
                                    
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
                        <h4>Что нас отличает? </h4>
                        <p>Благодаря высокому профессиональному уровню управления строительством, применению современных строительных
                            решений, новейших производственных технологий, а также использованию первоклассного штата сотрудников,
                            возведение объектов выполняется в запланированные сроки при оптимальной стоимости строительства.</p>
                        <ul>
                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Соблюдение сроков
                                </a>
                            </li>

                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Соблюдение бюджетных рамок
                                </a>
                            </li>

                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Гарантия на все проведенные нами работы

                                </a>
                            </li>

                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Обязательное послегарантийное обслуживание

                                </a>
                            </li>

                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Соблюдение СНиПов

                                </a>
                            </li>

                            <li>
                                <a>
                                    <i class="fa  fa-check-square-o"></i>
                                    Использование современных строительных материалов, инструментов и технологий строительства
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Section End -->

    <!-- PROJECT-SECTION-START -->

    <div class="project-section">

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="single-project-header">
                    <div class="col-md-6">
                        <div class="project-name">
                            <h4>Складские и заводские помещения</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-link">
                            <a href="project.html">Смотреть все проекты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-showcase portfolio-list m-b-0">
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
            <div class="portfolio portfolio-1">
                <a href="#" class="portfolio-wrapper snip1302" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title">BVDM</div>
                                <div class="text-category">
                                    <span class="text-category-1">Город: </span>
                                    <span class="text-category-2">Москва</span>
                                </div>
                                <div class="text-category">
                                    <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                    <span class="text-category-2">2016 г</span>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </a>
            </div>
        </div>

        











        <!-- PROJECT SHOCASE OLD -->

        <!-- <div class="container-fluid project-showcase">
            <figure class="snip1301" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h1.png');">
                <figcaption></figcaption>
            </figure>
            <figure class="snip1301" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h2.png');">
                <figcaption></figcaption>
            </figure>
            <figure class="snip1301" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/h3.png');">
                <figcaption></figcaption>
            </figure>
        </div> -->
    </div>



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
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-5.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-6.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-7.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-8.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-9.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-10.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-11.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-logo-table">
                            <div class="single-logo-tablecell">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-12.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO-SECTION-END -->

<?php get_footer(); ?>