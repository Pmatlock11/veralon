<?php get_header(); /* Template Name: Speaking */?>
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
<?php endif; ?>

<section class="video_sec">
    <div class="container">
        <h2><?php the_field('opportunities_heading'); ?></h2>
        <div class="video_sec_descrip">
            <h6><?php the_field('opportunities_text'); ?></h6>
        </div>
        <video loop="" controls="">
            <source src="<?php the_field('video_url'); ?>" type="video/mp4">
            <source src="<?php the_field('video_url'); ?>" type="video/ogg">
        </video>
    </div>
</section>
<section class="veralon_hot_topics">
    <div class="container">
        <h2><?php the_field('hot_topics_heding'); ?></h2>
        <div class="veralon_hot_content">
            <!-- <span>Top 7 Methods to Improve the Financials of Your Physician Enterprise: Optimizing Performance and Strategic Value</span>
            <lable>Ambulatory Care 2.0: The Next Generation of Your Ambulatory Care Network</lable>
            <span>The $10,000 Question: Tackling the Complexities of Value-Based Physician Compensation</span>
            <span class="light_grey_color">The Due Diligence Tightrope: Getting the Right Deal Done</span>
            <span>Setting Your BPCI Advanced Strategy: Understanding the Key Drivers of Success</span>
            <lable>Innovations in Primary Care Delivery: Beyond the Patient Centered Medical Home</lable>
            <span class="light_grey_color">The Devil in the Valuation Details: Top 10 Questions Lawyers and Healthcare Organizations Ask</span>
            <lable>Using Data Analytics for ACO Performance Improvement: Act Upon Opportunities to Improve Population Health</lable> -->
            <?php
            $tags = get_tags(array(
                'hide_empty' => false
            ));
            echo '<ul class="post_tags">';
            foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);
                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                echo '<a href="' . $tag_link . '">' . $tag->name . '</a>';
            }
            echo '</ul>';
            ?>
        </div>
    </div>
</section>
<section class="strategic_partners_sec speaking_stratrgic">
    <div class="container">
        <div class="speaking_stratrgic_content">
            <h2><?php the_field('strategic_heading'); ?></h2>
            <h6><?php the_field('strategic_text'); ?></h6>
            <a href="#" class="cus_button">Upcoming Event</a>
        </div>
        <div class="row">
            <?php $args = array('post_type' => 'partner', 'posts_per_page' => -1, 'order' => 'ASC');
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="strategic_img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <?php wp_reset_postdata();
                endwhile;
            endif;  ?>
        </div>
    </div>
</section>
<section class="connect_sec">
    <h2><?php the_field('speaker_heading'); ?></h2>
    <div class="connect_sec_descrip">
        <h6><?php the_field('speaker_text'); ?></h6>
    </div>
    <a href="<?php the_permalink('16'); ?>" class="cus_button">Book a Speaker</a>
</section>

<?php get_footer(); ?>