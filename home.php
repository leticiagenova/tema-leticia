<?php
// This is the Blog area (latest posts)
?>
<?php get_header(); ?>
<div id="blog-content" class='container content'>
    <aside>
        <h1>Blog</h1>
    </aside>
    <div class="blog-posts">
        <!-- Blog Posts -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section class="article">
                <?php get_template_part('partials/content-single', get_post_type()); ?>
            </section>
        <?php endwhile; endif; ?>
        <!-- /Blog Posts -->
        <!-- Pagination -->
        <?php the_posts_pagination( array( 'mid_size'  => 2) );?>
    </div>

</div>
<?php get_footer(); ?>