<?php

/**
 * Help system
 *
 * Demonstrates how to create forms and actions
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'help_init');

/**
 * Initialize the plugin
 */
function help_init() {
	global $CONFIG;
	
	// does not work right now due to external/site pages
	//elgg_extend_view('footer/links', 'help/footer');
	elgg_extend_view('css', 'help/css');

	// page handler for the help system
	register_page_handler('help', 'help_page_handler');

	// add menu item for help
	add_menu(elgg_echo('help'), $CONFIG->wwwroot . "pg/help/");

	// register for pagesetup so we can add sidebar menu
	register_elgg_event_handler('pagesetup', 'system', 'help_adminmenu');

	// register the save and delete actions for admins only
	register_action("help/save", FALSE, $CONFIG->pluginspath . "help/actions/save.php", TRUE);
	register_action("help/delete", FALSE, $CONFIG->pluginspath . "help/actions/delete.php", TRUE);

	// Register for search.
	register_entity_type('object', 'help');

	// override default icon to provide special help icon
	register_plugin_hook('entity:icon:url', 'object', 'help_icon_override');
}

/**
 * Route request to the correct script
 *
 * @param array $page
 * @return bool
 */
function help_page_handler($page) {

	$pages_dir = dirname(__FILE__) . '/pages';

	// main help page: pg/help/
	if (count($page) == 0) {
		require "$pages_dir/index.php";
		return TRUE;
	}

	// other pages
	switch ($page[0]) {
		// pg/help/admin
		case 'admin':
			require "$pages_dir/admin.php";
			break;
		// pg/help/topic/<category>
		case 'topic':
			set_input('category', $page[1]);
			require "$pages_dir/topic.php";
			break;
		default:
			// unknown help page so we send to index
			require "$pages_dir/index.php";
			break;
	}

	return TRUE;
}

/**
 * Add admin sidebar menu item
 */
function help_adminmenu() {
	global $CONFIG;
	
	if (get_context() == 'admin') {
		add_submenu_item(elgg_echo('help:admin'), $CONFIG->wwwroot . 'pg/help/admin/');
	}
}

/**
 * @todo - Elgg's search does not support specifying icon at moment
 * @param <type> $hook
 * @param <type> $entity_type
 * @param <type> $returnvalue
 * @param <type> $params
 * @return <type>
 */
function help_icon_override($hook, $entity_type, $returnvalue, $params) {
	if ($returnvalue) {
		return;
	}

	if ($params['entity']->subtype == 'help'){

	}
}

/**
 * Get an array of categories.
 *
 * Array is of the form code => title
 *
 * @return array
 */
function help_get_categories() {
	$codes = array('getting_started',
					'blogging',
					'bookmarks',
					'thewire',
					'profile',
					'settings',
					);
	$categories = array();
	foreach ($codes as $code) {
		$categories[$code] = elgg_echo("help:title:$code");
	}
	
	return $categories;
}