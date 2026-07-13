<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

<div class="container">

<div class="logo">

<?php

if(has_custom_logo()){

the_custom_logo();

}else{

?>

<h2>

<a href="<?php echo esc_url(home_url('/')); ?>">

<?php bloginfo('name'); ?>

</a>

</h2>

<?php

}

?>

</div>

<nav class="main-menu">

<?php

wp_nav_menu(array(

'theme_location'=>'primary_menu',

'container'=>false

));

?>

</nav>

</div>

</header>