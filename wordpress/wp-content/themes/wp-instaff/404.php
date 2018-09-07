<?php get_header(); ?>

  <div class="block-content">
    <div class="container">
      <div class="row align-items-start">
        <h1 class="block-content--title col-xl-12"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <div class="block-content--content col-xl-12">
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </div>
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
