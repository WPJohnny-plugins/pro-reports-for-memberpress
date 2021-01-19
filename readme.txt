  
=== Pro Reports for MemberPress ===
Contributors: treeflips, zeroneit
Donate link: https://www.paypal.me/wpjohnny
Tags: memberpress, reports, membership, addon
Requires at least: 4.9
Requires PHP: 7.2
Tested up to: 5.6
Stable tag: 0.1.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Show MemberPress reports with more detail. More date-ranges, and individual product details (quantity, total, coupons-used).

== Description ==

This plugin shows more useful data than the built-in MemberPress reports. You can see how many of each membership/product sold, etc. Currently, the built-in MemberPress reports spends too much time on transaction-related info like “completed, pending, failed, refunded”. Those are nice to have in terms of transactional data, but not helpful in terms of product sales data.

I got sick of waiting around for MemberPress to update their official reports function. I’ve asked for certain features and laid them out nicely for 2 years, even spoke to some of their devs but they never got around to it. I think they’re too busy doing integrations and what not so I built my own reports plugin.

It will be free for now, but might charge one day to recoup development costs and also improve it. We're open to suggestions if you're interested in a pro version.

== Features ==

* More available date ranges – default MemberPress reports only shows Month, Year, All-Time. This plugin allows Yesterday, Today, Last 7 Days, Last 30 days, This Month, This Year, Last 364 Days, Last Year, All Time, and Custom Date Range.
* Visual proportion – bar charts show proportion of sales for each product.
* Filter products – can filter/choose which products to show on sales charts.
* Product breakdowns – see quantities sold, coupons used, refunds, and total sales by each product.
* Match website timezone - the built-in MemberPress reports shows data in UTC timezone which can be frustrating if it doesn't match your website's timezone. My plugin conveniently shows report data in the same timezone as your site. This does NOT change the actual stored data, it only just changes what you see in reports.

== Installation ==

1. Install easily from your dashboard Add Plugins page or manually download the plugin and upload the extracted archived to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. From your Dashboard, go to the sidebar MemberPress menu and click on "Pro Reports".

== Frequently Asked Questions ==

= Does this plugin work with newest WP version and also older versions? =
Yes, this plugin works perfect with the latest version of WordPress! It also works with older versions as well but you should always run the latest WordPress and PHP version for best security and performance. This plugin is used in my critical sites so you can be assured it works perfect.

= Will this plugin slow down my site? =
No. Nothing is loaded in the frontend. I'm an absolute speed fanatic.

= Do you plan to add more features or improve the visual styling? =
Not unless someone wanted to pay for my development time and costs. This was our own custom-developed inhouse plugin and now released to the community. 

== Screenshots ==
1. Quick view of how it looks. (New version looks even better; will update screenshot soon.)


== Changelog ==

= 0.1.6 =
- CSS styling updates to look prettier. ;)
- Remove unnecessary FontAwesome call from date-range filter.
- Add plugin version variable to CSS call for cache-busting.

= 0.1.5 =
- Issue Fix: 0 transactions validation added in main javascript file.
- Issue Fix: $wpdb->prefix is added with MemberPress transaction db table.

= 0.1.4 =

- Chart now shows total refunds for the period.
- Sales data now shows a refund column (for refunds made during the period).
- Previously, refunds were (incorrectly) subtracted from the total but that behavior is now removed since MemberPress refunds simply cancel out the initial payment. There is no minus transaction.
- New "ALL TIME" option available in the date range dropdown (shows all transactions). If selected date range extends beyond 365 days, the graph will show report data by year.

= 0.1.3 =

- Refunded transactions are calculated in report now.
- Resolved issue where some transactions weren't showing in reports based on WP Settings > General > Timezone.
- Updated to show plugin compatibility for latest WP version.

= 0.1.2 =

Updated correct contributor name.

= 0.1.1 =

* Initial Release
