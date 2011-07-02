<?php
/**
 * Coming soon pageshell
 * We need this so that we control all aspects of the page. Otherwise, Elgg
 * would add its normal header and footer to the coming soon page.
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");

// hardcode title to site name
$title = $vars['config']->sitename;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title; ?></title>
	<!-- favicon is pulled from this plugin -->
	<link rel="SHORTCUT ICON" href="<?php echo $vars['url']; ?>mod/coming_soon/graphics/favicon.ico" />

	<!-- include the default css file -->
	<link rel="stylesheet" href="<?php echo $vars['url']; ?>_css/css.css?lastcache=<?php echo $vars['config']->lastcache; ?>&amp;viewtype=<?php echo $vars['view']; ?>" type="text/css" />

</head>

<body id="coming_bg">
<?php
echo $vars['body'];

$country = 'Andorra';
$link = "<a href='http://wikipedia.org/wiki/$county'>$country</a>";
$text = str_replace($country, $link, $text);

?>
</body>
</html>