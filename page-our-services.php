<?php
/*
Template Name: Our Services
*/

get_header();

while(have_posts()) :

the_post();

?>

<!-- Banner -->

<section class="page-banner">

<div class="container">

<h1>

<?php the_title(); ?>

</h1>

<p>

Home /

<?php the_title(); ?>

</p>

</div>

</section>

<!-- Services -->

<section class="page-content">

<div class="container">

<div class="section-title">

<p>

WHAT WE OFFER

</p>

<h2>

Our Services

</h2>

</div>

<?php the_content(); ?>

<div class="service-grid">

<div class="service-card">

<h3>

Web Design

</h3>

<p>

Modern responsive website design.

</p>

</div>

<div class="service-card">

<h3>

Web Development

</h3>

<p>

Custom WordPress Development.

</p>

</div>

<div class="service-card">

<h3>

Mobile Development

</h3>

<p>

Android & iOS Applications.

</p>

</div>

<div class="service-card">

<h3>

Digital Marketing

</h3>

<p>

SEO & Social Media Marketing.

</p>

</div>

<div class="service-card">

<h3>

Content Creation

</h3>

<p>

Creative content for your business.

</p>

</div>

<div class="service-card">

<h3>

Support & Maintenance

</h3>

<p>

Website maintenance and support.

</p>

</div>

</div>

</div>

</section>

<?php

endwhile;

get_footer();

?>