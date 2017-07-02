<div class="header">
    <div class="grid">
        <div class="header-1-3" style="position:relative; min-height:10px;">
            <div class="logo">
                <a href="/"><img src="/images/logo/newlandhouse.png" alt="Newland Serviced Apartment"
                                 style="max-width:100%"/></a>
            </div>
        </div>
        <div class="header-2-3">
            <div class="top-menu">
                <div class="langbar" align="right">
                    <a href="/vn/">Tiếng Việt</a> | <a href="/">English</a> | <a href="/kr/">Korean</a>
                </div>
            </div>
            <div class="hotline-banner hide-on-mobile hide-on-tab hide-on-pad">
                <div class="col-1-3">
                    <div class="hotline-header">
                        <a href="tel:0971.000.953">0971.000.953 <i class="fa fa-caret-down"></i></a>

                        <div class="box">
                            <div> Newland 1: 043.5558818 - 0982.208.267</div>
                            <div>Newland 6: 043.7834801 - 0988.438.530</div>
                            <div> Newland 7: 043.5558456 - 0936.972.260</div>
                            <div> Newland 8: 043.7831999 - 0978.158.154</div>
                            <div> Newland 9: 043.7850808 - 0932.602.266</div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="email-header">
                        <a href="mailto:info@newlandhouse.vn">info@newlandhouse.vn <i
                                    class="fa fa-caret-down"></i></a>

                        <div class="box">
                            <div> Newland 1: nl1@newlandhouse.vn</div>
                            <div> Newland 6: nl6@newlandhouse.vn</div>
                            <div> Newland 7: nl7@newlandhouse.vn</div>
                            <div> Newland 8: nl8@newlandhouse.vn</div>
                            <div> Newland 9: nl9@newlandhouse.vn</div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="feedback-header"><a href="/feedback/">Feedback</a></div>
                </div>
            </div>
            <div class="menubar" id="menubar">
                <ul class="nav hide-on-pad hide-on-tab hide-on-mobile" id="navbar">
                    <li class=" active">
                        <a href="/"><?php echo __("Trang chủ"); ?></a>
                    </li>
                    <li class="">
                        <a href="<?php echo url_for2('about_us'); ?>"><?php echo __('Về chúng tôi') ?></a>
                    </li>
                    <li class="">
                        <a href="<?php echo url_for2('chain'); ?>"><?php echo __("Căn hộ") ?></a>
                    </li>
                    <li class="">
                        <a href="<?php echo url_for2('services'); ?>"><?php echo __('Dịch vụ') ?></a>
                    </li>
                    <li class="">
                        <a href="/photos/"><?php echo __('Bộ sưu tập') ?></a>
                        <?php
                            if(isset($listAlbum) && count($listAlbum)){
                                echo '<ul class="mnu-one-col">';
                                foreach ($listAlbum as $album){
                                    ?>
                                    <li><a href="/photo-newland-1/"><?php echo $album['name']; ?></a></li>
                                    <?php
                                }
                                echo '</ul>';
                            }
                        ?>
                    </li>
                    <li class="">
                        <a href="<?php echo url_for2('news'); ?>"><?php echo __('Tin tức') ?></a>
                    </li>

                </ul>
                <ul class="nav hide-on-pc " id="navmobile">
                    <li><a href="#menu" class="fa fa-bars"></a></li>
                    <li class="active"><a href="/" class="fa fa-home"></a></li>
                </ul>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="menubar menubarmobile" id="menubar-mobile" style="position:relative">
        <a href="/" class="fa fa-home"></a>
        <a href="#menu" class="fa fa-bars"></a>
        <a href="/" class="fa fa-search" id="btn-search-mobile"></a>

        <div class="box-search-mobile">
            <form action="/search/" id="searchformmobile">
                <input name="qr" placeholder="Keyword" type="text">
                <a class="fa fa-share" href="#" onClick="$('#searchformmobile').submit(); return false"></a>
            </form>
        </div>
    </div>
</div>

<div class="line-header"></div>