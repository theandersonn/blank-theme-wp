<?php
/*--------------------------------------------------------------
	Exibe Posts Populares
--------------------------------------------------------------*/
function wpb_set_post_views( $postID ) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta( $postID, $count_key, true );

    if( $count=='' ){
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    }else{
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
}
// To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Origin: http://www.wpbeginner.com/wp-tutorials/how-to-track-popular-posts-by-views-in-wordpress-without-a-plugin/

// INSERT LOOP WORDPRESS

//<?php
    //$popularPost = new WP_Query(
        //array(
            //'category_name' => 'nome-categoria',
            //'posts_per_page' => '3',
            //'meta_key' => 'wpb_post_views_count',
            //'orderby' => 'meta_value_num',
            //'order' => 'DESC'
        //)
    //);
//?>

<?php //while ( $popularPost->have_posts() ) : $popularPost->the_post(); ?>
    <!-- content -->
<?php //endwhile; wp_reset_postdata(); ?>

<!-- INSERT LOOP WORDPRESS -->

<?php //btwp_set_post_views(get_the_ID()); ?>
