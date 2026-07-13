<?php
/*
Template Name: About Us
*/

get_header();

while ( have_posts() ) :
the_post();
?>
<!-- Banner -->
<section class="page-banner">

<img src="<?php the_field('banner_image'); ?>">

<h1><?php the_title(); ?></h1>

</section>

<section>

<?php the_content(); ?>

</section>

<?php get_footer(); ?>


<!-- About -->
<section class="page-content">

<div class="container content-grid"> 

<div class="page-image">

<?php

if(has_post_thumbnail()){

the_post_thumbnail('large');

}

?>

</div>

<div class="page-text">

<p class="small-title">

WHO WE ARE

</p>

<h2> 

We Are Passionate About Building Solutions

</h2>

<?php the_content(); ?>

<div class="mission-grid">

<div class="mission-box">

<h3>

Our Mission

</h3>

<p>

Our mission is to empower businesses with
innovative digital solutions.

</p>

</div>

<div class="mission-box">

<h3>

Our Vision

</h3>

<p>

Our vision is to become a trusted technology
partner around the world.

</p>

</div>

</div>

</div>

</div>

</section>

<?php

endwhile;

get_footer();

?>