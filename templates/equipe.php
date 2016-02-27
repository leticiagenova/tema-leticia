<?php /* Template Name: Equipe */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Equipe Template -->
<section id="main-cta">
  <div class="container">
    <h1><?= get_the_title() ?></h1>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>