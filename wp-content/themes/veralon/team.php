<?php get_header(); /* Template Name: Team */?>
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
	                    <div class="carousel-item <?php if ($slide_count == 1) { echo "active";} ?>">
	                        <img src="<?php the_sub_field('slide_image'); ?>" alt="Image-<?=$slide_count;?>" width="1100" height="500">
	                        <div class="home_banner_content team_banner_content">
	                            <h1><?php the_sub_field('slide_heading'); ?></h1>
	                            <h3><?php the_sub_field('slide_sub_heading'); ?></h3>
	                        </div>
	                    </div>
	                    <?php $slide_count++;
	                endwhile;
	            endif; ?>
	        </div>
	        <a class="carousel-control-prev" href="#demo" data-slide="prev">
	        	<span class="carousel-control-prev-icon"></span>
	        </a>
	        <a class="carousel-control-next" href="#demo" data-slide="next">
	       		<span class="carousel-control-next-icon"></span>
	        </a>
	    </div>
	</section>
<?php endif; ?>
<section class="veralon_status">
    <div class="container">
        <div class="row">
            <?php if (have_rows('achievement')) :  while (have_rows('achievement')) : the_row(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="veralon_status_content">
                            <h3><?php the_sub_field('achievement_count'); ?></h3>
                            <h4><?php the_sub_field('achievement_heading'); ?></h4>
                        </div>
                    </div>
                <?php endwhile;
        endif; ?>
        </div>
    </div>
</section>

<section class="solving_prob_sec team_prob_sec_content">
    <div class="container">
        <div class="solving_prob_sec_content">
            <h2><?php the_field('about_heading'); ?></h2>
            <div class="solving_prob_sec_description">
                <h6><?php the_field('about_text'); ?></h6>
            </div>
            <a href="#" class="cus_button">Download Snapshot</a>
        </div>
    </div>
</section>

<section class="team_leadership">
    <div class="container">
        <div class="team_leadership_head">
            <h2><?php the_field('team_heading'); ?></h2>
        </div>
        <h2><?php echo get_cat_name($category_id = 4); ?></h2>
        <div class="leadership_cus_row">
            <?php $args = array('post_type' => 'Teams', 'category_name' => 'leadership', 'posts_per_page' => -1);
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="leadership_cus_col">
                        <a href="<?php the_permalink(); ?>">
                            <div class="leadership_img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="leadership_content">
                                <h5><?php the_title(); ?></h5>
                                <span><?php the_excerpt(); ?></span>
                            </div>
                        </a>
                    </div>
                    <?php wp_reset_postdata();
                endwhile;
            endif;  ?>

        </div>
    </div>
</section>
<section class="team_leadership additional_stuff_sec">
    <div class="container">
        <h2><?php echo get_cat_name($category_id = 5); ?></h2>
        <div class="leadership_cus_row">
            <?php $args = array('post_type' => 'Teams', 'category_name' => 'additional-staff', 'posts_per_page' => -1);
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="leadership_cus_col">
                        <a href="<?php the_permalink(); ?>">
                            <div class="leadership_img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="leadership_content">
                                <h5><?php the_title(); ?></h5>
                                <span><?php the_excerpt(); ?></span>
                            </div>
                        </a>
                    </div>
                    <?php wp_reset_postdata();
                endwhile;
            endif;  ?>
        </div>
    </div>
</section>
<section class="strategic_partners_sec">
    <h2><?php the_field('partners_heading'); ?></h2>
    <div class="container">
        <div class="row">
            <?php $args = array('post_type' => 'partner', 'posts_per_page' => 4, 'order' => 'ASC');
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
<?php get_template_part('lets-connect'); ?>

<?php get_footer(); ?>