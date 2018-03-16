<?php

if(!is_home()){
    get_header('t2'); 
}else{
    get_header(); 
}

?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_title( ); ?>
                <?php the_content( ); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>