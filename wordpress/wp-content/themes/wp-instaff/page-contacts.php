<?php /* Template Name: Contacts Page */ get_header(); ?>

  <div class="block-maps block-maps--before">
    <div class="container">
      <div class="row">
          <h1 class="block-content--title col-xl-12"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>

  <?php get_template_part('templatepart-postcontact'); ?>

  <div class="block-maps lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/block-maps.png">
  </div>

  <div class="block-maps--after">
    <div class="container">
      <div class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <div class="block-content--content col-xl-12">
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
          </div>
          <!-- /.block-content--content col-xl-9 -->
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  <!-- /.block-maps--after -->

  <?php get_template_part('templatepart-sharelink'); ?>

<?php get_footer(); ?>
