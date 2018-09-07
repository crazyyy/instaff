<?php get_header(); ?>

  <div class="block-content">
    <div class="container">
      <div class="row">
        <h1 class="block-content--title col-xl-12">111 category name <?php the_category(', '); ?></h1>

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.block-content -->

  <?php get_template_part('templatepart-postcontact'); ?>

  <?php get_template_part('templatepart-sharelink'); ?>

<?php get_footer(); ?>