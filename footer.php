<footer class="site-footer">

<div class="container footer-grid">

<div>

<h3><?php bloginfo('name'); ?></h3>

<p>

We create digital products that help businesses grow and succeed.

</p>

</div>

<div>

<h3>Quick Links</h3>

<ul>

<li><a href="<?php echo home_url(); ?>">Home</a></li>

<li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>

<li><a href="<?php echo home_url('/our-services'); ?>">Our Services</a></li>

</ul>

</div>

<div>

<h3>Contact Us</h3>

<p>123 Main Street</p>

<p>info@example.com</p>

<p>+9779828071794</p>

</div>

</div>

<div class="copyright">

<p>

© <?php echo date('Y'); ?>

<?php bloginfo('name'); ?>

All Rights Reserved.

</p>

</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>