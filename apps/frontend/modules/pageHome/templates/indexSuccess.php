<style>
    .title-first-home, .title-cat-home{
        font-weight: 300;
    }
</style>
<div class="">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css">
    <div class="box-slide" style="min-height:500px">
        <div style="position:relative;">
        <?php include_component('pageHome', 'slide') ?>
<!--        --><?php //include_component('pageHome', 'booking') ?>
<!--        --><?php //include_partial("booking", array('form' => $form)); ?>

        </div>
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {

                    }
                });
            });

        </script>
    </div>
</div>

<div class="grid">
    <div class="c20"></div>

    <?php include_partial('pageHome/description'); ?>
    <?php include_component('pageHome','roomListHome'); ?>
</div>
<div class="bg-gray">
    <?php include_component('pageHome','roomHot'); ?>
    <div style="background:#FFF">
        <div class="grid">
            <div class="c30"></div>
            <div class="col-1-1">
                <h2 class="title-cat-home" style="text-transform:uppercase"><a href="/feedback/">Feedback</a>
                </h2>

                <div class="c20 hide-on-mobile"></div>
            </div>
            <div class="c30"></div>

            <div style="position:relative">
                <a href="#" class="swiper-chain-prev hide-on-mobile hide-on-tab"><i class="fa fa-angle-left"
                                                                                    aria-hidden="true"></i></a>
                <a href="#" class="swiper-chain-next hide-on-mobile hide-on-tab"><i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i></a>

                <div style="padding:0px 10px">
                    <div class="swiper-container article-slide">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class=""><a href="/feedback/test-2.html"><img
                                            src="temp/-uploaded_Mr.Paul Harding_cr_160x160.jpg" alt="Test 2"
                                            class="image-article"/></a></div>
                                <h3 class="item-name" style="padding-bottom:5px"><a
                                        href="/feedback/test-2.html">Mr.Paul Harding</a></h3>

                                <div style="font-weight:bold ;padding-bottom:5px">United State</div>
                                <div><span style="font-size:12px;"><em><span
                                                style="color: rgb(78, 78, 78); font-family: mallory, 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 21px;">I booked my room for three days but was so pleased with the friendly and accommodating staff, especially the manager, that I booked an additional three weeks. The hotel is situated in a narrow alley with an incredible mix of shops, restaurants, and residences. It&#39;s not at all touristy so one feels they are experiencing the real Hanoi with all of it&#39;s energy and humanity. This is where I&#39;ll stay next time and it&#39;s the place I&#39;ll recommend to friends. I feel very safe here.&nbsp;</span></em></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=""><a href="/feedback/test.html"><img
                                            src="temp/-uploaded_view_cr_160x160.jpg" alt="Feedback1"
                                            class="image-article"/></a></div>
                                <h3 class="item-name" style="padding-bottom:5px"><a href="/feedback/test.html">Kim
                                        J.</a></h3>

                                <div style="font-weight:bold ;padding-bottom:5px">South Korea</div>
                                <div><span style="font-size:12px;"><em><span
                                                style="color: rgb(78, 78, 78); font-family: mallory, 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 21px;">There was everything(including kitchen wares) for living inside the room. You can cook inside the room. And very cheap and clean.</span></em></span>
                                </div>
                            </div>
                        </div>
                        <script>

                            var pview = 2;
                            if ($(document).width() <= 980) {
                                pview = 2;

                            }
                            if ($(document).width() <= 768) {
                                pview = 1;

                            }

                            if ($(document).width() <= 480) {
                                pview = 1;

                            }
                            if ($(document).width() <= 320) {
                                pview = 1;


                            }

                            var swiper = new Swiper('.article-slide', {
                                pagination: '',
                                slidesPerView: pview,
                                paginationClickable: true,
                                spaceBetween: 30,
                                autoplay: 3000,
                                speed: 1000,
                                simulateTouch: false,
                                nextButton: '.swiper-chain-next',
                                prevButton: '.swiper-chain-prev',
                            });
                        </script>
                        <div class="c30"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>