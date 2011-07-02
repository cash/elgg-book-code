<?php

/**
 * New user notification
 *
 * Demonstrates how to use an elgg event
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'new_user_init');

function new_user_init() {
	// we want to be told when a new user is created
	register_elgg_event_handler('create', 'user', 'new_user_notify');
}

/**
 * Send email when a new user registers
 *
 * @param string $event 
 * @param string $object_type
 * @param ElggUser $user
 */
function new_user_notify($event, $object_type, $user) {
	global $CONFIG;

	// do not need notification about manually created users
	if (isadminloggedin()) {
		return;
	}

	// get email address from plugin settings
	$to = get_plugin_setting('email', 'new_user_signup');
	if (!$to) {
		elgg_log("Email address was not set for new user signup plugin");
		return;
	}

	// get site email address
	$site = get_entity($CONFIG->site_guid);
	$site->comment_count = $site->comment_count + 1;
	$from = $site->email;

	$subject = sprintf(elgg_echo('new_user:subject'), $CONFIG->sitename);
	$message = sprintf(elgg_echo('new_user:body'), $user->name, $user->email);

	elgg_send_email($from, $to, $subject, $message);
}
