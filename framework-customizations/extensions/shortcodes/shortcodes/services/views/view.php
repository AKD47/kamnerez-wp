<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="services">

    <div class="container">

        <h3 class="title">Полный цикл работ - от замера до установки.</h3>

        <div class="top-content__wrapper">         

            <p class="top-content__wrapper--descr"><?= $atts['top_slogan']?></p>

        </div>

        <div class="works__wrapper">

            <?php foreach ($atts['content'] as $att) {?>

                <a href="<?= $att['link']?>" class="works__wrapper--element">
                    <img src="<?= $att['photo']['url']?>" alt="photo">

                    <div class="works__wrapper--descr">

                        <h3><?= $att['title']?></h3>

                    </div>
                </a>

            <?php };?>

        </div>

        <h3 class="title"><?= $atts['serv_title']?></h3>

        <p class="top-content__wrapper--descr"><?= $atts['serv_text']?></p>

        <div class="services__form">

            <span class="services__form--icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/calc-icon.png" alt="">
            </span>

            <p class="subtitle">Отправить заявку на услуги</p>

            <span class="icon"></span>

            <a href="#" class="services__form--submit">заполнить</a>

        </div>

    </div>

</section>