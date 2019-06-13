<section class="veralon_status">
    <div class="container">
        <div class="row">

            <?php if (have_rows('achievement', 8)) :  while (have_rows('achievement', 8)) : the_row(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="veralon_status_content">
                            <h3><?php the_sub_field('achievement_count', 8); ?></h3>
                            <h4><?php the_sub_field('achievement_label', 8); ?></h4>
                        </div>
                    </div>

                <?php endwhile;
        endif; ?>
        </div>
    </div>
</section>