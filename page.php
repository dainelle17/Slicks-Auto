<?php get_header(); ?>

    <div class="row">
        <div class="twelve columns">
            <?php 
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        switch (get_the_title()) {
                            case 'Contact Us':
                                require_once 'views/contact.php';
                                break;
                            case 'About US':
                                require_once 'views/about.php';
                                break;
                            case 'Blog':
                                require_once  'views/blog.php';
                                break;
                            case 'Services':
                                require_once  'views/services.php';
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    endwhile;
                endif;

                //If submitting contact form
                if(!empty($_POST['submit-contact'])){
                    require_once 'views/contact.php';
                }
            ?>
        </div>
    </div>

<?php get_footer(); ?>
