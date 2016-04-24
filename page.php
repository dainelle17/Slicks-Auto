<?php get_header(); ?>

    <div class="row">
        <div class="two columns"></div>
        <div class="eight columns">
            <?php 
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        switch (get_the_title()) {
                            case 'Contact Us':
                                include 'views/contact.php';
                                break;
                            case 'About US':
                                include 'views/about.php';
                                break;
                            case 'Blog':
                                include 'views/blog.php';
                                break;
                            case 'Services':
                                include 'views/services.php';
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    endwhile;
                endif; 
            ?>
        </div>
        <div class="two columns"></div>
    </div>

<?php get_footer(); ?>
