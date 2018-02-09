<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="top-slider">

    <!-- --><?php /*fw_print($atts) */?>

    <div id="top-slider" class="top-slider__wrapper">

        <?php if (is_array($atts['slider']) && !empty($atts['slider'])) { ?>

            <?php foreach ($atts['slider'] as $banner) { ?>

                <div class="top-slider__wrapper--slide">

                    <img src="<?php echo $banner['slide']['url'] ?>" alt="">

                    <div class="top-slider__descr">

                        <h1><?php echo $banner['title'] ?></h1>

                        <p><?php echo $banner['subtitle'] ?></p>

                        <a href="<?= $banner['link']?>">
                            <span class="icon"></span>
                            подробнее</a>
                    </div>

                </div>

            <?php };?>

        <?php }; ?>

    </div>


</section>

<section class="adv">

    <div class="container">

        <h3 class="title">Наши преимущества</h3>

        <p class="subtitle">Главное требование к изделию из натурального камня – качество!</p>

        <?/*= fw_print($atts) */?>

        <div class="adv__wrapper">

            <? foreach ($atts['advantages'] as $adv) { ?>

                <div class="adv__wrapper--element">
                <span class="icon">
                    <img src="<?= $adv['photo']['url'] ?>" alt="">
                </span>
                    <p class="descr"><?= $adv['descr'] ?></p>
                </div>

            <? }; ?>

        </div>

    </div>

</section>

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

<section class="for">

    <div class="container">

        <h3 class="title">Для кого мы работаем</h3>

        <p class="subtitle">Мы хотим, чтобы Вам нравилось то, что мы делаем.</p>

        <div class="for__wrapper">

            <div class="for__wrapper--element">

                <span class="icon">
                    <img src="<?= bloginfo('template_directory'); ?>/img/content/for-1.png" alt="">
                </span>

                <p class="descr">Частные клиенты</p>

            </div>
            <div class="for__wrapper--element">

                 <span class="icon">
                    <img src="<?= bloginfo('template_directory'); ?>/img/content/for-2.png" alt="">
                 </span>

                <p class="descr">Корпоративные клиенты</p>

            </div>
            <div class="for__wrapper--element">

                 <span class="icon">
                    <img src="<?= bloginfo('template_directory'); ?>/img/content/for-3.png" alt="">
                 </span>

                <p class="descr">Дизайнеры / Архитеркторы</p>

            </div>

        </div>

    </div>

</section>

<section class="feedback">

    <div class="container">

        <h3 class="title">Обратная связь</h3>

        <p class="subtitle">Здесь вы можете отправть нам сообщение</p>

        <form id="feedback-main" class="feedback__form">

            <div class="feedback__form--box">

                <input id="feedback-main-name" class="feedback__form--field" type="text" name="name" minlength="2"
                       maxlength="20" placeholder="Ваше имя" required>

                <input id="feedback-main-email" class="feedback__form--field" type="text" name="name" minlength="2"
                       maxlength="50" placeholder="Ваше e-mail" required>

            </div>

            <textarea id="feedback-main-text" class="feedback__form--msg" name="message" minlength="2" maxlength="250"
                      placeholder="Сообщение" required></textarea>

            <input type="submit" class="feedback__form--submit" value="отправить">

        </form>

    </div>

</section>

<section class="clients">

    <div class="container">

        <h3 class="title">Наши клиенты и партнеры</h3>

        <!--        --><?php //fw_print($atts)?>

        <ul class="clients__tabs">

            <?php foreach($atts['clients'] as $key => $value) {?>

                <li><a href="#<?= $key ?>" class="<?= ($key==0)?'active':'' ?>"><?= $value['title']?></a></li>

            <?php }?>

        </ul>

        <div class="clients__wrapper">

            <?php foreach($atts['clients'] as $key => $value) {?>

                <div id="<?= $key ?>" class="clients__wrapper--box">

                    <div class="clients__items">

                        <?php foreach($value['tabs'] as $att) {?>

                            <?php /*fw_print($att)*/?>

                            <div class="clients__items--elements">

                                <a href="<?= $att['link_top']?>" class="clients__items--element" target="_blank">
                                    <img src="<?= $att['image_top']['url']?>" alt="">
                                </a>

                                <a href="<?= $att['link_bottom']?>" class="clients__items--element" target="_blank">
                                    <img src="<?= $att['image_bottom']['url']?>" alt="">
                                </a>

                            </div>

                        <?php } ?>


                    </div>

                </div>

            <?php }?>

        </div>

    </div>

</section>