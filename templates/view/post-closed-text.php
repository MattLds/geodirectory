<?php
/**
 * Template for the list of places
 *
 * This is used mostly on the listing (category) pages and outputs the actual grid or list of listings.
 * See the link below for info on how to replace the template in your theme.
 *
 * @link http://docs.wpgeodirectory.com/customizing-geodirectory-templates/
 * @since 1.0.0
 * @package GeoDirectory
 * @global object $wpdb WordPress Database object.
 * @global object $post The current post object.
 * @global object $wp_query WordPress Query object.
 */
 ?>

<div class="gd-notification gd-has-closed">
	<i class="fa fa-exclamation-circle"></i> 
	<?php echo wp_sprintf( __( 'This %s appears to have closed down and may be removed soon.', 'geodirectory' ), $cpt_name ); ?>
</div>
