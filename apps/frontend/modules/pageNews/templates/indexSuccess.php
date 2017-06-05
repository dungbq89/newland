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

						<p class="nhanvien">Mr Thắng:<span> <a href="tel:01633016868">01633.016.868</a></span></p>

						<p class="nhanvien"></p>

						<p class="nhanvien">Mr Lợi :<span> <a href="tel:01297504186">01297.504.186</a></span></p>
					</li>

                </ul>
            </div>
        </div>
    </div>
    <div class="right_pico fr">


        <div class="all">
            <div class="top_product2">
                <div id="it"> Tin tức</div>
            </div>
            <div class="views_sp views_sp03">
                <div class="lienhe">
                    <ul class="news-list all">
                        <?php
                        if (isset($listArticle) && count($listArticle)):
                            foreach ($listArticle as $item):
                                $path = '/uploads/' . sfConfig::get('app_article_images') . $item->getImagePath();
                                ?>
                                <li class="grid margin_right">
                                    <div class="img">
                                        <a href="<?php echo url_for('@article_detail?slug='. $item->getSlug()) ?>"
                                           title="<?php echo htmlspecialchars($item->getTitle()); ?>">
                                            <img src="<?php echo VtHelper::getThumbUrl($path, 255, 161) ?>" width="255"
                                                 height="161" alt=""/>
                                        </a>
                                    </div>
                                    <div class="g-content">
                                        <div class="g-row"><a href="<?php echo url_for('@article_detail?slug='. $item->getSlug()) ?>"
                                                              class="g-title"
                                                              title="<?php echo htmlspecialchars($item->getTitle()); ?>"><?php echo htmlspecialchars($item->getTitle()); ?></a></div>
                                        <div class="g-row"><?php echo VtHelper::truncate($item->getHeader(),280,'...'); ?>
                                        </div>
                                        <div class="g-row">
                                            <span class="time"><a
                                                    href="<a href="<?php echo url_for('@article_detail?slug='. $item->getSlug()) ?>">Xem
                                                    thêm</a></span>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                        endif;
                        ?>


                    </ul>
                    <div class="pages fl">
                        <?php
                        if ($pager->haveToPaginate()){
                            include_component("common", "pagging", array('redirectUrl'=>$url_paging,'pager'=>$pager,'vtParams'=>array('slug'=>sfContext::getInstance()->getRequest()->getParameter('slug'))));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    .slide {
        margin-top: 3px !important;
    }
</style>