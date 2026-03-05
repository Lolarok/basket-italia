<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo("charset"); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="site-header"><div class="container"><div class="header-inner">
<a href="<?php echo home_url();?>" class="site-logo"><div class="logo-icon">🏀</div><span><?php bloginfo("name");?></span></a>
<nav id="main-nav"><?php wp_nav_menu(["theme_location"=>"primary","container"=>false]);?></nav>
<button class="btn-primary">📧 Newsletter</button>
</div></div></header>