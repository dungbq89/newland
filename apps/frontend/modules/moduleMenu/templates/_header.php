<div class="banner">
    <div class="logo fl">
        <a href="<?php echo url_for2('homepage');?>" target=""><img alt="logo" src="../../images/logo.jpg" width="190" height="60"/></a>

    </div>


    <div class="timkiem fl">
        <div class="search fl">
            <form method="get" action="<?php echo url_for1('@page_search') ?>"">
            <input type="text" class="inputSearch" name="keyword" id="keyword" placeholder="Từ khóa tìm kiếm..."/>
            <input type="submit" class="submitSearch" onclick="doSearch(); return false;" value="Tìm kiếm"/>
            </form>
        </div>
    </div>


</div>