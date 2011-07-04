<?php
/**
 * Tooltips CSS
 */

$img = 'mod/tooltips/vendors/jquery_tools/graphics/black_arrow.png';
$img = elgg_normalize_url($img);
?>

.tooltip {
	display: none;
	background: transparent url(<?php echo $img; ?>);
	font-size: 12px;
	height: 70px;
	width: 160px;
	padding: 25px;
	color: #fff;
}
