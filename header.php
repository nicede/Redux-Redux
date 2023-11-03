<!DOCTYPE HTML>
<html>

<head>
    <title><?php bloginfo('title') ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<div id="wrapper">

<?php if ( get_header_image() ) : ?>
    <header id="title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
    </header>
<?php else: ?>
<header id="title">
    <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('title') ?></a></h1>
</header>
<?php endif; ?>

<section id="content">