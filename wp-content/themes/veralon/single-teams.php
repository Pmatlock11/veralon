<?php get_header(); ?>
<section class="blog_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="blog_banner_content">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php the_excerpt(); ?></h5>
                    <div class="v-card_area">
                        <a href="#">in</a>
                        <a href="#">V-CARD</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="blog_banner_img">
                    <img src="<?php bloginfo('template_url'); ?>/images/blog_banner_img.png" alt="blog_banner_img">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="information_sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <div class="professional_content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;
                endif; ?>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="prosonal_content">
                    <h2><?php the_field('personal_heading'); ?></h2>
                    <?php if (have_rows('personal_info')) :  while (have_rows('personal_info')) : the_row(); ?>
                            <h6><strong><?php the_sub_field('personal_label'); ?></strong> <?php the_sub_field('personal_text'); ?></h6>
                        <?php endwhile;
                endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="video_sec blog_video_sec">
    <div class="container">
        <h2><?php the_field('thought_leadership_heading'); ?></h2>
        <video loop="" controls="">
            <source src="<?php the_field('video_url'); ?>" type="video/mp4">
            <source src="<?php the_field('video_url'); ?>" type="video/ogg">
        </video>
        <div class="veralon_hot_topics">
            <div class="veralon_hot_content">
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
    </div>
</section>
<section class="connect_sec blog_connect_sec">
    <h2><?php the_field('reach_out_heading'); ?></h2>
    <div class="connect_sec_descrip">
        <h6><?php the_field('reach_out_text'); ?></h6>
    </div>
    <a href="<?php the_permalink('16'); ?>" class="cus_button">Connect Now</a>
</section>
<?php get_footer(); ?>