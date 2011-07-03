<?php
/**
 * Tip view - it is added to the sidebar
 */

$title = elgg_echo('sidebar_tip:title');
$text = sidebar_tip_get_tip();
echo elgg_view_module('aside', $title, $text);
