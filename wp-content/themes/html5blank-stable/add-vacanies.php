<?php
    /*
    Template Name: Add vacancies (add-vacancies.php)
    */
    ?>

    <?php 
    get_header();?>
    <body>
     <section class="imgBg">
      <div class="image-bg">
        <?php if ( has_post_thumbnail()) {
          the_post_thumbnail(); } ?>
        </div>
        <div class="wrapper">
          <!-- icons -->
          <div class="icons col-12 cf">
            <div class="wrapper cf">
              <div class="col-9 imgBg__logo">
                <a href="/">
                  <img src="/img/logo.png" alt="" class="logo">
                </a>
              </div>
              <div class="col-3 imgBg__nav">
                <div class="title-active">
                  <?php getcont(); ?>
                  <h3><?php the_title(); ?></h3>
                </div>
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
<?php
echo $country = $_POST['vac_country'];
echo $city = $_POST['vac_city'];
echo $spec = $_POST['vac_speciality'];
echo $field_of_activity = $_POST['vac_activity'];
echo $qualification = $_POST['vac_qualification'];
echo $info = $_POST['vac_information'];

?>
<section id="add-vacancy">
    <div class="wrapper">
      <div class="col-12 cf">
        <form action="" method="POST">
          <div class="col-6 fl cf">
            <input type="text" placeholder="Страна" name="vac_country">
            <input type="text" placeholder="Город" name="vac_city">
            <input type="text" placeholder="Специальность" name="vac_speciality">
            <select name="" name="vac_activity" id="">
                  <option value="">Сфера деятельности</option>
                  <option value="">Кузнец</option>
                  <option value="">Пекарь</option>
                  <option value="">Водитель</option>
                </select>
          </div>
          <div class="col-6 fr cf">
            <div class="col-12">
            <img src="/img/example.png" alt="">
              <input type="file" accept="image/*">
            </div>
            <div class="col-12">
              <div class="checkbox">
                <label><input name="vac_qualification" type="checkbox" /> Квалифицированный</label> \ <label><input type="checkbox" /> Неквалифицированный</label>
              </div>
            </div>
          </div>
          <div class="col-12 fl cf">
            <textarea name="" id="" cols="30" rows="10" name="vac_information" placeholder="Дополнительная информация"></textarea>
          </div>
          <div class="col-12 fl cf">
            <input type="submit" name="submit" class="btn-sm btn-save" value="Сохранить">
          </div>
        </form>
      </div>
    </div>
  </section>
      

          <div class="edit-link"><?php edit_post_link(); ?></div>
                <?php/* 
          global $wpdb;
          $cvdatabase="vacancies";
          if(isset($_POST['submit']) && is_user_logged_in()==true){
              $wpdb->insert( $cvdatabase, array(
                'userwpid' => get_current_user_id(),
                'name' => $_POST['cv_username'],
                'spec' => $_POST['cv_spec'],
                'info' => htmlspecialchars($_POST['cv_info']),
                'age' => $_POST['cv_age'],
                'address' => $_POST['cv_address'],
                'email' => $_POST['cv_email'],
                'city' => $_POST['cv_city'],
                'country' => $_POST['cv_country'],
                'phone' => $_POST['cv_phone'],
                'verif' => "1"),
              array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' )
              );
            }
   */ ?>
        

      <?php get_footer(); ?>