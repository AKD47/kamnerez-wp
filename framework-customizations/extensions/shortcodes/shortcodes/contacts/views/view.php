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

            <!--            --><?php //fw_print($atts)?>

            <?php foreach ($atts['breadcrumbs'] as $att) { ?>
                <li><a href="<?= $att['link'] ?>"><?= $att['page'] ?></a></li>
            <?php }; ?>

        </ul>

        <h1 class="title"><?= $atts['title'] ?></h1>

    </div>

</section>
<section class="contacts">

    <div class="container">

        <div class="contacts__wrapper">

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/map-marker-white-icon.png" alt="">
                </span>

                <p class="contacts__wrapper--descr"><?= $atts['address']?></p>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets//img/icons/call-icon.png" alt="">
                </span>

                <div class="contacts__wrapper--links">

                    <?php foreach ($atts['phone'] as $att){?>
                        <a href="tel:<?= $att['number'];?>" class="contacts__wrapper--phone"><?= $att['number'];?></a>
                    <?php };?>                   

                </div>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                     <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/msg-icon.png" alt="">
                </span>
                
                <a href="#" class="contacts__wrapper--email"> <?= $atts['mail'];?></a>

            </div>

        </div>

    </div>

    <div class="contacts__map">

        <div id="map"></div>

    </div>

    <div class="contacts__inner">

        <div class="container">

            <h3 class="title">Обратная связь</h3>

            <p class="subtitle">Здесь вы можете отправть нам сообщение</p>

            <form id="contacts-form" class="contacts__form">

                <div class="contacts__form--box">

                    <input id="contacts-form-name" class="contacts__form--field" type="text" name="name" minlength="2"
                           maxlength="20" placeholder="Ваше имя" required>

                    <input id="contacts-form-email" class="contacts__form--field" type="text" name="email" minlength="2"
                           maxlength="50" placeholder="Ваше e-mail" required>

                </div>

                <textarea id="contacts-form-text" class="contacts__form--msg" name="message" minlength="2"
                          maxlength="250" placeholder="Сообщение"
                          required></textarea>

                <input id="contacts-form-submit" type="submit" class="contacts__form--submit" value="отправить">

            </form>

        </div>

    </div>

</section>