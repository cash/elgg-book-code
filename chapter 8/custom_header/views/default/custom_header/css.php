<?php
/**
 * CSS view for custom header - added to main CSS view
 *
 */
?>
/********************** begin custom header **********************/
/* Site name */
#elgg_header_contents h1 {
	float: left;
	display: block;
}
/* Site menu */
#custom_menu {
	float: left;
	position: relative;
	margin: 25px 0 0 50px;
}
#custom_menu li {
	float: left;
	margin-right: 10px;
}
#custom_menu li a {
	display: block;
	color: #eeeeee;
	padding: 4px 10px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	font-size: 1.1em;
	font-weight: bold;
}
#custom_menu li a:hover {
	color: #ffffff;
	background-color: #0054A7;
	text-decoration: none;
}
/**************** end custom header *************************/