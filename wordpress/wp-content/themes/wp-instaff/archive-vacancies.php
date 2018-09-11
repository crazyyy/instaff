<?php get_header(); ?>

 <div class="block-content">
    <div class="container">
      <div class="row align-items-start">
        <h1 class="block-content--title col-xl-12"><?php the_title(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
        <!-- /.block-content--content col-xl-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.block-content -->

  <?php get_template_part('templatepart-sharelink'); ?>

  <?php get_template_part('templatepart-vacancies-inner'); ?>

  <?php get_template_part('templatepart-postcontact'); ?>

<?php get_footer(); ?>
