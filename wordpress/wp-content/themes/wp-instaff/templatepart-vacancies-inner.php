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
        $n = 0;

        foreach ($terms as $term) {
          if ($i < 4) {
            ?>
              <?php
                $image = get_field('image', $term);
                if( !empty($image) ) {
                  $bgi = $image['url'];
                  $style = 'background-image: url('. $bgi .'); background-position: center; background-repeat: no-repeat; width: 40px; height: 40px;';
                } else {
                  $bgi = get_template_directory_uri() . '/img/default-vacancies-ico.png';
                  $style = 'background-image: url('. $bgi .'); background-position: center; background-repeat: no-repeat; width: 40px; height: 40px;';
                }
              ?>
              <style>
                .vacancies .vacancies--item.vacancies--item__<?php echo $n; ?>::before  {
                  <?php echo $style; ?>
                }
              </style>
              <div class="vacancies--item vacancies--item__<?php echo $n; ?> vacancies--item__<?php echo $term->slug; ?> col-xl-3 col-lg-3 col-md-6 col-sm-6">
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
            $n++;
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
