<!-- SLIDER -->
<div id="owl-single" class="owl-carousel owl-theme">
    <?php
        $slider = new WP_query(
            array(
                'post_type' => 'slider',
                'term' => 'slider-home', // Crie a Categoria Slider Home
                'posts_per_page' => -1
            )
        );
            while( $slider->have_posts() ) : $slider->the_post();
     ?>
                <div class="item">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endwhile; ?>
</div>
