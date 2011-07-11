<?php
/**
 * Turn site menu into drop down menu
 */

$label = elgg_echo('mytheme:tools');
echo "<a>$label</a>";

echo '<ul class="elgg-menu elgg-menu-tools">';
foreach ($vars['menu']['default'] as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}

echo '</ul>';
