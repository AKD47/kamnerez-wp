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
        <div class="preloader"><img src="<?php bloginfo('template_directory'); ?>/img/content/footer__logo.png"
                                    class="c-gif js-gif"></div>
    </div>

    <?php wp_head(); ?>
</head>

<body>
<header class="header">

    <div class="container">

        <a href="/" class="header__logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/content/top-logo.png" alt="logotype">
        </a>

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
                            <li><a href="/products/countertops-catalog">Столешницы</a></li>
                            <li><a href="/products">Кухонные столешницы</a></li>
                            <li><a href="/products">Столешницы из агломерата</a></li>
                            <li><a href="/products">Столешницы из гранита</a></li>
                            <li><a href="/products">Столешницы из мрамора</a></li>
                            <li><a href="/products">Столешницы из оникса</a></li>
                            <li><a href="/products">Интегрированные мойки</a></li>
                            <li><a href="/products">Барные стойки</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="/products">Подлокотники</a></li>
                            <li><a href="/products">Подлокотники из агломерата</a></li>
                            <li><a href="/products">Подлокотники из гранита</a></li>
                            <li><a href="/products">Подлокотники из мрамора</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="/products">Ступеньки</a></li>
                            <li><a href="/products">Ступеньки из агломерата</a></li>
                            <li><a href="/products">Ступеньки из гранита</a></li>
                            <li><a href="/products">Ступеньки из мрамора</a></li>
                        </ul>
                        <ul class="header__submenu--elements">
                            <li><a href="/products">Камины</a></li>
                            <li><a href="/products">Мозаика и пано</a></li>
                            <li><a href="/products">Резьба по камню</a></li>
                            <li><a href="/products">Эксклюзив изделия из камня</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/services" target="_blank">услуги
                        <span class="mobile-submenu"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </a>
                    <div class="header__submenu">
                        <span class="header__submenu--close"></span>
                        <ul class="header__submenu--elements">
                            <li><a href="/services">Термообработка</a></li>
                            <li><a href="/services">Полоса противоскольжения, бучардирование</a></li>
                            <li><a href="/services">Полировка мрамора и гранита</a></li>
                            <li><a href="/services">Пескоструйная очистка натурального камня</a></li>
                            <li><a href="/services">Очистка и реставрация натурального камня</a></li>
                            <li><a href="/services">Рисунок на мраморе и граните</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/our-works" target="_blank">наши работы</a></li>
                <li><a href="/contacts" target="_blank">контакты</a></li>
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

            <form id="header-form" class="header__callback-form" action="">

                <input id="header-form-name" class="header__callback-form--field" name="name" type="text"
                       placeholder="Ваше имя" minlength="2" maxlength="20" required>
                <input id="header-form-email" class="header__callback-form--field" name="email" type="text"
                       placeholder="E-mail" minlength="2" maxlength="50" required>
                <textarea id="header-form-text" class="header__callback-form--msg" name="message"
                          placeholder="Ваще сообщение" minlength="2" maxlength="250" required></textarea>

                <input id="header-form-submit" class="header__callback-form--submit" type="submit" value="отправить">

            </form>

        </div>

    </div>

</header>

