<div class="vacancies vacancies-inner">
  <div class="container">
    <div class="row">
      <h3 class="vacancies--title col-xl-12">Вакансии</h3>

      <?php
        $args = [
          'taxonomy'     => 'categories',
          'parent'        => 0,
          'number'        => 10,
          'hide_empty'    => false
        ];
        $terms = get_terms( $args );

        shuffle($terms);
        $i = 0;

        foreach ($terms as $term) {
          if ($i < 4) {
            ?>
              <div class="vacancies--item vacancies--item__it vacancies--item__<?php echo $term->slug; ?> col-xl-3">
                <h4 class="vacancies--subtitle"><?php echo $term->name; ?></h4>
                <?php
                  $this_args = array(
                      'parent' => $term->term_id,
                      'orderby' => 'slug',
                      'hide_empty' => false
                  );
                  $child_terms = get_terms( $term->taxonomy, $this_args );
                  echo '<ul>';
                  foreach ($child_terms as $child_term) {
                      echo '<li><a href="' . get_term_link( $child_term->name, $term->taxonomy ) . '">' . $child_term->name . '</a></li>';
                  }
                  echo '</ul>';
                ?>
              </div>
              <!-- /.vacancies--item vacancies--item__name col-xl-3 -->
            <?php
            $i++;
          }
        }
      ?>

      <div class="vacancies--showall col-xl-12">
        <a href="#">Все вакансии</a>
      </div>
      <!-- /.vacancies--showall col-xl-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.vacancies -->
