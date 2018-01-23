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

            <div class="top-content__wrapper--examples">

                <?php foreach ($atts['types'] as $att) {?>

                    <a href="<?= $att['link'];?>" class="top-content__wrapper--example">
                        <img src="<?= $att['photo']['url'];?>" alt="">
                        <h3><?= $att['descr'];?></h3>
                        <div class="works__wrapper--descr"></div>
                    </a>

                <?php };?>

            </div>

        </div>

    </div>

    <div class="separator"></div>

</section>

<section class="offer">

    <div class="container">

        <?php foreach ($atts['text_blocks'] as $att) {?>

            <h3 class="title"><?= $att['title'];?></h3>

            <p class="offer__descr--text"><?= $att['text'];?></p>

        <?php };?>

    </div>

</section>

<section class="works">

    <div class="separator"></div>

    <div class="container">

        <h3 class="title">Примеры работ</h3>

        <p class="subtitle"><?= $atts['examples_text'];?></p>

        <div id="works-slider" class="works__wrapper">

            <?php foreach ($atts['content'] as $att) {?>

                <a href="<?= $att['photo']['url'];?>" class="works__wrapper--element" data-fancybox="gallery">
                    <img src="<?= $att['photo']['url'];?>" alt="photo">

                    <div class="works__wrapper--descr">

                        <h3><?= $att['title'];?></h3>

                    </div>
                </a>

            <?php };?>

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>
