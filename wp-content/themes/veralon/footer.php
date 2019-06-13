<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                <div class="footer_links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => ''
                    ));
                    ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="address">
                    <p><?php the_field('full_address', 'option'); ?></p>
                </div>
                <div class="footer_social_icons">
                    <?php if (have_rows('social', 'option')) :  while (have_rows('social', 'option')) : the_row(); ?>
                            <a href="<?php the_sub_field('social_url', 'option'); ?>"><i class="<?php the_sub_field('social_name', 'option'); ?>" aria-hidden="true"></i></a>
                        <?php endwhile;
                endif; ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="footer_logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="copyright">
                    <p><?php the_field('copyright_text', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/jquery3.3.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/all.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
	$('.post_tags a').click(function(e){
		e.preventDefault();		
	});
</script>
</body>

</html>