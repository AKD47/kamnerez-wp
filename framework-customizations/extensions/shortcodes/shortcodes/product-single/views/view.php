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

                <?php foreach ($atts['top_descr'] as $att) {?>

                    <p><?= $att['text']?></p>

                <?php };?>                

            </div>

        </div>

    </div>

    <div class="separator"></div>

</section>

<!-- start calculation.html-->
<section class="calc">
    <div class="container">

        <h3 class="calc__title">Пример расчета цены на изделие</h3>

        <div class="calc__image">
            <img src="<?= $atts['top_img']['url'] ?>" alt="calculation">
        </div>

        <ul class="calc__list">

            <?php foreach ( $atts['items'] as $att ) {?>
                <li><span><?= $att['items_text']?>:</span> <span><?= $att['items_value']?></span></li>
            <?php };?>

        </ul>

        <h3 class="calc__subtitle">Варианты обработки кромки</h3>

        <div class="calc__wrapper">

            <?php foreach ($atts['items_img'] as $att) {?>

                <div class="calc__wrapper--item">
                    <img src="<?= $att['img']['url'];?>" alt="">
                </div>

            <?php };?>

        </div>

        <div class="services__form from-top">

            <span class="services__form--icon">
                <img src="<?= bloginfo('template_directory'); ?>/assets/img/icons/calc-icon.png" alt="">
            </span>

            <p class="subtitle">Запрос на расчета стоимости</p>

            <span class="icon"></span>

            <a href="#" class="services__form--submit">заполнить</a>

        </div>

    </div>
    <div class="separator"></div>
</section>
<!-- end calculation.html-->

<section class="catalog">

    <div class="container">

        <h3 class="title">Каталог камня</h3>

        <ul class="catalog__tabs">
            <?php foreach($atts['clients'] as $key => $value) {?>

                <li><a href="#<?= $key ?>" class="<?= ($key==0)?'active':'' ?>"><?= $value['title']?></a></li>

            <?php }?>
        </ul>

        <div class="catalog__wrapper">

            <?php foreach($atts['clients'] as $key => $value) {?>

                <div id="<?= $key;?>" class="catalog__wrapper--box">

                    <div class="catalog__items">

                        <?php foreach($value['tabs'] as $att) {?>

                            <div class="catalog__items--elements">

                                <a href="<?= $att['image_bottom']['url']?>"
                                   class="catalog__items--element" data-fancybox="gallery">
                                    <img src="<?= $att['image_bottom']['url']?>" alt="">
                                    <span class="catalog__items--show"></span>
                                </a>
                                <a href="<?= $att['image_bottom']['url']?>"
                                   class="catalog__items--element" data-fancybox="gallery">
                                    <img src="<?= $att['image_bottom']['url']?>" alt="">
                                    <span class="catalog__items--show"></span>
                                </a>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            <?php };?>

        </div>

    </div>

</section>

<section class="works">

    <div class="separator"></div>

    <div class="container">

        <h3 class="title">Примеры работ</h3>

        <p class="subtitle"><?= $atts['works_title'] ?></p>

        <div id="works-slider" class="works__wrapper">

            <?php foreach ($atts['works'] as $att) { ?>

                <a href="<?= $att['photo']['url'] ?>" class="works__wrapper--element" data-fancybox="gallery">
                    <img src="<?= $att['photo']['url'] ?>" alt="photo">

                    <div class="works__wrapper--descr">

                        <h3><?= $att['title'] ?></h3>

                    </div>
                </a>

            <?php }; ?>

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>