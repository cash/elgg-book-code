<?php

/**
 * Custom header
 *
 * Demonstrates how to override a view
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'custom_header_init');

/**
 * Extend the css
 */
function custom_header_init() {
	elgg_extend_view('css', 'custom_header/css');
}
