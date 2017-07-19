<?php

/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 7/6/2017
 * Time: 3:25 PM
 */
class pageHomeComponents extends sfComponents
{
    public function executeSlide(sfWebRequest $request)
    {
        $this->slide = AdAdvertiseTable::getAdvertiseV2('homepage');
    }
    public function executeBooking(sfWebRequest $request)
    {
        $this->form = new FormBooking();
    }
    public function executeRoomListHome(sfWebRequest $request)
    {
        $productHome = VtpProductsTable::getHomeProducts(10);
        if($productHome){
            $this->products = $productHome;
        }else{
            return sfView::NONE;
        }
    }

    public function executeRoomHot(sfWebRequest $request)
    {
        $productHot = VtpProductsTable::getHotProducts(4);
        if($productHot){
            $this->products = $productHot;
        }else{
            return sfView::NONE;
        }
    }
}
