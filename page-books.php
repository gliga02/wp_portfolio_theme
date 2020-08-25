<?php get_header(); ?>


<div class="container-xm">

        <section id="main">
            <h1><i class="fas fa-book-open"></i> Books I've read</h1>
            <br>
            <p>I read a lot of books, and here i share and rate them here. Feel free to share your book suggestions via
                email or on social media, I’d love to hear them!</p>
            <br>
            <?php 
                $books = new WP_Query(array(
                    'posts_per_page' => 10,
                    'post_type' => 'book'
                ));

                while ($books->have_posts()) {
                    $books->the_post(); ?>
                
            <div class="book">
                <h3>“<?php the_title(); ?>”</h3>
                <p><?php the_field('author'); ?></p>
                <?php 
                    for($i = 0; $i < get_field('rate'); $i++) {
                        echo '<i class="fa fa-star"></i>';
                    }
                ?>
               
                <?php } ?>
            </div>
        </section>

        <?php get_footer(); ?>