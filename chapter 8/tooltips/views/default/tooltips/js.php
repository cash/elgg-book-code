<?php
/**
 * Extend the main elgg.js script for tooltips initialization
 */
?>

elgg.provide('elgg.tooltips');

elgg.tooltips.init = function() {
	$("acronym[title]").tooltip();
}

elgg.register_hook_handler('init', 'system', elgg.tooltips.init);
