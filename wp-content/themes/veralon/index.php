<?php get_header(); ?>

<section class="carosal_slider">
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php $slide_count = 1;
            if (have_rows('slider')) :  while (have_rows('slider')) : the_row(); ?>
                    <div class="carousel-item <?php if ($slide_count == 1) {
                                                    echo "active";
                                                } ?>">
                        <img src="<?php the_sub_field('slide_image'); ?>" alt="#" width="1100" height="500">
                        <div class="home_banner_content">
                            <h3><?php the_sub_field('slide_sub_heading'); ?></h3>
                            <h1><?php the_sub_field('slide_heading'); ?></h1>
                        </div>
                    </div>
                    <?php $slide_count++;
                endwhile;
            endif; ?>
        </div>

        <!-- Left and right controls -->

         <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</section>

<section class="banner_video">
    <video loop autoplay>
        <source src="<?php bloginfo('template_url'); ?>/videos//video1.mp4" type="video/mp4">
        <source src="<?php bloginfo('template_url'); ?>/videos//video1.mp4" type="video/ogg">
    </video>
    <div class="home_banner_content">
        <h3>Experience the</h3>
        <h1>Veralon Brain Trust Approach</h1>
    </div>
</section>

<?php get_template_part('achievements'); ?>

<section class="solving_prob_sec">
    <div class="container">
        <div class="solving_prob_sec_content">
            <h2><?php the_field('unique_heading'); ?></h2>
            <div class="solving_prob_sec_description">
                <h6><?php the_field('unique_text'); ?></h6>
            </div>
        </div>
    </div>
</section>
<section class="home_services_sec">
    <h2><?php echo get_the_title('10'); ?></h2>
    <div class="services_area">
    <?php $args = array( 'post_type' => 'service', 'posts_per_page' => 3, 'order' => 'ASC' ); $the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="service_cus_row">
                    <div class="service_cus_col">
                        <div class="service_img">
                            <?php echo get_the_post_thumbnail() ?>
                        </div>
                    </div>
                    <div class="service_cus_col">
                        <div class="services_area_content">
                            <h2><?php the_title(); ?></h2>
                            <div class="services_area_description">
                                <h6><?php the_excerpt(); ?></h6>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="cus_button">Strategic Services</a>
                        </div>
                    </div>
                </div>

                <?php wp_reset_postdata(); endwhile; endif;  ?>
    </div>
</section>
<section class="video_sec">
    <div class="container">
        <h2><?php the_field('brain_trust_heading'); ?></h2>
        <div class="video_sec_descrip">
            <h6><?php the_field('brain_trust_tagline'); ?></h6>
        </div>
        <video loop controls>
            <source src="<?php the_field('brain_video_source'); ?>" type="video/mp4">
            <source src="<?php the_field('brain_video_source'); ?>" type="video/ogg">
        </video>
        <div class="video_buttons">
            <a href="<?php the_permalink('82') ?>" class="cus_button">Meet the Team</a>
            <a href="<?php the_permalink('16') ?>" class="cus_button">Book a Speaker</a>
        </div>
    </div>
</section>
<?php get_template_part('lets-connect'); ?>

<?php get_footer(); ?>