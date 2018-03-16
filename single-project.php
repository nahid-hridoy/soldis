<?php
/*get_header( 't2' );*/
get_header('t3');
?>


<?php

while (have_posts()):
	the_post();
	$project_meta = get_post_meta(get_the_ID(), 'soldis_project_meta', true);
	if (get_post_meta(get_the_ID(), 'soldis_project_meta', true)) {
		$project_meta = get_post_meta(get_the_ID(), 'soldis_project_meta', true);
	} else {
		$project_meta = array();
	}

	if (array_key_exists('location_city', $project_meta)) {
		$city = $project_meta['location_city'];
	} else {
		$city = '';
	}

	if (array_key_exists('year-of-commissioning', $project_meta)) {
		$year = $project_meta['year-of-commissioning'];
	} else {
		$year = '';
	}

	if (array_key_exists('project_area', $project_meta)) {
		$area = $project_meta['project_area'];
	} else {
		$area = '';
	}

	if (array_key_exists('project_gallery_f', $project_meta)) {
		$gallery_meta = $project_meta['project_gallery_f'];
	} else {
		$gallery_meta = '';
	}
	if (array_key_exists('client_review_logo', $project_meta)) {
		$client_logo = $project_meta['client_review_logo'];
	} else {
		$client_logo = '';
	}
	if (array_key_exists('review_head_line', $project_meta)) {
		$review_headline = $project_meta['review_head_line'];
	} else {
		$review_headline = '';
	}
	if (array_key_exists('review_details', $project_meta)) {
		$review_details = $project_meta['review_details'];
	} else {
		$review_details = '';
	}

	?>


		    <!-- PROJECT DETAILS AREA START -->
		    <div class="section-padding">
		        <div class="container-fluid">

		            <div class="row">
		                <div class="col-md-8 col-md-offset-2 col-sm-12 custom-col-padding-1">

		                    <div class="row">
		                        <div class="col-md-12">
		                            <div class="project-breadcumb">
		                                <ul class="project-breadcumb-pc">
		                                    <li><a href="<?php echo site_url(); ?>">Главная</a></li>
		                                    <li><a href="projects">Объекты</a></li>
		                                    <li class="active"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
		                                </ul>

		                                <ul class="project-breadcumb-mobile">
		                                    <li>
		                                        <a href="project">
		                                            <i class="fa fa-chevron-left"></i>
		                                            ВЕРНУТЬСЯ К ПРОЕКТАМ
		                                        </a>
		                                    </li>
		                                </ul>
		                            </div>
		                            <div class="project-header">
		                                <h3><?php the_title();?></h3>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="row background-clipping">
		                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
		                            <div class="listing-carousel">


		                                <?
		                                    //Single-PROJECT-GALLERY
		                                     $gallery_img_array = explode( ',', $gallery_meta );
		                                ?>


		                                <?php foreach ($gallery_img_array as $single_g_img): $nmh47_gallery = wp_get_attachment_image_src($single_g_img, 'full')?>

				                                 <div class="single-listing-box" style="background-image: url('<?php echo $nmh47_gallery[0]; ?>');"></div>


				                                <?php endforeach;?>

		                            </div>
		                        </div>
		                    </div>

		                    <div class="row info-and-description-area">
		                        <div class="col-md-6">
		                            <div class="general-info">
		                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-location.png" alt="">
		                                <span>Город: <?php echo $city ?></span>
		                            </div>
		                            <div class="general-info">
		                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-calendar.png" alt="">
		                                <span>Год ввода в эксплуатацию: <?php echo $year ?></span>
		                            </div>
		                            <div class="general-info">
		                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-area-volume.png" alt="">
		                                <span>Площадь: <?php echo $area ?></span>
		                            </div>
		                        </div>



		                        <div class="col-md-6 description">
		                            <?php echo wpautop(the_content()); ?>

		                            <!-- <p>
		                                    Жилой комплекс «Ладога», состоящий из 68 домов, сдан в эксплуатацию в 2008 году, общий срок строительно-монтажных работ составил 24 месяца.
		                            </p>
		                            <p>
		                                    Дома спроектированы с учетом современных направлений архитектуры, снабжены индивидуальным отоплением, центральным водопроводом и канализацией.
		                            </p> -->
		                        </div>
		                    </div>


		                    <div class="row project-review-company-area">
		                        <div class="col-md-12">
		                            <div class="project-review-company-info">
		                                <?php
	$client_logo = $project_meta['client_review_logo'];
	$client_logo_array = wp_get_attachment_image_src($project_meta['client_review_logo'], 'large');
	?>
		                                <img src="<?php echo $client_logo_array[0]; ?>" alt="">
		                                <h3><?php echo $review_headline; ?>:</h3>
		                            </div>
		                        </div>
		                        <div class="col-md-12">
		                            <div class="project-review">
		                                <?php echo $review_details; ?>
		                            </div>
		                        </div>
		                    </div>




		                </div>
		            </div>

		        </div>
		        <!-- container -->
		    </div>

		    <!-- PROJECT DETAILS AREA END -->
		<?php endwhile;?>

<?php get_footer();?>
