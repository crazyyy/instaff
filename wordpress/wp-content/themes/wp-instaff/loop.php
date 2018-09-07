<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper col-xl-4'); ?>>

    <h3 class="inner-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h3><!-- /post title -->

    <?php wpeExcerpt('wpeExcerpt40'); ?>

    <span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>

  </div><!-- /looper -->
<?php endwhile; endif; ?>
