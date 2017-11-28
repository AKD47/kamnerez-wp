<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <div class="preloader-wrap js-open">
        <div class="preloader"><img src="<?php bloginfo('template_directory'); ?>/img/content/footer__logo.png" class="c-gif js-gif"></div>
    </div>

    <?php wp_head(); ?>
</head>

<body>
<header class="header">

    <div class="container">

        <a href="/" class="header__logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/content/top-logo.png" alt="logotype">
        </a>

<!--        --><?php //wp_nav_menu(array(
//            'theme_location'  => 'primary',
//            'menu'            => '',
//            'container'       => 'nav',
//            'container_class' => 'header__navigation',
//            'container_id'    => '',
//            'menu_class'      => 'header__menu',
//            'menu_id'         => '',
//            'echo'            => true,
//            'fallback_cb'     => 'wp_page_menu',
//            'before'          => '',
//            'after'           => '',
//            'link_before'     => '',
//            'link_after'      => '',
//            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//            'depth'           => 0,
//            'walker'          => '',
//        ))?>

        <nav class="header__navigation">

            <a id="mobile-menu" href="#" class="header__trigger">
                <span class=""></span>
            </a>

            <ul class="header__menu">
                <li><a href="/about" target="_blank">наше Производство</a></li>
                <li><a href="/products" target="_blank">изделия
                        <span class="mobile-submenu"><i class="fa fa-chevron-down" aria-hidden="true"></i></span></a>
                    <div class="header__submenu">
                        <span class="header__submenu--close"></span>
                        <ul class="header__submenu--elements">
                            <li><a href="countertops-catalog.html">Столешницы</a></li>
                            <li><a href="countertops-catalog.html">Кухонные столешницы</a></li>
                            <li><a href="countertop-aglomerat.html">Столешницы из агломерата</a></li>
                            <li><a href="countertops-catalog.html">Столешницы из гранита</a></li>
                            <li><a href="countertops-catalog.html">Столешницы из мрамора</a></li>
                            <li><a href="countertops-catalog.html">Столешницы из оникса</a></li>
                            <li><a href="countertops-catalog.html">Интегрированные мойки</a></li>
                            <li><a href="countertops-catalog.html">Барные стойки</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="#">Подлокотники</a></li>
                            <li><a href="#">Подлокотники из агломерата</a></li>
                            <li><a href="#">Подлокотники из гранита</a></li>
                            <li><a href="#">Подлокотники из мрамора</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="#">Ступеньки</a></li>
                            <li><a href="#">Ступеньки из агломерата</a></li>
                            <li><a href="#">Ступеньки из гранита</a></li>
                            <li><a href="#">Ступеньки из мрамора</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="#">Камины</a></li>
                            <li><a href="#">Мозаика и пано</a></li>
                            <li><a href="#">Резьба по камню</a></li>
                            <li><a href="#">Эксклюзив изделия из камня</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="services.html" target="_blank">услуги
                        <span class="mobile-submenu"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </a>
                    <div class="header__submenu">
                        <span class="header__submenu--close"></span>
                        <ul class="header__submenu--elements">
                            <li><a href="countertops-catalog.html">Термообработка</a></li>
                            <li><a href="countertops-catalog.html">Полоса противоскольжения, бучардирование</a></li>
                            <li><a href="polishing.html">Полировка мрамора и гранита</a></li>
                            <li><a href="countertops-catalog.html">Пескоструйная очистка натурального камня</a></li>
                            <li><a href="countertops-catalog.html">Очистка и реставрация натурального камня</a></li>
                            <li><a href="countertops-catalog.html">Рисунок на мраморе и граните</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="our-works.html" target="_blank">наши работы</a></li>
                <li><a href="contacts.html" target="_blank">контакты</a></li>
            </ul>

        </nav>

        <div class="header__phones">

            <a href="#">+7 (495) 755 08 47</a>
            <a href="#">+7 (916) 848 42 80</a>

        </div>

        <a href="#" class="header__msg">
            <span class="header__msg--icon"></span>
        </a>

        <div class="header__callback">

            <span class="header__callback--close"></span>

            <h3 class="header__callback--title">Обратная связь</h3>

            <form class="header__callback-form" action="">

                <input class="header__callback-form--field" type="text" placeholder="Ваше имя" required>
                <input class="header__callback-form--field" type="text" placeholder="E-mail" required>
                <textarea id="" class="header__callback-form--msg" placeholder="Ваще сообщение" required></textarea>

                <input class="header__callback-form--submit" type="submit" value="отправить">

            </form>

        </div>

    </div>

</header>

