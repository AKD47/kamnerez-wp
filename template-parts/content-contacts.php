<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artcraft
 */

?>

<?php the_content(); ?>

<section class="contacts">

    <div class="container">

        <div class="contacts__wrapper">

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/map-marker-white-icon.png" alt="">
                </span>

                <p class="contacts__wrapper--descr"><span>Московская обл., г. Пушкино,</span> м-н Мамонтовка, ул. Рабочая, д.1, территория завода НПО
                    "РосДорМаш"</p>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/call-icon.png" alt="">
                </span>

                <div class="contacts__wrapper--links">

                    <a href="#" class="contacts__wrapper--phone">+7 (495) 755 08 47</a>

                    <a href="#" class="contacts__wrapper--phone">+7 (916) 848 42 80</a>

                </div>

            </div>

            <div class="contacts__wrapper--element">

                <span class="contacts__wrapper--icon">
                     <img src="<?php bloginfo('template_directory'); ?>/img/icons/msg-icon.png" alt="">
                </span>

                <a href="#" class="contacts__wrapper--email">info@kamne-rez.ru</a>

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

            <form action="" class="contacts__form">

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
