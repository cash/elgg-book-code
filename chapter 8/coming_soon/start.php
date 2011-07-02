<?php

/**
 * Coming soon page
 *
 * Demonstrates how to use a plugin hook
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'coming_soon_init');

function coming_soon_init() {
	// override the front page - we want first try at the front page
	register_plugin_hook('index', 'system', 'coming_soon_index', 1);

	// register a redirect for every page
	register_elgg_event_handler('pagesetup', 'system', 'coming_soon_redirect');

	// add a special login page
	register_page_handler('login', 'coming_soon_login');

	// add our css
	elgg_extend_view('css', 'coming_soon/css');
}

/**
 * Coming soon front page for visitors
 *
 * @return boolean
 */
function coming_soon_index() {

	// logged in users get normal front page
	if (isloggedin()) {
		return;
	}

	// for non-logged in users
	require dirname(__FILE__) . "/index.php";

	// exit so no other plugins can add html
	exit;
}

/**
 * Login page for admins
 *
 * @returns boolean
 */
function coming_soon_login() {
	require dirname(__FILE__) . "/login.php";
	return TRUE;
}

/**
 * Catch people trying to view other pages and send them to front page
 */
function coming_soon_redirect() {
	global $CONFIG;

	// we let through login page, front page, css and
	// any page for a logged in user

	$login_url = $CONFIG->wwwroot . 'pg/login/';
	if (current_page_url() == $login_url) {
		return;
	}
	if (current_page_url() == $CONFIG->wwwroot) {
		return;
	}
	if (strpos(current_page_url(), 'css')) {
		return;
	}

	// not one of the 3 pages we allow anyone to see so forward
	// if not a logged in user
	if (!isloggedin()) {
		forward();
	}
}