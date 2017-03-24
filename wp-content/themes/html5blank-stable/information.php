<?php
    /*
    Template Name: Информация (information.php)
    */
?>
<?php get_header();?>



<body id="paid">

  <section class="imgBg">
    <div class="wrapper">
    <!-- icons -->
      <div class="icons col-12 cf">
        <div class="wrapper">
          <div class="col-5 imgBg__logo">
            <a href="/">
              <img src="/img/logo.png" alt="" class="logo">
            </a>
          </div>
          <div class="col-7 imgBg__nav">
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
          </div>

        </div>
      </div>
    </div>
    <svg class="hero-swoosh" viewBox="0 0 1300 150">
      <g fill="#f4f4f4">
          <path d="M935.145634,143.880843 C826.14569,138.098092 710.626239,113.51733 611.457297,74.9330809 C525.793047,41.7514953 435.575492,18.5390459 347.386227,7.9074726 C259.290098,-3.0173106 174.288148,-1.36664753 103.598067,5.28487305 C64.3671939,9.1889084 29.6792785,14.1843361 0,19.3969563 L0,270.846154 L1300,270.846154 L1300,99.5301325 C1275.79504,107.240467 1247.66802,115.032248 1215.11188,122.395074 C1142.06236,138.337004 1044.37324,150.076259 935.145634,143.880843 Z"></path>
      </g>
    </svg>
  </section>

  <section class="contact">
    <div class="wrapper">
      <div class="col-6">
      <h3>Contact</h3>
        <ul>
          <li>
            <p>Chisinau, Moldova</p>
          </li>
          <li>
            <p>str. Alexei Mateevici 58</p>
          </li>
          <li>
            <p>Tel: (+373) 22242686</p>
          </li>
          <li>
            <p>GSM: (+373) 69112351</p>
          </li>
          <li>
            <p>e-mail: office@urbanconsulting.md</p>
          </li>
        </ul>
      </div>
    </div>
  </section>


</body>