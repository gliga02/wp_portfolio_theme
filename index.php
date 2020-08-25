<?php get_header(); ?>

<div class="container-sm">


    <section id="main">
        <h4><i class="fas fa-camera-retro"></i> Photo Gallery</h4>
        <?php 
            $homepagePhotos = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'photo'
            ));

            while ($homepagePhotos->have_posts()) {
                $homepagePhotos->the_post(); ?>
            
        
        <img src="<?php the_field('photo'); ?>">

            <?php } ?>
        
    </section>



  

    <section id="projects">
        <h4><i class="fas fa-thumbtack"></i> Projects</h4>
        <?php
            $homepageProjects = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'project'
            ));

            while ($homepageProjects->have_posts()) {
                $homepageProjects->the_post(); ?>
           
        
        <img src="<?php the_field('thumbnail'); ?>">

            <?php } ?>

    </section>

    <?php get_footer(); ?>