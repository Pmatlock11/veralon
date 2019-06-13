<?php get_header(); /* Template Name: Services */?>
<?php if(get_field('banner_video')): ?>

<section class="banner_video">
    <video loop autoplay>
        <source src="<?php echo get_field('banner_video'); ?>" type="video/mp4">
       <!--  <source src="<?php //bloginfo('template_url'); ?>/videos//video1.mp4" type="video/ogg"> -->
    </video>
    <div class="home_banner_content">
        <h3><?php echo get_field('top_banner_heading'); ?></h3>
        <h1><?php echo get_field('banner_text'); ?></h1>
    </div>
</section>
<?php else: ?>
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
<?php endif;?>
<?php get_template_part('achievements'); ?>

<div class="services_sections">
    <?php $args = array('post_type' => 'service', 'posts_per_page' => 5, 'order' => 'DSC');
    $the_query = new WP_Query($args); ?>
            <section class="services_services_sec">
                <div class="container">
                    <div class="services_area">
						<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="service_cus_row">
                            <div class="service_cus_col">
                                <div class="service_img">
                                    <img src="<?php the_field('service_thumb'); ?>" alt="#">
                                </div>
                            </div>
                            <div class="service_cus_col">
                                <div class="services_area_content">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="services_area_description">
                                        <h6><?php the_content(); ?></h6>
                                        <a href="#">Subscribe link - lorem ispum dolor sit</a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="cus_button">Learn More</a>
                                </div>
                            </div>
                        </div>
						            <?php wp_reset_postdata();
        endwhile;
    endif;  ?>
                    </div>
                </div>
            </section>
</div>
<section class="video_sec services_slider">
    <div class="container">
        <h2><?php the_field('advisors_heading'); ?></h2>
        <div class="video_sec_descrip">
            <h6><?php the_field('advisors_tagline'); ?></h6>
        </div>
        <div class="owl-carousel owl-theme">
        <?php $args = array( 'post_type' => 'advisor', 'posts_per_page' => -1, 'order' => 'ASC' ); $the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="item">
                <div class="slider_img">
                    <?php the_post_thumbnail(); ?>
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
            <?php wp_reset_postdata(); endwhile; endif;  ?>
        </div>
    </div>
</section>

<?php get_template_part('lets-connect'); ?>

<?php get_footer(); ?>