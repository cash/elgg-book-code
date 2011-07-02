<?php
/**
 * Hello world Plugin
 *
 * Demonstrates how to:
 * 1. create a page in Elgg
 * 2. initialize a plugin
 * 3. use the event system
 * 4. use page handling
 * 5. use elgg_echo() to support multiple languages
 * 6. create views to organize presentation logic
 * 7. add a site menu item and sidebar menu items
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'hello_world_init');

/**
 * Plugin initialization
 */
function hello_world_init() {
	
	elgg_register_page_handler('hello', 'hello_page_handler');

	// add a menu item to primary site navigation
	$item = new ElggMenuItem('hello', 'Hello', 'hello/world');
	elgg_register_menu_item('site', $item);

	// add sidebar menu items that only show up on 'hello' pages
	elgg_register_menu_item('page', array(
		'name' => 'world',
		'text' => 'Hello world',
		'href' => 'hello/world',
		'contexts' => array('hello'),
	));
	elgg_register_menu_item('page', array(
		'name' => 'dolly',
		'text' => 'Hello dolly',
		'href' => 'hello/dolly',
		'contexts' => array('hello'),
	));
}

/**
 * Routes requests to a page script
 *
 * @param array $page An array of URL segments
 * @return bool
 */
function hello_page_handler($page, $identifier) {

	// file path to the page scripts
	$base_path = elgg_get_plugins_path() . 'hello_world/pages';

	// select page based on first URL segment after /hello/
	switch ($page[0]) {
		case 'world':
			require("$base_path/world.php");
			break;
		case 'dolly':
			require("$base_path/dolly.php");
			break;
		default:
			echo "request for $identifier $page[0]";
			break;
	}

	// return true to let Elgg know that a page was sent to browser
	return true;
}
