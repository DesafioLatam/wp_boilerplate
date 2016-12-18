<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>" dir="ltr">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0" />
	<title><?php bloginfo('name') ?></title>
	<?php wp_head() ?>
	<?php get_template_part('_includes/iOS', 'icons') ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>