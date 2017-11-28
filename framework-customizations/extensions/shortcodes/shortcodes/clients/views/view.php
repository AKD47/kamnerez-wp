<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="clients">

    <div class="container">

        <h3 class="title">Наши клиенты и партнеры</h3>

<!--        --><?php //fw_print($atts)?>

        <ul class="clients__tabs">

            <?php foreach($atts['clients'] as $key => $value) {?>

                <li><a href="#<?= $key ?>" class="<?= ($key==0)?'active':'' ?>"><?= $value['title']?></a></li>

            <?php }?>

        </ul>

        <div class="clients__wrapper">

            <?php foreach($atts['clients'] as $key => $value) {?>

                <div id="<?= $key ?>" class="clients__wrapper--box">

                    <div class="clients__items">

                        <?php foreach($value['tabs'] as $att) {?>

                            <?php /*fw_print($att)*/?>

                            <div class="clients__items--elements">

                                <a href="<?= $att['link_top']?>" class="clients__items--element" target="_blank">
                                    <img src="<?= $att['image_top']['url']?>" alt="">
                                </a>

                                <a href="<?= $att['link_bottom']?>" class="clients__items--element" target="_blank">
                                    <img src="<?= $att['image_bottom']['url']?>" alt="">
                                </a>

                            </div>

                        <?php } ?>


                    </div>

                </div>

            <?php }?>

        </div>

    </div>

</section>
