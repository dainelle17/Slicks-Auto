<?php get_header(); ?>

        <section class="row">
            <div class="twelve columns">
                <div class="slider twelve columns">
                    <img class="main-image" src="<?php bloginfo('url'); echo '/images/slicks-main.jpg';?>"/>
                    <div class="slider-buttons">
                        <div class="slider-button left-slider-button"></div>
                        <div class="slider-button right-slider-button"></div>
                     </div>
                     <a href="<?php bloginfo('url'); echo '/images/Online-MonthlyOffers-Coupons4-lg.jpg'?>" target="__blank" class="coupon-button">GET OFFER</a>
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
