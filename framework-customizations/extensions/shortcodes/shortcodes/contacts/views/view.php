<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="contacts">

    <div class="container">

        <div class="contacts__wrapper">

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/map-marker-white-icon.png" alt="">
                </span>

                <p class="contacts__wrapper--descr"><?= $atts['address']?></p>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/call-icon.png" alt="">
                </span>

                <div class="contacts__wrapper--links">

                    <?php foreach ($atts['phone'] as $att){?>
                        <a href="tel:<?= $att['number'];?>" class="contacts__wrapper--phone"><?= $att['number'];?></a>
                    <?php };?>                   

                </div>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                     <img src="<?php bloginfo('template_directory'); ?>/img/icons/msg-icon.png" alt="">
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

            <form id="contacts-form" action="" class="contacts__form">

                <div class="contacts__form--box">

                    <input class="contacts__form--field" type="text" placeholder="Ваше имя">

                    <input class="contacts__form--field" type="text" placeholder="Ваше e-mail">

                </div>

                <textarea class="contacts__form--msg" name="" id="" placeholder="Сообщение"></textarea>

                <input type="submit" class="contacts__form--submit" value="отправить">

            </form>

        </div>

    </div>

</section>