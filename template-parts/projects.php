 
    <div class="project-section">

    <?php
        $taxonomy = 'project-category';
        $terms = get_terms($taxonomy);
        //$ctg_name = array();

        if ( $terms && !is_wp_error( $terms ) ) :
        ?>
        <?php /*$counter_ctg = 0;*/ ?>
        <?php foreach ( $terms as $term ) {
            /*if($counter_ctg > 6){
                break;
            }*/

            /*$counter_ctg++;*/
         ?>
           <div class="container">
                <div class="row text-center">
                    <div class="single-project-header">
                        <div class="col-md-6">
                            <div class="project-name">
                                <h4><?php echo $term->name; ?></h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project-link">
                                <a href="project">Смотреть все проекты</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             

        

        <div class="container-fluid project-showcase portfolio-list m-b-0">
            
            <?php
            global $post;
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'project',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project-category',
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                    )
                ),
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $myposts = get_posts($args);

            foreach($myposts as $post):
                setup_postdata($post); ?>
            
            <?php

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


            <div class="portfolio portfolio-1">
                <a href="<?php the_permalink(); ?>" class="portfolio-wrapper snip1302" style="background-image: url('<?php the_post_thumbnail_url( ); ?>');">
                    <figcaption>
                        <div class="portfolio-label2">
                            <div class="portfolio-label-text">
                                <div class="text-title"><?php the_title( ); ?></div>
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

            <?php endforeach; wp_reset_query(); ?>


        </div>

<?php } ?>
        <?php endif;?>

 
    </div>
