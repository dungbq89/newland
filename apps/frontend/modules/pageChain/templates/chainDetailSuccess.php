<div class="grid grid-pad">
    <div class="c20"></div>

    <div class="crumb hide-on-mobile">
        <a href="/"> <?php echo __('Trang chủ') ?> </a> / <a href='/chain/'> <?php echo __('Căn hộ') ?></a>
    </div>

    <!--    <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>-->
    <!--    <link rel="stylesheet" type="text/css" href="highslide/highslide.css"/>-->

    <!--    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>-->

    <script type="text/javascript">
        hs.graphicsDir = '/highslide/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.wrapperClassName = 'dark borderless floating-caption';
        hs.fadeInOut = true;
        hs.dimmingOpacity = .75;
        if (hs.addSlideshow) hs.addSlideshow({
            interval: 5000,
            repeat: false,
            useControls: true,
            fixedControls: 'fit',
            overlayOptions: {
                opacity: .6,
                position: 'bottom center',
                hideOnMouseOut: true
            }
        });
    </script>


    <div class="c20"></div>
    <script src="js/modernizr.js"></script>
    <div class="col-1-1">
        <h1 class="news-name-detail"><?php echo $chain['name'] ?></h1>

    </div>
    <div class="c10"></div>
    <div></div>
    <?php include_partial('pageChain/chain', array('chain' => $chain, 'images' => $images)) ?>

    <div class="c10"></div>

    <?php include_partial('pageChain/mapChain', array('chain' => $chain, 'listParam' => $listParam)) ?>

    <div class="c20"></div>

    <?php include_partial('pageChain/roomList', array('chain' => $chain, 'listRoom' => $listRoom)) ?>

    <div class="c20 mobile-break"></div>
    <div class="c20 pad-break"></div>
    <div class="c20"></div>
    <div class="col-1-1">
        <div class="title-first-home"><span>SAME CATEGORY</span></div>
        <div class="c20 hide-on-mobile"></div>
    </div>


    <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
        <div class="">
            <div class="image-apart">

                <a href="/chain/hotel-name-5.html"><img src="/temp/-uploaded_Outlook 3_cr_420x315.JPG"
                                                        alt="Newland 9" width="100%"></a>
            </div>
            <h2 class="pro-name">Newland 9</h2>

            <div class="chain-info">
                <div><a href="/chain/hotel-name-5.html"><i class="fa fa-map-marker"></i> No.16 Lane 61 Dong Me
                        street, Me Tri Road, Trung Hoa, Cau Giay, Hanoi</a></div>
                <div><a href="/chain/hotel-name-5.html"><i class="fa fa-picture-o"></i> Photos</a></div>
                <div><a href="/chain/hotel-name-5.html"><i class="fa fa-map"></i> Map</a></div>
            </div>
        </div>
    </div>
    <div class="c20 mobile-break"></div>
    <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
        <div class="">
            <div class="image-apart">

                <a href="/chain/hotel-name-4.html"><img src="/temp/-uploaded_n8-letan_cr_420x315.jpg"
                                                        alt="Newland 8" width="100%"></a>
            </div>
            <h2 class="pro-name">Newland 8</h2>

            <div class="chain-info">
                <div><a href="/chain/hotel-name-4.html"><i class="fa fa-map-marker"></i> No 47 Lane 148 Tran Duy
                        Hung street, Trung Hoa, Cau Giay, Hanoi</a></div>
                <div><a href="/chain/hotel-name-4.html"><i class="fa fa-picture-o"></i> Photos</a></div>
                <div><a href="/chain/hotel-name-4.html"><i class="fa fa-map"></i> Map</a></div>
            </div>
        </div>
    </div>
    <div class="c20 mobile-break"></div>
    <div class="c20 tab-break"></div>
    <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
        <div class="">
            <div class="image-apart">

                <a href="/chain/hotel-name-2.html"><img
                        src="/temp/-uploaded_20141015_153637 copy 1_cr_420x315.jpg" alt="Newland 6"
                        width="100%"></a>
            </div>
            <h2 class="pro-name">Newland 6</h2>

            <div class="chain-info">
                <div><a href="/chain/hotel-name-2.html"><i class="fa fa-map-marker"></i> No.64 Lane 186 Tran Duy
                        Hung street, Trung Hoa, Cau Giay, Hanoi</a></div>
                <div><a href="/chain/hotel-name-2.html"><i class="fa fa-picture-o"></i> Photos</a></div>
                <div><a href="/chain/hotel-name-2.html"><i class="fa fa-map"></i> Map</a></div>
            </div>
        </div>
    </div>
    <div class="c20 mobile-break"></div>
    <div class="c20 pad-break"></div>
    <div class="col-1-4 pad-col-1-3 tab-col-1-2 ">
        <div class="">
            <div class="image-apart">

                <a href="/chain/newland-1.html"><img src="/temp/-uploaded-NL-N1_P1.-N1_cr_420x315.jpg"
                                                     alt="Newland 1" width="100%"></a>
            </div>
            <h2 class="pro-name">Newland 1</h2>

            <div class="chain-info">
                <div><a href="/chain/newland-1.html"><i class="fa fa-map-marker"></i> No.52 Lane 171 Nguyen Ngoc
                        Vu street, Trung Hoa, Cau Giay, Hanoi</a></div>
                <div><a href="/chain/newland-1.html"><i class="fa fa-picture-o"></i> Photos</a></div>
                <div><a href="/chain/newland-1.html"><i class="fa fa-map"></i> Map</a></div>
            </div>
        </div>
    </div>
    <div class="c20 mobile-break"></div>
    <div class="c20 tab-break"></div>
    <div class="c20 pc-break"></div>
    <div class="c30"></div>

</div>