<?php

/**
 * Welcome widget
 *
 * Demonstrates how to create a widget
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'welcome_widget_init');

function welcome_widget_init() {
	add_widget_type('welcome', elgg_echo("welcome"), elgg_echo("welcome:widget:description"));
}
