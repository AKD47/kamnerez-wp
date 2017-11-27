<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="feedback">

    <div class="container">

        <h3 class="title">Обратная связь</h3>

        <p class="subtitle">Здесь вы можете отправть нам сообщение</p>

        <form class="feedback__form" action="">

            <div class="feedback__form--box">

                <input class="feedback__form--field" type="text" placeholder="Ваше имя">

                <input class="feedback__form--field" type="text" placeholder="Ваше e-mail">

            </div>

            <textarea class="feedback__form--msg" name="" id="" placeholder="Сообщение"></textarea>

            <input type="submit" class="feedback__form--submit" value="отправить">

        </form>

    </div>

</section>
