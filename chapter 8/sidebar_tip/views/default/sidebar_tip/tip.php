<?php
/**
 * Tip view - it is added to the sidebar
 *
 * We use the aside module so that we get the standard HTML/CSS used for
 * sidebar boxes. The function sidebar_tip_get_tip() is defined in our
 * start.php file.
 */

$title = elgg_echo('sidebar_tip:title');
$text = sidebar_tip_get_tip();
echo elgg_view_module('aside', $title, $text);
