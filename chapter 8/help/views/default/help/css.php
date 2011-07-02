<?php
/**
 * CSS for help pages
 *
 * 3 parts:
 * Help object - display single topic
 * Help categories - grid of categories
 * Help topics - list of topics
 */
?>

.tooltip {
	display:none;
	background:transparent url(http://elgg18.costellofamily.org/mod/profile_lightbox/black_arrow.png);
	font-size:12px;
	height:70px;
	width:160px;
	padding:25px;
	color:#fff;
}

/************************* begin help *****************************/
/* Help object */
.help_item {
	margin-bottom: 30px;
}

/* Help categories */
#help_categories li {
	float: left;
	margin: 0 30px 30px 0;
}

#help_categories li a {
	float: left;
	display: block;
	width: 250px;
	padding: 20px;
	border: 1px solid #cccccc;
	background-color: #eeeeee;
}

#help_categories li a:hover {
	text-decoration: none;
	background: none;
}

#help_categories li a span {
	display: block;
	margin-top: 4px;
	color: #4690D6;
}

/* Help topics */
#help_topics {
	padding: 15px;
	margin-bottom: 20px;
	background: #eeeeee;
}

#help_topics h2 {
	border: none;
}

/**************************** end help ****************************/