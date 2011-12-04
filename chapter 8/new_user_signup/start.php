<?php
/**
 * New user notification
 *
 * Demonstrates how to use an elgg event
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'new_user_init');

function new_user_init() {
	// we want to be told when a new user is created
	elgg_register_event_handler('create', 'user', 'new_user_notify');
}

/**
 * Send email when a new user registers
 *
 * @param string   $event The event name
 * @param string   $type  The event type
 * @param ElggUser $user  The user that just registered
 * @return void
 */
function new_user_notify($event, $type, $user) {

	// do not need notification about manually created users
	if (elgg_is_admin_logged_in()) {
		return;
	}

	// put my address here
	$to = "me@example.org";

	// get site email address for the from address
	$site = elgg_get_site_entity();
	$from = $site->email;

	$name = $user->name;
	$username = $user->username;

	$subject = elgg_echo('new_user:subject', array($site->name));
	$message = elgg_echo('new_user:body', array($name, $username));

	elgg_send_email($from, $to, $subject, $message);
}
