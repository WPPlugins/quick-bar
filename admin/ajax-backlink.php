<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_action('wp_ajax_ajax_backlink_qbar', 'xyz_qbr_ajax_backlink');

function xyz_qbr_ajax_backlink() {
	global $wpdb;

	if($_POST){
		if (
				! isset( $_POST['_wpnonce'] )
				|| ! wp_verify_nonce( $_POST['_wpnonce'],'backlink' )
		) {
			echo 1;
		//	wp_nonce_ays( 'backlink' );
		
			exit();
		}
		// 	$xyz_cfm_credit=absint($_POST['enable']);
		update_option('xyz_credit_link','qbr');
	}
}

?>
