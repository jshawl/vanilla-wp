<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name');?></title>
		<link href='<?php bloginfo('stylesheet_url');?>'/>
	<?php wp_head();?>
	</head>
<body>
	<nav>
		<?php wp_list_pages(array('title_li' => __('Menu'))); ?>
	</nav>

