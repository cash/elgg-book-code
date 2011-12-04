<?php
/**
 * CSS view for user defined toolbar - added to main CSS view
 *
 */
?>

/********************** begin user defined toolbar **********************/
/* Site name */
.elgg-page-header h1 {
	float: left;
}
/* Toolbar */
.udt-toolbar {
	position: absolute;
	top: 25px;
	right: 0;
}
.udt-toolbar li {
	display: inline-block;
	margin-left: 10px;
}
.udt-toolbar li a {
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	color: #eeeeee;
	padding: 4px 10px;
	border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	text-decoration: none;
}
.udt-toolbar li a:hover {
	color: #ffffff;
	background-color: #0054A7;
	text-decoration: none;
}
/**************** end user defined toolbar *************************/
