<?php get_header(); /* Template Name: Contact Us */?>
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
                        <div class="home_banner_content team_banner_content">
                            <h1><?php the_sub_field('slide_heading'); ?></h1>
                            <h3><?php the_sub_field('slide_sub_heading'); ?></h3>
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

<section class="contact_address_sec">
    <div class="contact_address_area">
        <div class="container">
            <h4><?php the_field('full_address'); ?></h4>
        </div>
    </div>
</section>
<section class="office_sec">
    <div class="container">
        <h2><?php the_field('offices_heading'); ?></h2>

        <div class="office_cus_row">
            <?php if (have_rows('office')) :  while (have_rows('office')) : the_row(); ?>
                    <div class="office_cus_col">
                        <div class="office_area">
                            <div class="office_sec_img">
                                <img src="<?php the_sub_field('office_image'); ?>">
                            </div>
                            <div class="office_sec_content">
                                <h5><?php the_sub_field('office_name'); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
        endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('lets-connect'); ?>

<?php get_footer(); ?>