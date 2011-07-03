<?php
/**
 * Widget edit code
 * User selects how many links to display in widget
 */

// set default value
if (!isset($vars['entity']->num_links)) {
	$vars['entity']->num_links = 5;
}

// when Elgg handles the saving, names need to be params[<var name>] as below
$params = array(
	'name' => 'params[num_links]',
	'value' => $vars['entity']->num_links,
	'options' => array(1, 2, 3, 5),
);
$dropdown = elgg_view('input/dropdown', $params);

?>
<div>
	<?php echo elgg_echo('welcome:num_links'); ?>:
	<?php echo $dropdown; ?>
</div>
