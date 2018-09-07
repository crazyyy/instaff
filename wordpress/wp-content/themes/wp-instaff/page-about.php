<?php /* Template Name: About Page */ get_header(); ?>

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

  <div class="block-about">
    <div class="container">
      <div class="row">
        <h1 class="block-about--title col-xl-12">Лидер среди сайтов по поиску<span>специалистов</span></h1>
        <p>Ежедневно на rabota.ua размещается более 100 000 актуальных вакансий – это абсолютный рекорд среди сайтов по поиску работы.</p>
        <p>Такой стремительный рост говорит только об одном: rabota.ua предлагает самые эффективные инструменты для поиска сотрудников и все больше компаний выбирают нас как основную площадку для подбора персонала.</p>
        <p>Вместе с этим rabota.ua является самым популярным сайтом по поиску работы среди украинцев. К такому выводу пришла международная исследовательская компания GfK Ukraine после проведения глобального исследования рынка труда весной 2016 года. Каждый месяц мы помогаем найти работу 5 млн. украинцев, и это число продолжает расти!</p>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container-fluid">
      <div class="row">
        <h3 class="block-about--subtitle">Тут рождаются возможности</h3>
        <div class="block-about--halfimage block-about--halfimage__left block-about--samesize">
          <h4>Команда rabota.ua – это профессионалы, влюбленные в свою rabotу и объединенные общими ценностями!</h4>
          <p>Ежедневно команда нашего сайта работает над тем, чтобы работодатель и соискатель могли как можно быстрее найти друг друга. Ведь каждая такая встреча рождает новые возможности: для компаний – достигать новых бизнес-вершин, а для соискателя – быть счастливым.</p>
          <ul class="block-about--list">
            <li class="block-about--list_ico-1">Лидерство</li>
            <li class="block-about--list_ico-2">Эффективность</li>
            <li class="block-about--list_ico-3">Индивидуальный подход</li>
          </ul>
          <!-- /.block-about--list -->
        </div>
        <!-- /.block-about--halfimage block-about--halfimage__left -->
        <div class="block-about--halfimage block-about--halfimage__right block-about--samesize">

        </div>
        <!-- /.block-about--halfimage block-about--halfimage__right -->
      </div>
    </div>
    <div class="container">
      <div class="row">
        <p class="block-about--p__last">Ежедневно на rabota.ua размещается более 100 000 актуальных вакансий – это абсолютный рекорд среди сайтов по поиску работы.</p>
        <p class="block-about--p__last">Такой стремительный рост говорит только об одном: rabota.ua предлагает самые эффективные инструменты для поиска сотрудников и все больше компаний выбирают нас как основную площадку для подбора персонала.</p>
        <p class="block-about--p__last">Вместе с этим rabota.ua является самым популярным сайтом по поиску работы среди украинцев. К такому выводу пришла международная исследовательская компания GfK Ukraine после проведения глобального исследования рынка труда весной 2016 года. Каждый месяц мы помогаем найти работу 5 млн. украинцев, и это число продолжает расти!</p>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.block-about -->

  <div class="block-quote lazy" data-src="<?php echo get_template_directory_uri(); ?>/img/block-quote.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 offset-xl-3">
          <h6 class="block-quote--title">Находим<span>только лучших!</span></h6>
          <blockquote class="block-quote--content">“Удовольствие в работе делает совершенство в работе.”</blockquote>
          <p class="block-quote--name">Аристотель</p>
          <p class="block-quote--post">древнегреческий философ</p>
        </div>
        <!-- /.col-xl-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.block-quote -->

  <?php get_template_part('templatepart-sharelink'); ?>

<?php get_footer(); ?>
