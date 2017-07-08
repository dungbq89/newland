<?php
/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 7/6/2017
 * Time: 3:25 PM
 */
$listSlide = $slide['AdvertiseImage'];
if (!empty($listSlide)) {
    ?>
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <?php foreach ($listSlide as $item){ ?>
                <li style="position:relative">
                    <a href="<?php echo $item['link'] != '' ? $item['link'] : 'javascript:void(0)' ?>" target=""><img
                            src="<?php echo VtHelper::getPathImage($item['file_path'], sfConfig::get('app_advertise_images', 'advertise')) ?>"
                            alt="Slide 5 - English"
                            width="100%"/></a>
                    <?php } ?>
                </li>
                <!--                <li style="position:relative">-->
                <!--                    <a href="" target=""><img src="/images/slideshow/1.jpg" alt="Slide 5 - English"-->
                <!--                                              width="100%"/></a>-->

                </li>
            </ul>
        </div>
    </section>
<?php } ?>