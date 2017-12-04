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

            <p class="top-content__wrapper--descr"><?= $atts['top_text']?></p>

        </div>

    </div>

    <div class="seprator"></div>

</section>

<section class="works">

    <div class="container">

        <p class="subtitle">Наши специалисты с большой ответственностью отнесутся к любому заказу, полученному от Вас.</p>

        <div id="works-slider" class="works__wrapper">

            <?php foreach ($atts['content'] as $att) {?>

                <a href="<?= $att['photo']['url']?>" class="works__wrapper--element" data-fancybox="gallery">
                    <img src="<?= $att['photo']['url']?>" alt="photo">

                    <div class="works__wrapper--descr">

                        <h3><?= $att['title']?></h3>

                    </div>
                </a>

            <?php };?>

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>