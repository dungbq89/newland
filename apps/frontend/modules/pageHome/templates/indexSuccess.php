<style>
    .title-first-home, .title-cat-home {
        font-weight: 300;
    }
</style>
<?php include_component('pageHome', 'slide') ?>

<div class="grid">
    <div class="c20"></div>

    <?php include_partial('pageHome/description'); ?>
    <?php include_component('pageHome', 'roomListHome'); ?>
</div>
<div class="bg-gray">
    <?php include_component('pageHome', 'roomHot'); ?>
</div>