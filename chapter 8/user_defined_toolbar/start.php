<?php
/**
 * User defined toolbar
 *
 * Demonstrates how to use user settings
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'user_toolbar_init');

function user_toolbar_init() {
	// add our css
	elgg_extend_view('css/elgg', 'user_defined_toolbar/css');

	// add our menu into the header
	elgg_extend_view('page/elements/header', 'user_defined_toolbar/toolbar');
}
