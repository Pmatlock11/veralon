<?php get_header(); ?>
<?php $home_bg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="new_banner" style="background:#ccc url('<?php echo $home_bg_img[0]; ?>'); background-size:cover; "></div>

<?php get_template_part('achievements'); ?>

<section class="solving_prob_sec">
    <div class="container">
        <div class="solving_prob_sec_content">
            <h2><?php the_title(); ?></h2>
            <div class="solving_prob_sec_description">
                <h6><?php the_content(); ?></h6>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('lets-connect'); ?>

<?php get_footer(); ?>