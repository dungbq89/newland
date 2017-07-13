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
                	<div class="price"><span>480 USD $</span>/Month</div>
                    <div class="price"><span>26 USD $</span>/Day</div>
                </span>
                <span class="col-1-3" style="padding:0px;">
                	<a href="/booking/?idroom=106" class="quick-book">Book <i class="fa fa-chevron-right"
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


<div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
    <div class="">
        <div class="image-apart">
            <div class=""></div>
            <a href="/all-rooms/studio-apartment-1-105.html"><img src="/temp/-uploaded_n103_cr_420x315.jpg"
                                                                  alt="Studio apartment 1" width="100%"></a>
        </div>
        <h2 class="pro-name"><a href="/all-rooms/studio-apartment-1-105.html">Studio apartment 1</a></h2>

        <div class="info-apart">Newland 1 - No.52 Lane 171 Nguyen Ngoc Vu street, Cau Giay, Hanoi
            <div class="c10"></div>
        </div>
        <div class="c10"></div>
        <div class="price-book">
            	<span class="col-2-3">
                	<div class="price"><span>380 USD $</span>/Month</div>
                    <div class="price"><span>21 USD $</span>/Day</div>
                </span>
                <span class="col-1-3" style="padding:0px;">
                	<a href="/booking/?idroom=105" class="quick-book">Book <i class="fa fa-chevron-right"
                                                                              aria-hidden="true"></i></a>
                </span>

            <div class="c"></div>
        </div>
    </div>

</div>
<div class="c20 mobile-break"></div>
<div class="c20 tab-break"></div>
<div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
    <div class="">
        <div class="image-apart">
            <div class=""></div>
            <a href="/all-rooms/2-bedrooms-apartment-104.html"><img
                    src="/temp/-uploaded-NL-N1_IMG_3590_cr_420x315.jpg" alt="2 bedrooms Apartment "
                    width="100%"></a>
        </div>
        <h2 class="pro-name"><a href="/all-rooms/2-bedrooms-apartment-104.html">2 bedrooms Apartment </a>
        </h2>

        <div class="info-apart">Newland 1 - No.52 Lane 171, Nguyen Ngoc Vu street, Cau Giay, Hanoi
            <div class="c10"></div>
        </div>
        <div class="c10"></div>
        <div class="price-book">
            	<span class="col-2-3">
                	<div class="price"><span>600 USD $</span>/Month</div>
                    <div class="price"><span>30 USD $</span>/Day</div>
                </span>
                <span class="col-1-3" style="padding:0px;">
                	<a href="/booking/?idroom=104" class="quick-book">Book <i class="fa fa-chevron-right"
                                                                              aria-hidden="true"></i></a>
                </span>

            <div class="c"></div>
        </div>
    </div>

</div>