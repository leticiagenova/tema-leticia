<?php
$has_thumb = has_post_thumbnail();
$post_id = get_the_ID();
$url = get_permalink( $post_id );
?>
<div class="post-box <?= $has_thumb ? 'has-thumb' : '' ?>">
        <div class="img">
            <a href="<?= get_permalink() ?>"><?= get_the_post_thumbnail($post->ID, 'featured') ?></a>
        </div>
        <div class="post-summary">
            <?php if (is_single()) : ?>
                <h1><?= get_the_title() ?></h1>
            <?php else : ?>
                <h2><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
            <?php endif;?>
            <p>
                <?php the_excerpt(); ?>
            </p>
            <?php if (!is_single()) : ?>
                <a href="<?=$url?>" title="Read More" class="btn transparent">Read More</a>
            <?php endif;?>
        </div>
        <div class="post-info">
            <?php
            // Get the Shares Count
            // Check for transient. If none, then execute code
            if ( false === ( $data = get_transient( 'trans_' . $post_id ) ) ) {
                /* action */
                $facebook_like_share_count = facebook_like_share_count("$url");
                $twitter_tweet_count = twitter_tweet_count("$url");
                // store data in array
                $data = array (
                    $facebook_like_share_count,
                    $twitter_tweet_count
                );
                // Put the results in a transient. Expire after 6 hours
                set_transient( 'trans_' . $post_id, $data, 6 * HOUR_IN_SECONDS  );
            }
            $shares = 0;
            if (is_array($data)) {
                // these are the variables containing the share count
                $facebook_like_share_count = $data[0];
                $twitter_tweet_count = $data[1];
                $shares = $facebook_like_share_count + $twitter_tweet_count;
            }
            $views = 0;
            if(function_exists('the_views')) $views = the_views(false);
            ?>
            <ul>
                <li><a href="http://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?=$url?>"><i class="fa fa-share-square-o"></i><?= $shares ?> Shares</a></li>
                <li><i class="fa fa-eye"></i><?= $views ?> Views</li>
                <li><i class="fa fa-calendar"></i><?= get_the_date() ?></li>
            </ul>
        </div>
    <?php if (is_single()) : ?>
        <div class="bd common">
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <a href="<?=get_permalink( get_option( 'page_for_posts' ) )?>" class="btn default float-right" id="backToBlog"><i class="fa fa-chevron-left"></i> Back to Posts</a>
        </div>
    <?php endif; ?>
</div>
