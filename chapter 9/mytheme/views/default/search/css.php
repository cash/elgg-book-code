<?php
/**
 * Elgg Search css
 *
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-sidebar .elgg-search {
	margin-bottom: 15px;
}
.elgg-page-header .elgg-search input[type=text] {
	width: 230px;
}
.elgg-sidebar .elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

	border: 1px solid #ddd;
	color: #999;
	font-size: 12px;
	font-weight: bold;
	padding: 2px 4px 2px 26px;
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 2px -700px;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
