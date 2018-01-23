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

            <ul class="top-content__wrapper--links">
                <li><a href="/countertops-catalog" class="active">Столешницы</a></li>
                <li><a href="/windowsills">Подоконники</a></li>
                <li><a href="/steps">Ступени</a></li>
                <li><a href="/fireplaces">Камины</a></li>
                <li><a href="/mosaic">Мозаика и панно</a></li>
                <li><a href="/stone-carving">Резьба по камню</a></li>
                <li><a href="/exclusive">Эксклюзив</a></li>
                <li><a href="/stone-catalog">Каталог камня</a></li>
            </ul>

            <div class="top-content__wrapper--descr">

                <?php foreach ($atts['top_text'] as $att){?>

                    <p><?= $att['text'];?></p>

                <?php };?>

            </div>

        </div>

    </div>

    <div class="separator"></div>

</section>

<section class="works from-top">

    <div class="container">

        <div id="works-slider" class="works__wrapper">

            <?php foreach ($atts['content'] as $att) {?>

                <a href="<?= $att['link'];?>" class="works__wrapper--element">
                    <img src="<?= $att['photo']['url'];?>" alt="photo">

                    <h3 class="works__wrapper--name"><?= $att['title'];?></h3>

                    <div class="works__wrapper--descr"></div>
                </a>

            <?php };?>

        </div>

        <div class="services__form from-top">

            <span class="services__form--icon">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/calc-icon.png" alt="">
            </span>

            <p class="subtitle">Отправить заявку на услуги</p>

            <span class="icon"></span>

            <a href="#" class="services__form--submit">заполнить</a>

        </div>

    </div>

</section>
