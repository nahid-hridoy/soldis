 <?php

/*
Template Name: Project Template
*/

get_header('t2');

?>



    <!-- PROJECT AREA START -->
    
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 custom-col-padding-1">
                <div class="project-breadcumb">
                    <ul>
                        <li><a href="">Главная</a></li>
                        <li class="active"><a href="">Объекты</a></li>
                    </ul>
                </div>
                <div class="project-header">
                    <h3>РЕАЛИЗОВАННЫЕ ПРОЕКТЫ</h3>
                </div>
                <div class="project-filter-list text-center">
                    <ul id="filters">
                        <li>
                            <span class="filter active" data-filter="*">Все объекты</span>
                        </li>
                        




                      <?php
                        $taxonomy = 'project-category';
                        $terms = get_terms($taxonomy);

                        if ( $terms && !is_wp_error( $terms ) ) :
                        ?>
                        
                            <?php foreach ( $terms as $term ) { ?>
                                <li>
                                    <span class="filter" data-filter=".<?php echo create_slug($term->name); ?>"><?php echo $term->name; ?></span>
                                </li>

                            <?php } ?>
                        <?php endif;?> 


                    </ul>
                </div>
                <div class="project-header">
                    <h3>ВСЕ ОБЪЕКТЫ</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->


    <div class="container-fluid project-showcase portfolio-list" id="portfoliolist">

        <?php
            global $post;
            $args = array(
                'posts_per_page' => 1000,
                'post_type' => 'project',                
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $myposts = get_posts($args);

            

            foreach($myposts as $post):
                setup_postdata($post); ?>
            
            <?php
                /*$categories = get_the_category( $term->term_id );
                echo "<pre>";
                print_r($categories);
                //echo $post->ID;
                echo "<br>";
                echo "</pre>";*/

                $terms = get_the_terms($post->ID, 'project-category' );
                if ($terms && ! is_wp_error($terms)) :
                    $tslugs_arr = array();
                    foreach ($terms as $term) {
                        $tslugs_arr[] = create_slug($term->name);
                    }
                    $terms_slug_str = join( " ", $tslugs_arr);
                endif;
                


                $project_meta = get_post_meta( get_the_ID(), 'soldis_project_meta', true );

                if(get_post_meta( get_the_ID(), 'soldis_project_meta', true )) {
                    $project_meta = get_post_meta( get_the_ID(), 'soldis_project_meta', true );
                }else{
                    $project_meta = array();
                }



                if(array_key_exists('location_city', $project_meta)){
                $city = $project_meta['location_city'];
                }else{
                    $city = '';
                }

                if(array_key_exists('year-of-commissioning', $project_meta)){
                $year = $project_meta['year-of-commissioning'];
                }else{
                    $year = '';
                }

                if(array_key_exists('project_area', $project_meta)){
                $area = $project_meta['project_area'];
                }else{
                    $area = '';
                }

                

            ?>
       

        <!-- SINGLE PROJECT CARD START-->
        <div class="portfolio <?php echo $terms_slug_str; ?>" data-cat="<?php echo $terms_slug_str; ?>">
            <a href="<?php the_permalink(); ?>" class="portfolio-wrapper snip1302" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <figcaption>
                    <div class="portfolio-label2">
                        <div class="portfolio-label-text">
                            <div class="text-title"><?php the_title(); ?></div>
                            <div class="text-category">
                                <span class="text-category-1">Город: </span>
                                <span class="text-category-2"><?php echo $city; ?></span>
                            </div>
                            <div class="text-category">
                                <span class="text-category-1">Год ввода в эксплуатацию: </span>
                                <span class="text-category-2"><?php echo $year; ?></span>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </a>
        </div>
        <!-- SINGLE PROJECT CARD END-->

        <?php endforeach; wp_reset_query(); ?>



    </div>
    <!-- PROJECT AREA END -->

    <!-- BACK TO TOP START -->
    
    <div class="back-to-top">
        <div class="conatiner">
            <div class="row">
                <div class="col-md-12">
                    <a href="#home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/b-top.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- BACK TO TOP END -->

<?php get_footer(); ?>