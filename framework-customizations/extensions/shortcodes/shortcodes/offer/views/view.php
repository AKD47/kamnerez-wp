<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="offer">

    <div class="title">Мы предлагаем</div>

    <p class="subtitle">Мы хотим, чтобы Вам нравилось то, что мы делаем.</p>
    
  <!--  --><?/*= fw_print($atts)*/?>

    <div id='offer-mobile-slider' class="offer__wrapper">

        <? foreach ($atts['offers'] as $offer) { ?>

            <a href="countertops-catalog.html" class="offer__wrapper--element">
                <img src="<?= $offer['photo']['url'] ?>" alt="">
                <p class="offer__wrapper--subtitle">
                    <?= $offer['descr']?>
                </p>
                <h3 class="offer__wrapper--title"><?= $offer['title']?></h3>
                <span class="offer__wrapper--more">смотреть</span>
                <div class="works__wrapper--descr"></div>
            </a>

        <? };?>

    </div>    

</section>
