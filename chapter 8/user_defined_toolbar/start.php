<?php

/**
 * User defined toolbar
 *
 * Demonstrates how to use user settings
 *
 * Note: this plugin depends on the custom_header for its CSS. If you
 * want to use both a custom header with menu and a personal toolbar,
 * you would want to put the personal toolbar somewhere else. For example
 * you can add a dropdown menu to the topbar. Another option is using the
 * tabbed menu that comes with the default theme and the personal toolbar
 * as it is. There are many options so experiment.
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'user_toolbar_init');

function user_toolbar_init() {
	// here is where we could extend the css view if we needed to
}
