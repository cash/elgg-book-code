<?php
/**
 * Include javascript and CSS for lightbox
 */

$url     = "{$vars['url']}mod/profile_lightbox/vendors";
$js_url  = "$url/js/jquery.lightbox-0.5.min.js";
$css_url = "$url/css/jquery.lightbox-0.5.css";
?>
<script type="text/javascript" src="<?php echo $js_url; ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $css_url; ?>" media="screen" />

