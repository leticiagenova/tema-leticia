<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Home Template -->
<section id="main-cta">
  <div class="container">
    <div>

    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>