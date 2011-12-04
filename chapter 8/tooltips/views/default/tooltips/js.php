<?php
/**
 * Extend the main elgg.js script for tooltips initialization
 */
?>

elgg.provide('elgg.tooltips');

elgg.tooltips.init = function() {
	// only apply this to acronym tags
	$("acronym[title]").tooltip();
}

elgg.register_hook_handler('init', 'system', elgg.tooltips.init);
