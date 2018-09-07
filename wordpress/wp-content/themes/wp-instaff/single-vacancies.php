<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="block-content">
      <div class="container">
        <div class="row align-items-start">
          <h1 class="block-content--title col-xl-12"><?php the_title(); ?></h1>
          <!-- /.block-content--title col-xl-12 -->
          <div class="block-content--content col-xl-9">
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
          </div>
          <!-- /.block-content--content col-xl-9 -->

          <?php
            $terms = wp_get_post_terms( get_queried_object_id(), 'categories', array( 'orderby' => 'id', 'order' => 'DESC' ) );

            $deepestTerm = false;
            $maxDepth = -1;

            foreach ($terms as $term) {
              $ancestors = get_ancestors( $term->term_id, 'categories' );
              $termDepth = count($ancestors);

              if ($termDepth > $maxDepth) {
                  $deepestTerm = $term;
                  $maxDepth = $termDepth;
              }
            }

            if ($deepestTerm->parent != 0) {
              $deepestTerm = get_term( $deepestTerm->parent, 'categories' );
            }
          ?>
          <aside class="block-content--widget block-content--widget__it block-content--widget__<?php echo $deepestTerm->slug; ?> col-xl-3">
            <h2 class="block-content--widget__title"><?php echo $deepestTerm->name; ?></h2>
            <?php
              $this_args = array(
                  'parent' => $deepestTerm->term_id,
                  'orderby' => 'slug',
                  'hide_empty' => false
              );
              $child_terms = get_terms( $deepestTerm->taxonomy, $this_args );
              echo '<ul>';
              foreach ($child_terms as $child_term) {
                  echo '<li><a href="' . get_term_link( $child_term->name, $deepestTerm->taxonomy ) . '">' . $child_term->name . '</a></li>';
              }
              echo '</ul>';
            ?>
            <a href="#" class="block-content--widget__allvacancies">Все вакансии</a>
          </aside>
          <!-- /.block-content--widget col-xl-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.block-content -->
  <?php endwhile; endif; ?>

  <?php get_template_part('templatepart-sharelink'); ?>

  <?php get_template_part('templatepart-vacancies-inner'); ?>

  <?php get_template_part('templatepart-postcontact'); ?>

<?php get_footer(); ?>
