<?php get_header(); ?>

<section class="hero">

<?php
$image = get_field('hero_bg');
?>

<div class="hero-overlay"></div>

<?php if($image): ?>

<div class="hero-image">

<img src="<?php echo esc_url($image['url']); ?>">

</div>

<?php endif; ?>

<div class="container hero-content">

<p>

<?php the_field('hero_subtitle'); ?>

</p>

<h1>

<?php the_field('hero_title'); ?>

</h1>

<p>

<?php the_field('hero_description'); ?>

</p>

<?php

$link = get_field('hero_button_link');

if($link):

?>

<a href="<?php echo esc_url($link['url']); ?>">

<?php echo esc_html($link['title']); ?>

</a>

<?php endif; ?>

</div>

</section>

<!-- Statistics -->

<section class="stats">

<div class="container stats-grid">

<div class="stat">

<h2>50+</h2>

<p>Happy Clients</p>

</div>

<div class="stat">

<h2>120+</h2>

<p>Projects Completed</p>

</div>

<div class="stat">

<h2>10+</h2>

<p>Awards</p>

</div>

<div class="stat">

<h2>5+</h2>

<p>Years Experience</p>

</div>

</div>

</section>

<?php get_footer(); ?>