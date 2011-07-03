<?php
/**
 * Custom logo
 *
 * Demonstrates how to override a view and extend Elgg's CSS file
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'custom_logo_init');

/**
 * Extend the css
 */
function custom_logo_init() {
	elgg_extend_view('css/elgg', 'custom_logo/css');
}
