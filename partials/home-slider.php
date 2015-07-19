<div id="owl-single" class="owl-carousel owl-theme">
    <?php
        $slider = new WP_query(
            array(
                'category_name' => 'slider',
                'posts_per_page' => 3
            )
        );
            while( $slider->have_posts() ) : $slider->the_post();
     ?>
                <div class="item">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endwhile; ?>
</div>
