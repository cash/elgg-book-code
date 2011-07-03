<?php
/**
 * Sidebar tips
 *
 * Demonstrates how to extend a view
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'sidebar_tip_init');

/**
 * Initialize the plugin
 */
function sidebar_tip_init() {
	// Our sidebar_tip/tip view is added to the page/elements/sidebar view
	elgg_extend_view('page/elements/sidebar', 'sidebar_tip/tip');
}

/**
 * Get a random tip (tips are in the language file)
 */
function sidebar_tip_get_tip() {
	$num_tips = 4;

	$select = rand(1, $num_tips);
	return elgg_echo("sidebar_tip:tip$select");
}