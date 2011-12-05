<?php
/**
 * Help system
 *
 * Demonstrates how to create forms and actions
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'help_init');

/**
 * Initialize the plugin
 */
function help_init() {

	elgg_extend_view('css/elgg', 'help/css');

	// page handler for the help system
	elgg_register_page_handler('help', 'help_page_handler');

	// add menu item for help
	$item = new ElggMenuItem('help', elgg_echo('help'), 'help');
	elgg_register_menu_item('site', $item);
	elgg_register_menu_item('footer', $item);

	elgg_register_admin_menu_item('configure', 'help');
	elgg_register_menu_item('page', array(
		'name' => 'help',
		'text' => elgg_echo('help:admin'),
		'href' => 'help/admin',
		'context' => 'admin',
		'section' => 'configure',
		'priority' => 200,
	));


	// register the save and delete actions for admins only
	$base = elgg_get_plugins_path() . 'help/actions/help';
	elgg_register_action("help/save", "$base/save.php", "admin");
	elgg_register_action("help/delete", "$base/delete.php", "admin");

	// register the help entries for search.
	elgg_register_entity_type("object", "help");

	// make sure our library of PHP functions is available
	$lib = elgg_get_plugins_path() . 'help/lib/help.php';
	elgg_register_library('help', $lib);
	elgg_load_library('help');

	// override default icon to provide special help icon
	elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'help_icon_override');
}

/**
 * Route request to the correct script
 *
 * @param array $page Array of URL segments for routing
 * @return bool
 */
function help_page_handler($page) {

	$pages_dir = elgg_get_plugins_path() . 'help/pages/help';

	if (count($page) == 0) {
		$page[0] = 'index';
	}

	switch ($page[0]) {
		// help/admin
		case 'admin':
			require "$pages_dir/admin.php";
			break;
		// help/edit/<guid>
		case 'edit':
			set_input('guid', (int)$page[1]);
			require "$pages_dir/admin.php";
			break;
		// help/category/<category>
		case 'category':
			set_input('category', $page[1]);
			require "$pages_dir/category.php";
			break;
		// index page or unknown requests
		case 'index':
			require "$pages_dir/index.php";
			break;
		// unrecognized help page so we don't handle it
		default:
			return false;
			break;
	}

	return true;
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
