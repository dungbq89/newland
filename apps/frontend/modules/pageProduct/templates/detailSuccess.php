<div class="clearfix"></div>
<?php include_component('moduleAdvertise', 'topOne'); ?>
<div class="clearfix"></div>


<div class="content fll">
    <div class="left_pico fl">


        <div class="loctim2">
            <h2><a href="/tu-van.html" title="Tư vấn">Tư vấn</a></h2>

            <div class="box_bottom">
                <ul class="list-tin-doc-nhieu">

                    <li>

                        <p class="nhanvien">Mr Thắng:<span> 01633.016.868</span></p>

                        <p class="nhanvien"></p>

                        <p class="nhanvien">Mr Lợi :<span> 0984.433.494</span></p>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="right_pico fr">


        <div class="all">
            <div class="top_product2">
                <div id="it"><?php echo htmlspecialchars($product->getProductName()) ?></div>
            </div>

            <div class="views_sp views_sp03">
                <?php
                $path = '/uploads/' . sfConfig::get('app_product_images') . $product->getImagePath();
                ?>
                <div class="chitiet_left fl">
                    <div class="anh_tin">
                        <img alt="<?php echo htmlspecialchars($product->getProductName()) ?>"
                             src="<?php echo VtHelper::getThumbUrl($path, 400, 300) ?>"
                             alt="<?php echo htmlspecialchars($product->getProductName()) ?>"
                             width="400" title="<?php echo htmlspecialchars($product->getProductName()) ?>"
                             itemprop="image" id="main-product-img-123"/>
                    </div>

                </div>
                <div class="chitiet_right fr">
                    <h1 itemprop="name" class="fn"><a href="#"
                                                      itemprop="url"><?php echo htmlspecialchars($product->getProductName()) ?></a>
                    </h1>

                    <div itemprop="offers">
                        <meta itemprop="priceCurrency" content="VND"/>

                        <?php
                        if ($product->getPricePromotion() && $product->getPricePromotion() != 0) {
                            if ($product->getPrice() && $product->getPrice() != 0) {
                                ?>
                                <div class="giachinhhang">Giá bán: <span><?php
                                        if ($product->getPrice()) {
                                            echo number_format($product->getPrice(), 0, ",", ".") . ' vnđ';
                                        } ?></span></div>

                                <div class="giaKM">Giá khuyến mại: <span itemprop="price"><?php
                                        echo number_format($product->getPricePromotion(), 0, ",", ".") . ' vnđ';
                                        ?>
                                    </span></div>
                            <?php
                            } else {
                                ?>
                                <div class="giaKM">Giá khuyến mại: <span itemprop="price"><?php
                                        if ($product->getPricePromotion()) {
                                            echo number_format($product->getPricePromotion(), 0, ",", ".") . ' vnđ';
                                        } else {
                                            echo 'Liên hệ';
                                        }
                                        ?>
                                    </span></div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="giachinhhang">Giá bán: <span><?php
                                    if ($product->getPrice()) {
                                        echo number_format($product->getPrice(), 0, ",", ".") . ' vnđ';
                                    } else {
                                        echo 'Liên hệ';
                                    }
                                    ?>
                                    </span></div>
                        <?php
                        }
                        ?>

                    </div>

                    <div itemprop="description" class="list_thongso all">
                        <?php echo nl2br($product->getDescription()); ?>
                    </div>

                    <p class="mienphis fl">
                </div>
                <div class="clearfix"></div>
                <div class="thogntin_sanpham all">
                    <ul class="list_thongtin">
                        <li><a href="javascript:;" id="tab-1"
                               onclick="changeTab('1', 'div-', 'tab-', '2', '', 'active'); return false;"
                               rel="nofollow">Chi tiết</a></li>

                    </ul>
                    <div class="chitiet_sp" id="div-1">

                        <?php echo $product->getContent(); ?>

                    </div>
                    <div class="chitiet_sp" id="div-2" style="display: none">
                        <div class="fb-comments" data-href="/bep-tu-chefs-eh-dih888.html" data-width="920"
                             data-numposts="10" data-colorscheme="light"></div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</div>
<style>
    .slide{
        margin-top: 3px !important;
    }
</style>