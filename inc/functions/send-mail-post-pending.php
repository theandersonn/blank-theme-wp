<?php

    add_action( 'save_post', 'send_mail_post_pending', 10, 2 );

    function send_mail_post_pending( $post_id, $post ) {
        $post_status = get_post_status( $post );

        if( $post_status === 'pending' && ! wp_is_post_revision( $post ) ) {

            $email    = get_option( 'admin_email' );
            $subject  = 'Revisar post no blog XYZ - ' . get_the_title( $post );
            $message .= 'O blog do XYZ tem 1 novo post para revisar.' . "\n\n";
            $message .= 'Título: ' . get_the_title( $post ) . "\n\n";
            $message .= 'Link: ' . admin_url( "post.php?post={$post_id}&action=edit" );

            wp_mail( $email, $subject, $message );
        }

    }
