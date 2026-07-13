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

    <?php
    $banner = get_field('banner_image');
    if($banner):
    ?>
        <img src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>

    <div class="banner-overlay">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

</section>


<!-- About -->

<section class="page-content">

    <div class="container content-grid">

        <div class="page-image">

            <?php
            $about = get_field('about_image');

            if($about):
            ?>

            <img src="<?php echo esc_url($about); ?>" alt="About">

            <?php endif; ?>

        </div>

        <div class="page-text">

            <span class="small-title">

                ABOUT US

            </span>

            <h2>

                <?php the_field('about_title'); ?>

            </h2>

            <?php the_field('about_description'); ?>

        </div>

    </div>

</section>


<!-- Services -->

<section class="services">

<div class="container">

<div class="section-title">

<p>OUR SERVICES</p>

<h2>What We Do</h2>

</div>

<div class="service-content">

<?php the_field('our_services'); ?>

</div>

</div>

</section>

<?php
endwhile;

get_footer();
?>