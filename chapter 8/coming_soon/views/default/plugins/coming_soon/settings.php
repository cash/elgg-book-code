<?php
/**
 * Plugin settings
 */

// if user has not set date, show today on calendar
$release_date = time();
if (isset($vars['entity']->release_date)) {
	$release_date = $vars['entity']->release_date;
}

// add a date picker
$options = array(
	'name' => 'params[release_date]',
	 'value' => $release_date,
	'timestamp' => true,
);
echo elgg_view('input/date', $options);
