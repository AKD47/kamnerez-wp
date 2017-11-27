<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="adv">

    <div class="container">

        <h3 class="title">Наши преимущества</h3>

        <p class="subtitle">Главное требование к изделию из натурального камня – качество!</p>

        <?/*= fw_print($atts) */?>

        <div class="adv__wrapper">

            <? foreach ($atts['advantages'] as $adv) { ?>

                <div class="adv__wrapper--element">
                <span class="icon">
                    <img src="<?= $adv['photo']['url'] ?>" alt="">
                </span>
                    <p class="descr"><?= $adv['descr'] ?></p>
                </div>

            <? }; ?>

        </div>      

    </div>

</section>
