<div class="col-1-1">
    <div class="title-first-home"><span><?php echo __('Danh sách phòng') ?></span></div>
    <div class="c20 hide-on-mobile"></div>
</div>
<?php if ($listRoom) {
    foreach ($listRoom as $room) {
        ?>
        <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
            <div class="">
                <div class="image-apart">
                    <div class=""></div>
                    <a href="<?php echo url_for1('@room_detail?slug='.$room['slug']) ?>"><img
                            src="<?php echo VtHelper::getPathImage($img['image_path'], sfConfig::get('app_product_images', 'products')) ?>" alt="Studio apartment 2"
                            width="100%"></a>
                </div>
                <h2 class="pro-name"><a href="<?php echo url_for1('@room_detail?slug='.$room['slug']) ?>"><?php echo $room['product_name'] ?></a></h2>

                <div class="info-apart">
                    <?php echo $chain['address'] ?>
                    <div class="c10"></div>
                </div>
                <div class="c10"></div>
                <div class="price-book">
            	<span class="col-2-3">
                	<div class="price"><span><?php echo $room['price'] ?> <?php echo __('Nghìn') ?></span>/<?php echo __('Tháng') ?></div>
                    <div class="price"><span><?php echo $room['price_promotion'] ?> <?php echo __('Nghìn') ?></span>/<?php echo __('Ngày') ?></div>
                </span>
                <span class="col-1-3" style="padding:0px;">
                	<a href="/booking/?idroom=106" class="quick-book"><?php echo __('Book') ?> <i class="fa fa-chevron-right"
                                                                              aria-hidden="true"></i></a>
                </span>

                    <div class="c"></div>
                </div>
            </div>

        </div>
        <div class="c20 mobile-break"></div>
        <?php
    }
} ?>
