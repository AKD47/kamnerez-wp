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

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_1.png" alt="">

                <h3 class="works__wrapper--name">Гранит</h3>

                <div class="works__wrapper--descr"></div>
            </a>

            <a href="stone-catalog-marble.html" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_2.png" alt="">
                <h3 class="works__wrapper--name">Mрамор</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_3.png" alt="">
                <h3 class="works__wrapper--name">Агломерат</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_4.png" alt="">
                <h3 class="works__wrapper--name">Травертин</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_5.png" alt="">
                <h3 class="works__wrapper--name">Оникс</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_6.png" alt="">
                <h3 class="works__wrapper--name">Полудрагоценные <br> камни</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_7.png" alt="">
                <h3 class="works__wrapper--name">Гранитная <br> брусчатка</h3>
                <div class="works__wrapper--descr"></div>
            </a>

            <a href="#" class="works__wrapper--element">
                <img src="<?php bloginfo('template_directory'); ?>/img/stones/stone_8.png" alt="">
                <h3 class="works__wrapper--name">Валуны <br> и камни</h3>
                <div class="works__wrapper--descr"></div>
            </a>

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
