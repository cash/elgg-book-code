<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
body {
	background: #000;
}
.elgg-page {
	background: #6b9bc1;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	width: 800px;
	margin: 0 auto;
	position: relative;
	height: 100px;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	width: 800px;
	margin: 0 auto;
	background-color: white;
	border: 1px solid #666;
	border-radius: 8px;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
}
.elgg-page-body > .elgg-inner {
	margin: 15px;
}
.elgg-layout {
	min-height: 360px;
}
.elgg-sidebar {
	position: relative;
	float: left;
	width: 210px;
	margin-right: 20px;
}
.elgg-main {
	position: relative;
}
.elgg-main > .elgg-head {
	margin-bottom: 15px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	margin-top: 20px;
	background: #000;
	padding-top: 15px;
}
.elgg-page-footer > .elgg-inner {
	position: relative;
	width: 800px;
	margin: 0 auto;
}
.elgg-page-footer a:hover {
	color: #ccc;
}