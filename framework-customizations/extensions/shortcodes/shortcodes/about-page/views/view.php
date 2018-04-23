<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="breadcrumbs">

    <div class="container">

        <ul class="breadcrumbs__pages">

            <?php foreach ($atts['breadcrumbs'] as $att) { ?>
                <li><a href="<?= $att['link']?>"><?= $att['page']?></a></li>
            <?php }; ?>

        </ul>

        <h1 class="title"><?= $atts['title']?></h1>

    </div>

</section>

<section class="about">

    <div class="about__inner">

        <?php foreach ($atts['top_text'] as $att) {?>
            <p class="about__descr"><?= $att['text'] ?></p>
        <? }; ?>

        <div class="about__photo">
            <img src="<?= $atts['about_photo'][url]?>" alt="photo">
        </div>

        <div class="about__box">

            <h3 class="about__title">Работа с клиентом</h3>

            <p class="about__subtitle">Главным и первым пунктом мы обозначили работу с клиентом. </p>

            <?php foreach ($atts['about_textblocks'] as $att) {?>

                <p class="about__descr"><?= $att['text']?></p>

            <? };?>

        </div>

        <div class="about__box">

            <h3 class="about__title">Работа с клиентом</h3>

            <p class="about__subtitle">Главное требование к изделию из натурального камня – качество.</p>
            <p class="about__subtitle">Главное требование к
                облицовочно-укладочным работам – качество.</p>
            <p class="about__subtitle">Мы хотим, чтобы Вам нравилось то, что мы делаем.</p>

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>