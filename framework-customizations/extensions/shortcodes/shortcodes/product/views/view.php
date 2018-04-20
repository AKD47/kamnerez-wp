<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="top-content">

    <div class="container">

        <div class="top-content__wrapper">           

            <p class="top-content__wrapper--descr"><?= $atts['top_descr']?></p>

        </div>

    </div>

</section>

<section class="offer">

    <div class="offer__wrapper">

        <?php foreach ($atts['product'] as $att) {?>

                    <a href="<?= $att['link']?>" class="offer__wrapper--element">
                        <img src="<?= $att['photo']['url']?>" alt="photo">

                        <p class="offer__wrapper--subtitle"><?= $att['descr']?></p>

                        <h3 class="offer__wrapper--title"><?= $att['title']?></h3>

                        <span class="offer__wrapper--more">смотреть</span>

                        <div class="works__wrapper--descr"></div>

                    </a>

        <?php };?>
        
    </div>

    <div class="offer__descr">

        <div class="separator"></div>

        <div class="container">

            <h3 class="title"><?= $atts['adv_title']?></h3>

            <p class="top-content__wrapper--descr"><?= $atts['adv_text']?></p>

        </div>

    </div>

</section>
