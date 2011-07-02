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
$options = array('internalname' => 'params[release_date]',
				 'value' => $release_date
				);
echo elgg_view('input/datepicker', $options);
