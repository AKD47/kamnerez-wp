<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="breadcrumbs">

    <div class="container">

        <ul class="breadcrumbs__pages">

            <!--            --><?php //fw_print($atts)?>

            <?php foreach ($atts['breadcrumbs'] as $att) { ?>
                <li><a href="<?= $att['link'] ?>"><?= $att['page'] ?></a></li>
            <?php }; ?>

        </ul>

        <h1 class="title"><?= $atts['title'] ?></h1>

    </div>

</section>

<section class="about">


    <div class="about__inner">

        <p class="about__descr"><span>Компания «Рублевский камнерез» была основана 2003 году.</span></p>
        <p class="about__descr">С момента основания компании
            руководством и коллективом были выбраны некоторые приоритетные направления развития.</p>

        <div class="about__photo">
            <img src="<?= $atts['about_photo']['url'] ?>" alt="">
        </div>

        <div class="about__box">

            <h3 class="about__title"><?= $atts['about_title'] ?></h3>

            <p class="about__subtitle"><?= $atts['about_subtitle'] ?></p>

            <?php foreach ($atts['about_textblock'] as $att) { ?>

                <p class="about__descr"><?= $att['text'] ?></p>

            <?php }; ?>

        </div>

        <div class="about__box">

            <h3 class="about__title"><?= $atts['about_title_two'] ?></h3>

            <?php foreach ($atts['about_slogans'] as $att) { ?>

                <p class="about__subtitle"><?= $att['text'] ?></p>

            <?php }; ?>           

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>