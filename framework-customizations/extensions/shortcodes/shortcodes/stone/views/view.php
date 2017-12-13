<?php if (!defined('FW')) {
    die('Forbidden');
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
                <li><a href="/countertops-catalog">Столешницы</a></li>
                <li><a href="#">Подоконники</a></li>
                <li><a href="#">Ступени</a></li>
                <li><a href="#">Камины</a></li>
                <li><a href="#">Мозаика и панно</a></li>
                <li><a href="#">Резьба по камню</a></li>
                <li><a href="#">Эксклюзив</a></li>
                <li><a href="/stone-catalog" class="active">Каталог камня</a></li>
            </ul>

            <div class="top-content__wrapper--descr">

                <?php foreach ($atts['top_descriptions'] as $att) { ?>

                    <p><?= $att['text_block']; ?></p>

                <?php }; ?>

            </div>

        </div>

    </div>

    <div class="separator"></div>

</section>

<section class="catalog">

    <div class="container">

        <h3 class="title">Образцы мрамора
            <!--            <span class="counter">/  35</span>-->
        </h3>

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

<section class="offer">

    <div class="separator"></div>

    <div class="container">

        <h3 class="title">Цена</h3>

        <p class="offer__descr--text">Его прекрасный вид часто вводит в заблуждение, относительно стоимости
            изделий. Существует мнение, что эти изделия необычайно дороги и недоступны большинству потребителей, но
            это не так. Часто мрамор можно купить в Москве дешевле импортного керамогранита, все зависит от
            месторождения и страны, где его добывают. Красивый и не дорогой мрамор поставляется из Турции и Китая.
            Например, очень популярный турецкий мрамор <strong>Крема Нова стоит от 60$ за м <sup>2</sup></strong></p>

        <h3 class="title">Преимущества</h3>

        <ul class="offer__descr--list">
            <li>Многообразие цветов и рисунков.</li>
            <li>Долговечность.</li>
            <li>Не восприимчивость к тепловым воздействиям.</li>
            <li>Прочность.</li>
        </ul>

        <ul class="offer__descr--list">
            <li>Уход за изделиями из мрамора прост, один раз в несколько месяцев наносить на его поверхность
                водо-грязеотталкивающее средство производства германии Акеми или Италии
            </li>
            <li>Отсутствие радиационного фона, экологическая чистота.</li>
            <li>Белинзони.</li>
        </ul>

    </div>

    <div class="separator"></div>

    <div class="container">

        <h3 class="title">Частые вопросы</h3>


        <?php foreach ($atts['questions_block'] as $att) { ?>

            <p class="offer__descr--subtitle"><?= $att['question']; ?></p>

            <p class="offer__descr--text"><?= $att['answer']; ?></p>

        <?php }; ?>

        <p class="offer__descr--subtitle from-bottom">Поверьте, ни один другой материал не оставляет в памяти столь
            ярких эмоций.</p>

    </div>

</section>

<section class="works">

    <div class="separator"></div>

    <div class="container">

        <h3 class="title">Примеры работ из мрамора</h3>

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