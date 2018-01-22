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
