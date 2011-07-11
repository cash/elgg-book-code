<?php
/**
 * Demonstration theme
 */

/*
 * Colors:
 *  #6b9bc1 - medium blue background
 *  #7EB7E4 - light blue
 */


/*******************************************************************************

Base CSS
 * CSS reset
 * core
 * helpers (moved to end to have a higher priority)
 * grid

*******************************************************************************/
echo elgg_view('css/elements/reset', $vars);
echo elgg_view('css/elements/core', $vars);
echo elgg_view('css/elements/grid', $vars);


/*******************************************************************************

Skin CSS
 * typography     - fonts, line spacing
 * forms          - forms, inputs
 * buttons        - action, cancel, delete, submit, dropdown, special
 * navigation     - menus, breadcrumbs, pagination
 * icons          - icons, sprites, graphics
 * modules        - modules, widgets
 * layout_objects - lists, content blocks, notifications, avatars
 * layout         - page layout
 * misc           - to be removed/redone

*******************************************************************************/
echo elgg_view('css/elements/typography', $vars);
echo elgg_view('css/elements/forms', $vars);
echo elgg_view('css/elements/buttons', $vars);
echo elgg_view('css/elements/icons', $vars);
echo elgg_view('css/elements/navigation', $vars);
echo elgg_view('css/elements/modules', $vars);
echo elgg_view('css/elements/components', $vars);
echo elgg_view('css/elements/layout', $vars);
echo elgg_view('css/elements/misc', $vars);


// included last to have higher priority
echo elgg_view('css/elements/helpers', $vars);

?>
.elgg-page-footer .elgg-icon-report-this {
	background: none;
}
