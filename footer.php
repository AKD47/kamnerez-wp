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

            <a href="tel:<?= fw_get_db_customizer_option('phone_1');?>" class="footer__contacts--phone"><?= fw_get_db_customizer_option('phone_1');?></a>
            <a href="tel:<?= fw_get_db_customizer_option('phone_2');?>" class="footer__contacts--phone"><?= fw_get_db_customizer_option('phone_2');?></a>
            <a href="mailto:<?= fw_get_db_customizer_option('email');?>" class="footer__contacts--email"><?= fw_get_db_customizer_option('email');?></a>

        </div>

        <p class="footer__address concreate-adress"><?= fw_get_db_customizer_option('address');?></p>

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
