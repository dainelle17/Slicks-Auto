<?php get_header(); ?>

        <section class="row">
            <div class="twelve columns">
                <div class="slider twelve columns">
                    <img src="slider-image"/>
                    <div class="slider-buttons">
                        <div class="slider-button left-slider-button">left</div>
                        <div class="slider-button right-slider-button">right</div>
                     </div>
                </div>
                
                <?php/*
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            }
                            ?>
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink(); ?>">Read More...</a>
                        <?php } // end while
                    } // end if
                    */
                ?>
            </div>
        </section>

<?php get_footer(); ?>
