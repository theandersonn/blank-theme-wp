<?php
/**
 * Get a image URL.
 *
 * @package  Odin
 * @param  int     $id      Image ID.
 * @param  int     $width   Image width.
 * @param  int     $height  Image height.
 * @param  boolean $crop    Image crop.
 * @param  boolean $upscale Force the resize.
 *
 * @return string
 */
function odin_get_image_url( $id, $width, $height, $crop = true, $upscale = false ) {
	$resizer    = Odin_Thumbnail_Resizer::get_instance();
	$origin_url = wp_get_attachment_url( $id );
	$url        = $resizer->process( $origin_url, $width, $height, $crop, $upscale );

	if ( $url ) {
		return $url;
	} else {
		return $origin_url;
	}
}

/**
 * Custom post thumbnail.
 *
 * @package  Odin
 * @since  2.2.0
 *
 * @param  int     $width   Width of the image.
 * @param  int     $height  Height of the image.
 * @param  string  $class   Class attribute of the image.
 * @param  string  $alt     Alt attribute of the image.
 * @param  boolean $crop    Image crop.
 * @param  string  $class   Custom HTML classes.
 * @param  boolean $upscale Force the resize.
 *
 * @return string         Return the post thumbnail.
 */
function odin_thumbnail( $width, $height, $alt, $crop = true, $class = '', $upscale = false ) {
	if ( ! class_exists( 'Odin_Thumbnail_Resizer' ) ) {
		return;
	}

	$thumb = get_post_thumbnail_id();

	if ( $thumb ) {
		$image = odin_get_image_url( $thumb, $width, $height, $crop, $upscale );
		$html  = '<img class="wp-image-thumb img-responsive ' . esc_attr( $class ) . '" src="' . esc_url( $image ) . '" width="' . esc_attr( $width ) . '" height="' . esc_attr( $height ) . '" alt="' . esc_attr( $alt ) . '" />';

		return apply_filters( 'odin_thumbnail_html', $html );
	}
}