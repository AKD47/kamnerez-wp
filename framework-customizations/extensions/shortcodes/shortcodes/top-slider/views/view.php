<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="top-slider">

   <!-- --><?php /*fw_print($atts) */?>

    <div id="top-slider" class="top-slider__wrapper">      

        <?php if (is_array($atts['slider']) && !empty($atts['slider'])) { ?>

            <?php foreach ($atts['slider'] as $banner) { ?>

                <div class="top-slider__wrapper--slide">

                    <img src="<?php echo $banner['slide']['url'] ?>" alt="">

                    <div class="top-slider__descr">

                        <h1><?php echo $banner['title'] ?></h1>

                        <p><?php echo $banner['subtitle'] ?></p>

                        <a href="<?= $banner['link']?>">
                            <span class="icon"></span>
                            подробнее</a>
                    </div>

                </div>

            <?php };?>

        <?php }; ?>      

    </div>


</section>
