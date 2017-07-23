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
</div>