<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>

<footer class="footer">

    <div class="container">

        <a href="#" class="footer__logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/content/footer__logo.png" alt="">
        </a>

        <ul class="footer__nav">
            <li><a href="/">главная</a></li>
            <li><a href="/about">наше Производство</a></li>
            <li><a href="/products">изделия</a></li>
            <li><a href="/services">услуги</a></li>
            <li><a href="/our-works">наши работы</a></li>
            <li><a href="/contacts">контакты</a></li>
        </ul>

        <div class="footer__contacts">

            <a href="#" class="footer__contacts--phone">+7 (495) 755 08 47</a>
            <a href="#" class="footer__contacts--phone">+7 (916) 848 42 80</a>
            <a href="#" class="footer__contacts--email">info@kamne-rez.ru</a>

        </div>

        <p class="footer__address concreate-adress">
            Московская обл., г. Пушкино, <br>
            м-н Мамонтовка, ул. Рабочая, д.1, <br>
            территория завода НПО "РосДорМаш"
        </p>

    </div>

    <div class="footer__art">

        <div class="container">

            <p>2016 © Компания «Рублевский камнерез»  Все права защищены.</p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
