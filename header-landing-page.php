<?php tha_html_before(); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html><!--<![endif]-->
	<head>
		<?php tha_head_top(); ?>
		<title><?php wp_title( '| ', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>		
	</head>

	<body <?php language_attributes(); ?> <?php body_class(); ?>>
		<?php tha_body_top(); ?>

		<div class="in">