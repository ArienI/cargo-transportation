<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
  <div class="excursion-banner">
    <div class="excursion-banner__img"></div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="excursion-banner__title"><?= Config::get_phrase('excursions'); ?></h1>
        </div>
      </div>

      <div class="row ">
        <div class="col-12">
          <ul class="excursion-list mt-4 mt-lg-5 p-0">
            <li class="excursion-list__item"><?= Config::get_phrase('montenegro'); ?></li>
            <li class="excursion-list__item"><?= Config::get_phrase('albania'); ?></li>
            <li class="excursion-list__item"><?= Config::get_phrase('serbia'); ?></li>
            <li class="excursion-list__item"><?= Config::get_phrase('croatia'); ?></li>
            <li class="excursion-list__item"><?= Config::get_phrase('bosnia'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="contacts">
    <div class="contacts__container container">
      <h2 class="visually-hidden"><?= Config::get_phrase('contact'); ?></h2>
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <a class="contacts__phone" href="tel:+38269738599">(+382)69738599</a>
          <ul class="contacts__socials">
            <?php include INC_PATH .'socials-links.php'; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <p class="excursion__description pt-3 pt-lg-4"><?= Config::get_phrase('montenegro_description'); ?></p>
  </div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';