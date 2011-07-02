<?php
/**
 * Widget edit code
 * User selects how many links to display in widget
 */


// get value set by user or use default
$num_links = 5;
if (isset($vars['entity']->num_links)) {
	$num_links = $vars['entity']->num_links;
}

// label
echo elgg_echo('welcome:num_links') . ": ";

// the options array has label => value for the drop down field
$options = array(	'1' => '1',
					'2' => '2',
					'3' => '3',
					'5' => '5',
				);

// when Elgg handles the saving, names need to be params[<var name>] as below
echo elgg_view('input/pulldown', array(	'internalname' => 'params[num_links]',
										'options_values' => $options,
										'value' => $num_links
				));
