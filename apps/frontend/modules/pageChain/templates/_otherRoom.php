<?php
/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 7/14/2017
 * Time: 11:52 PM
 */
?>
<div class="c30"></div>
<div class="col-1-1">
    <div class="title-first-home" style="font-size:16px;">
        <span><?php echo __('Phòng khác') ?></span>
    </div>
</div>

<div class="c20"></div>

<?php
if ($listOtherRoom) {
    foreach ($listOtherRoom as $room) {
        ?>
        <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
            <div class="">
                <div class="image-apart">

                    <a href="<?php echo url_for1('@room_detail?slug=' . $room['slug']) ?>"><img
                            src="<?php echo VtHelper::getPathImage($room['image_path'], sfConfig::get('app_product_images', 'products')) ?>" alt="<?php echo $room['product_name'] ?>"
                            width="100%"></a>
                </div>
                <h2 class="pro-name"><a href="<?php echo url_for1('@room_detail?slug=' . $room['slug']) ?>"><?php echo $room['product_name'] ?></a></h2>

                <div class="info-apart"><?php echo $chain['address'] ?>
                    <div class="c10"></div>
                </div>
                <div class="c10"></div>
                <div class="price-book">
            	<span class="col-2-3">
                    <div class="price"><span><?php echo $room['price'] ?> <?php echo __('VNĐ') ?></span>/<?php echo __('Tháng') ?></div>
                    <div class="price"><span><?php echo $room['price_promotion'] ?> <?php echo __('VNĐ') ?></span>/<?php echo __('Ngày') ?></div>
<!--                	<div class="price"><span>380 USD $</span>/Month</div>-->
<!--                    <div class="price"><span>21 USD $</span>/Day</div>-->
                </span>
                <span class="col-1-3" style="padding:0px;">
                	<a href="/booking/?idroom=137" class="quick-book"><?php echo __('Book') ?> <i class="fa fa-chevron-right"
                                                                              aria-hidden="true"></i></a>
                </span>

                    <div class="c"></div>
                </div>
            </div>

        </div>
        <div class="c20 mobile-break"></div>
        <div class="c20 tab-break"></div>
    <?php }
} ?>

<div class="c20 mobile-break"></div>
<div class="c20 tab-break"></div>

<div class="c20 pc-break"></div>
<div class="c30"></div>
