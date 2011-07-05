<?php
/**
 * CSS for help pages
 *
 * 3 parts:
 * Help object - display single topic
 * Help categories - grid of categories
 * Help topics - list of topics
 * 
 */

?>
/************************* begin help *****************************/

/* Help object */
.help-list, .help-list > li {
	border: none;
}
.help-item {
	margin-bottom: 30px;
}

/* Help categories */
#help-categories li {
	float: left;
	margin: 0 30px 30px 0;
}
#help-categories li a {
	float: left;
	display: block;
	width: 252px;
	padding: 20px;
	border: 1px solid #cccccc;
	background-color: #eeeeee;
}
#help-categories li a:hover {
	text-decoration: none;
	background: none;
}
#help-categories li a span {
	display: block;
	margin-top: 4px;
	color: #4690D6;
}
/**************************** end help ****************************/


#help-categories > li:nth-child(even) {
	margin-right: 0;
}