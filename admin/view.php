<?php // MyPlugin - Settings Page


/**
 * exit if file is called directly
 */

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


/**
 * Main report page
 */
function mepr_pro_report_view() {
	
	/**
	 * check if user is allowed access
	 */
	if ( ! current_user_can( 'manage_options' ) ) return;
	
	?>
	
	<div class="wrap">
		<h2>
			<?php echo esc_html( get_admin_page_title() ); ?>
		</h2>
		<div id="mepr_pro_report_board">
			<div id="mepr_pro_report_loading">loading ...</div>
			<div class="box-right">
				<div id="mepr_pro_report_date_filter">
					<i class="dashicons dashicons-calendar-alt"></i>
					<span></span>
					<i class="dashicons dashicons-arrow-down-alt2"></i>
				</div>
			</div>
			<div class="mepr_pro_report_box">
				<div id="mepr_pro_report_product_filter">
				</div>
			</div>
			<div class="mepr_pro_report_box">
				<!-- <div class="text-right">
					<select id="mepr_pro_report_chart_options">
						<option value="daily">Daily</option>
						<option value="weekly">Weekly</option>
						<option value="monthly">Monthly</option>
					</select>
				</div> -->
				<div id="item_price_total">$0</div>
				<div id="mepr_pro_report_chart">
					<div id="mepr_pro_report_chart_tooltip" class="hidden">
				    	<div><strong class="product_title"></strong></div>
				    	<div>$<span class="product_sale"></span></div>
				  	</div>
				</div>
			</div>
			<div class="mepr_pro_report_box">
				<div id="mepr_pro_report_sales">
					<table class="striped">
						<thead>
							<th style="background-color: transparent;">&nbsp;</th>
							<th>Product Name</th>
							<th>Quantity Sold</th>
							<th>Coupon Used</th>
                            <th>Refund</th>
                            <th>Total</th>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<?php
}


