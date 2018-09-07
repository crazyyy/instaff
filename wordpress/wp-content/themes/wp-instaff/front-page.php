<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="home--about">
      <div class="container-fluid">
        <div class="row">
          <h6 class="home--about__title col-xl-12">О нас</h6>
          <div class="home--about__image lazy col-xl-8" data-src="<?php echo get_template_directory_uri(); ?>/img/home--about.png"></div>
          <div class="home--about__content col-xl-4">
            <?php the_content(); ?>
          </div>
          <!-- /.home--about__content col-xl-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.home--about -->
  <?php endwhile; endif; ?>

  <div class="home--why">
    <div class="container">
      <div class="row">
        <div class="home--why__item col-xl-3">
          <i class="home--why__ico home--why__ico-1"></i>
          <!-- /.home--why__ico home--why__ico-1 -->
          <p>Крупнейшая аудитория работодателей и соискателей на одной площадке</p>
        </div>
        <!-- /.home--why__item col-xl-3 -->
        <div class="home--why__item col-xl-3">
          <i class="home--why__ico home--why__ico-2"></i>
          <!-- /.home--why__ico home--why__ico-2 -->
          <p>Крупнейшая аудитория работодателей и соискателей на одной площадке</p>
        </div>
        <!-- /.home--why__item col-xl-3 -->
        <div class="home--why__item col-xl-3">
          <i class="home--why__ico home--why__ico-3"></i>
          <!-- /.home--why__ico home--why__ico-3 -->
          <p>Самый популярный сайт по поиску работы среди украинцев</p>
        </div>
        <!-- /.home--why__item col-xl-3 -->
        <div class="home--why__item col-xl-3">
          <i class="home--why__ico home--why__ico-4"></i>
          <!-- /.home--why__ico home--why__ico-4 -->
          <p>Короткий путь для соискателя найти работу, а для компании – идеального сотрудника</p>
        </div>
        <!-- /.home--why__item col-xl-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.home--why -->

  <div class="vacancies">
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


          foreach ($terms as $term) {
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

  <div class="home--contacts lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/home--contacts.png">
    <div class="container">
      <div class="row">
        <div class="home--contacts__content col-xl-5">
          <h6>Контакты</h6>
          <p class="home--contacts__mapico">1901 W Madison St, Chicago, IL 60612, США</p>
          <p class="home--contacts__phone"><a href="+1 312 455 4500">+1 <span>312</span> 455 4500</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="tel:+1 312 455 4500">+1 <span>312</span> 455 4500</a></p>
          <p class="home--contacts__email"><a href="mailto:office@instaff.com">office@instaff.com</a></p>
        </div>
        <!-- /.home--contacts__content col-xl-5 -->
        <div class="home--contacts__map lazy col-xl-7" data-src="<?php echo get_template_directory_uri(); ?>/img/home--contacts__map.png">
        </div>
        <!-- /.home--contacts__map col-xl-7 -->
        <div class="home--contacts__image lazy col-xl-7" data-src="<?php echo get_template_directory_uri(); ?>/img/home--contacts__image.png"></div>
        <div class="home--contacts__form col-xl-5">
          <h6>Оформить заявку</h6>
          <form action="">
            <input type="text" placeholder="Ваш e-mail">
            <textarea placeholder="Ваше сообщение / текст вакансии / кого вам помочь найти..."></textarea>
            <input type="submit" value="Отправить">
          </form>
          <p>* Ваши данные никогда не будут переданы 3-м лицам</p>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.home--contacts -->

<?php get_footer(); ?>
