<?php
/**
 * Welcome widget
 *
 * Demonstrates how to create a widget
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'welcome_widget_init');

function welcome_widget_init() {
	$title = elgg_echo('welcome');
	$description = elgg_echo('welcome:widget:description');
	elgg_register_widget_type('welcome', $title, $description);
}
