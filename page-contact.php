<?php get_header(); ?>

<div class="container-xm">
        <section id="main" class="contact">
            <h1><i class="far fa-comments"></i> Let's talk</h1>
            <br>
            <p>I hope you have fun exploring. So, don’t forget to come back for more. You can connect with me all on my
                socials, drop a message, and tell me about you! Let’s create.</p>
                <br>
            <?php 

            while (have_posts()) 
                { 
                    the_post();
                    the_content();

                } 

            ?>
        </section>

        <?php get_footer(); ?>