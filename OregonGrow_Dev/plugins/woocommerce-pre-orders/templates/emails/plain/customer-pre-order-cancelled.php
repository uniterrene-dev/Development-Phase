<?php
/**
 * WooCommerce Pre-Orders
 *
 * @package     WC_Pre_Orders/Templates/Email
 * @author      WooThemes
 * @copyright   Copyright (c) 2013, WooThemes
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

/**
 * Customer pre-order cancelled notification email
 *
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

echo $email_heading . "\n\n";

echo __( 'Your pre-order has been cancelled. Your order details are shown below for your reference.', 'wc-pre-orders' ) . "\n\n";

if ( $message ) :

echo "----------\n\n";
echo wptexturize( $message ) . "\n\n";
echo "----------\n\n";

endif;

echo "****************************************************\n\n";

do_action( 'woocommerce_email_before_order_table', $order, false, $plain_text );

echo sprintf( __( 'Order number: %s', 'wc-pre-orders' ), $order->get_order_number() ) . "\n";
echo sprintf( __( 'Order date: %s', 'wc-pre-orders' ), date_i18n( wc_date_format(), strtotime( $order->order_date ) ) ) . "\n";

do_action( 'woocommerce_email_order_meta', $order, false, $plain_text );

echo "\n" . $order->email_order_items_table( array( 'plain_text' => true ) );

echo "----------\n\n";

if ( $totals = $order->get_order_item_totals() ) {
	foreach ( $totals as $total ) {
		echo $total['label'] . "\t " . $total['value'] . "\n";
	}
}

echo "\n****************************************************\n\n";

do_action( 'woocommerce_email_after_order_table', $order, false, $plain_text );

echo __( 'Your details', 'wc-pre-orders' ) . "\n\n";

if ( $order->billing_email )
	echo __( 'Email:', 'wc-pre-orders' ); echo $order->billing_email. "\n";

if ( $order->billing_phone )
	echo __( 'Tel:', 'wc-pre-orders' ); ?> <?php echo $order->billing_phone. "\n";

wc_get_template( 'emails/plain/email-addresses.php', array( 'order' => $order ) );

echo "\n****************************************************\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
