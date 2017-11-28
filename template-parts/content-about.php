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

<section class="breadcrumbs">

    <div class="container">

        <ul class="breadcrumbs__pages">
            <li><a href="/">Главная</a></li>
            <li><a href="/about">Наше производство</a></li>
        </ul>

        <h1 class="title">О компании</h1>

    </div>

</section>

<section class="about">

    <div class="about__inner">

        <p class="about__descr"><span>Компания «Рублевский камнерез» была основана 2003 году.</span></p>
        <p class="about__descr">С момента основания компании
            руководством и коллективом были выбраны некоторые приоритетные направления развития.</p>

        <div class="about__photo">
            <img src="<?php bloginfo('template_directory'); ?>/img/content/about_1.png" alt="">
        </div>

        <div class="about__box">

            <h3 class="about__title">Работа с клиентом</h3>

            <p class="about__subtitle">Главным и первым пунктом мы обозначили работу с клиентом. </p>

            <p class="about__descr">Под этим подразумевается несколько правил безоговорочно соблюдаемых всеми
                сотрудниками компании:
                От
                первого запроса до выполнения заказа мы внимательно выслушиваем всю информацию, которую до нас хочет
                донести заказчик. Мы не делаем вид, что понимаем его, мы его понимаем.</p>


            <p class="about__descr">Если по нашей вине допускается
                брак при изготовлении или установке изделий из натурального камня, мы не перекладываем ответственность
                на плечи заказчика, мы просто исправляем свои ошибки.</p>

            <p class="about__descr">Рекомендации, которые сотрудники компании дают
                клиенту, носят исключительно конструктивный характер и преследуют одну цель: реализация замысла
                заказчика.</p>

            <p class="about__descr">Абсолютно исключается обман во всех его проявлениях. Такая фраза, как «работы любой
                сложности» не для нас. Не все сложности нам по плечу, но то, что мы можем предложить – мы можем
                сделать.</p>

            <p class="about__descr">Очень большой или очень маленький заказ - это не имеет для нас значения, отношение
                к клиенту
                будет всегда одинаковым. Архитекторы и дизайнеры, сотрудничающие с нами, могут рассчитывать на полное
                содействие в реализации проекта и выполнение всех взятых нами обязательств.</p>

        </div>

        <div class="about__box">

            <h3 class="about__title">Работа с клиентом</h3>

            <p class="about__subtitle">Главное требование к изделию из натурального камня – качество.</p>
            <p class="about__subtitle">Главное требование к
                облицовочно-укладочным работам – качество.</p>
            <p class="about__subtitle">Мы хотим, чтобы Вам нравилось то, что мы делаем.</p>

        </div>

        <a id="go_top" href="#" class="top">
            <span class="icon"></span>
        </a>

    </div>

</section>
