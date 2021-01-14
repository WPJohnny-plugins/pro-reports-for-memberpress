<?php

// process ajax request
function mepr_pro_report_handler() {

	// check nonce
	check_ajax_referer( 'mepr_pro_report_nonce', 'mepr_pro_report_nonce_confirm' );

	// check user
	if ( ! current_user_can( 'manage_options' ) ) return;

	global $wpdb;

    $time_zone = - (get_option('gmt_offset'));
    $q_products = $wpdb->prepare("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type=%s AND post_status=%s", 'memberpressproduct', 'publish');
    $q_transactions = $wpdb->prepare("SELECT total, product_id, coupon_id, DATE_SUB(created_at, INTERVAL " . $time_zone . " HOUR) created_at, status FROM wp_mepr_transactions WHERE status=%s OR status=%s ORDER BY created_at ASC", 'complete', 'refunded');

    $products = $wpdb->get_results($q_products);
    $transactions = $wpdb->get_results($q_transactions);
    
//    foreach ($transactions as $t) {
        /*if ($t->status == 'refunded') {
            $t->total = - ($t->total);
        }  */
//    }

    echo json_encode([
    	'products' => $products,
    	'transactions' => $transactions
    ]);
	
	wp_die();
}
add_action( 'wp_ajax_admin_hook', 'mepr_pro_report_handler' );