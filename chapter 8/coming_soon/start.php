<?php
/**
 * Coming soon page
 *
 * Demonstrates how to use a plugin hook
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'coming_soon_init');

function coming_soon_init() {
	// override the front page - we want first try at the front page
	elgg_register_plugin_hook_handler('index', 'system', 'coming_soon_index', 1);

	// register a redirect for every page
	//elgg_register_event_handler('pagesetup', 'system', 'coming_soon_redirect');
}

/**
 * Coming soon front page for visitors
 *
 * @return bool
 */
function coming_soon_index() {

	// logged in users get normal front page
	//if (elgg_is_logged_in()) {
	//	return;
	//}

	$body = elgg_view_layout('coming_soon');

	// use our own page shell
	echo elgg_view_page('', $body, 'coming_soon');

	return true;
}

/**
 * Catch people trying to view other pages and send them to front page
 */
function coming_soon_redirect() {

	$root = elgg_get_site_url();

	// we let through login page, our front page, any css/js page, and
	// any page for a logged in user

	$login_url = $root . 'login';
	if (current_page_url() == $login_url) {
		return;
	}
	if (current_page_url() == $root) {
		return;
	}
	if (strpos(current_page_url(), 'css')) {
		return;
	}
	if (strpos(current_page_url(), 'js')) {
		return;
	}

	// not one of the 3 pages we allow anyone to see so forward
	// if not a logged in user
	if (!isloggedin()) {
		forward();
	}
}