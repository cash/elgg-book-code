<?php

/**
 * Profile photo lightbox
 *
 * Demonstrates how to use an external javascript library
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'profile_lightbox_init');

function profile_lightbox_init() {
	register_elgg_event_handler('pagesetup', 'system', 'profile_lightbox_add_js');
}

/**
 * Add links to html head for including javascript
 */
function profile_lightbox_add_js() {
	// only include the javascript on profile pages
	if (get_context() == 'profile') {
		// the metatags view is in the head of the html page
		elgg_extend_view('metatags', 'profile_lightbox/includes');
	}
}
