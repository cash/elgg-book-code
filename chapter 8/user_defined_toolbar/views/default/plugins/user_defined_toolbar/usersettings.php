<?php
/**
 * User settings edit code
 * user selects menu options from a list
 */

// get instructions text
$instructions = elgg_echo('udt:instruct');

// get previously saved settings
$guid = elgg_get_page_owner_guid();
$settings = elgg_get_all_plugin_user_settings($guid, 'user_defined_toolbar');

// setup checkboxes for toolbar options
$checkboxes = '';
$tools = array('blog', 'settings', 'inbox', 'files');
foreach ($tools as $tool) {
	$label = elgg_echo("udt:$tool");
	$input = elgg_view('input/checkbox', array(
		'name' => "params[$tool]",
		'value' => 1,
		'checked' => (bool)$settings[$tool],
	));
	$checkboxes .= "<label>$input$label</label><br />";
}

// output our user settings area
echo "<p>$instructions</p>";
echo "<div>$checkboxes</div>";
