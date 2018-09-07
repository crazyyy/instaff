<?php /* Template Name: Vacancies Page */ get_header(); ?>

 <div class="block-content">
    <div class="container">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="row align-items-start">
          <h1 class="block-content--title col-xl-12"><?php the_title(); ?></h1>
          <div class="block-content--content col-xl-12">
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
          </div>
          <!-- /.block-content--content col-xl-9 -->
        </div>
        <!-- /.row -->
      <?php endwhile; endif; ?>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.block-content -->

  <?php get_template_part('templatepart-sharelink'); ?>

  <?php get_template_part('templatepart-vacancies-inner'); ?>

  <?php get_template_part('templatepart-postcontact'); ?>

<?php get_footer(); ?>
