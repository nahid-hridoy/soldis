    <!-- PROJECT AREA START -->
    <div class="container-fluid pt-70-b-30">
        
        <div class="row">
            <div class="col-md-12">
                <div class="project-filter-list text-center update1 single-filter-list">
                    <ul id="filters">


                        <?php
                        $taxonomy = 'project-category';
                        $terms = get_terms($taxonomy);

                        if ( $terms && !is_wp_error( $terms ) ) :

                            $filter_counter_1 = 0;
                        ?>
                        
                        <?php foreach ( $terms as $term ){ ?>
                            <li>
                                <span class="filter-home <?php echo ($filter_counter_1 == 0) ? 'active' : ''; ?>" data-filter="<?php echo create_slug($term->name); ?>"><?php echo $term->name; ?></span>
                            </li>

                        <?php $filter_counter_1++; } ?>

                        <?php endif; ?> 

                    </ul>
                </div>
                <div class="project-filter-list-dropdown text-center update1 single-filter-dropdown" id="dd" tabindex="1">
                    
                    <span class="single-filter-dropdown active">Все объекты</span>
                    <ul id="filters" class="dropdown">

                        <?php
                        $taxonomy = 'project-category';
                        $terms = get_terms($taxonomy);

                        if ( $terms && !is_wp_error( $terms ) ) :

                            $filter_counter_1 = 0;
                        ?>
                        
                        <?php foreach ( $terms as $term ){ ?>
                            <li>
                                <span class="filter-home <?php echo ($filter_counter_1 == 0) ? 'active' : ''; ?>" data-filter="<?php echo create_slug($term->name); ?>"><?php echo $term->name; ?></span>
                            </li>

                        <?php $filter_counter_1++; } ?>

                        <?php endif; ?> 


                    </ul>                    
                </div>
                <div class="project-header project-all-link">
                    <a href="project">Смотреть все объекты >>></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid project-showcase portfolio-list" id="portfoliolist-home">

        <?php
            $taxonomy = 'project-category';
            $terms = get_terms($taxonomy);

            if ( $terms && !is_wp_error( $terms ) ) :

                $project_counter = 0;
        ?>
            
        <?php foreach ( $terms as $term ) { ?>

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

            /*echo "<pre>";
            print_r($myposts);
            echo "</pre>";*/

            foreach($myposts as $post):
                setup_postdata($post); ?>
            
            <?php
                /*$categories = get_the_category( $term->term_id );
                echo "<pre>";
                print_r($categories);
                //echo $post->ID;
                echo "<br>";
                echo "</pre>";*/

                
                


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
        <div class="portfolio <?php echo ($project_counter == 0) ? 'portfolio-1' : ''; ?> <?php echo create_slug($term->name); ?>">
            <a href="<?php the_permalink(); ?>" class="portfolio-wrapper snip1302 update1" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <figcaption>
                    <div class="portfolio-label2 update1">
                        <h4>СМОТРЕТЬ ОБЪЕКТ</h4>
                    </div>
                </figcaption>
            </a>
        </div>
        <!-- SINGLE PROJECT CARD END-->

    <?php endforeach; wp_reset_query(); ?>

    <?php $project_counter++; } ?>

    <?php endif; ?> 






    </div>
    <!-- PROJECT AREA END -->