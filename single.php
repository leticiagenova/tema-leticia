<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="blog-content" class='container content'>
        <aside>
            <h2>Blog</h2>
        </aside>
        <div class="blog-posts">
            <!-- Blog Post -->
            <article class="article">
                <?php get_template_part('partials/content-single', get_post_type()); ?>
            </article>
            <!-- /Blog Post -->
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>