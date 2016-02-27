<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Title -->
    <section id="page-title">
        <div class='container'>
            <h1><?php echo preg_replace("@^(.*? )([^ ]+?)(\W{0,1})$@","$1<strong>$2</strong>$3",get_the_title()); // This shit puts the <strong> tag around the Title's last word ?></h1>
        </div>
    </section>
    <!-- /Page Title -->
    <?php
    $side_menu = false;
    $page = $post->ID;
    if ($post->post_parent) {
        $page = $post->post_parent;
    }
    $side_menu=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
    $has_sidebar = !empty($side_menu);
    ?>
    <a name="pageTop"></a>
    <div id="page-content" class='container content'>
        <?php if ($has_sidebar) : ?><div class="content-with-sidebar"><?php endif; ?>
            <div class="page-body"><?php the_content(); ?></div>
            <a href="#pageTop" class="btn default float-right" id="toTop">Back to Top <i class="fa fa-chevron-up"></i></a>
            <?php if ($has_sidebar) : ?></div><?php endif; ?>

        <?php if ($has_sidebar) : ?>
            <aside class="content-sidebar">
                <?php if (!empty($side_menu)) : ?>
                    <div class="box">
                        <ul>
                            <?= $side_menu; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </aside>
        <?php endif; ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
