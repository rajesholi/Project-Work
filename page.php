<?php get_header(); ?>

<?php

while(have_posts()) :

the_post();

?>

<!-- Page Banner -->

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

<!-- Page Content -->

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

<?php

if(is_page('about-us')){

echo "WHO WE ARE";

}

elseif(is_page('our-services')){

echo "WHAT WE OFFER";

}

?>

</p>

<h2>

<?php the_title(); ?>

</h2>

<?php the_content(); ?>

<?php

if(is_page('about-us')) :

?>

<div class="mission-grid">

<div class="mission-box">

<h3>

Our Mission

</h3>

<p>

Our mission is to empower businesses
through innovative digital solutions.

</p>

</div>

<div class="mission-box">

<h3>

Our Vision

</h3>

<p>

Our vision is to become a trusted
technology partner worldwide.

</p>

</div>

</div>

<?php endif; ?>

<?php

if(is_page('our-services')) :

?>

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

Custom WordPress development.

</p>

</div>

<div class="service-card">

<h3>

Mobile Apps

</h3>

<p>

Android & iOS applications.

</p>

</div>

<div class="service-card">

<h3>

Digital Marketing

</h3>

<p>

SEO & Online Promotion.

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

Support

</h3>

<p>

Maintenance & technical support.

</p>

</div>

</div>

<?php endif; ?>

</div>

</div>

</section>

<?php

endwhile;

?>

<?php get_footer(); ?>