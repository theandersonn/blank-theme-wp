<!-- SLIDER -->
<ul class="owl-carousel">
    <?php
        $slider = new WP_query(
            array(
                'post_type' => 'slider',
                'taxonomy' => 'slider-categoria',
                'term' => 'slider-home', // Crie a Categoria Slider Home
                'posts_per_page' => -1
            )
        );
            if( $slider->have_posts() ) : while( $slider->have_posts() ) : $slider->the_post();
     ?>
                <li class="item">
                    <?php the_post_thumbnail(); ?>
                </li>
            <?php endwhile; endif; wp_reset_postdata(); ?>
</ul>
