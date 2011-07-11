<?php
/**
 * Theme initialiation
 */

elgg_register_event_handler('init', 'system', 'mytheme_init');

function mytheme_init() {
	// tools menu
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'mytheme_menu_setup');

	// search box in sidebar
	elgg_unextend_view('page/elements/header', 'search/search_box');
	elgg_extend_view('page/elements/sidebar', 'search/search_box', 100);
}

function mytheme_menu_setup($hook, $type, $values) {
	$site_menu = elgg_view_menu('site');

	$item = new ElggMenuItem('tools', $site_menu, false);
	$item->setWeight(1000);
	$values[] = $item;

	return $values;
}
