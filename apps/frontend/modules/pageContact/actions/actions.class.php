<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/13/15
 * Time: 11:17 PM
 */
class pageContactActions extends sfActions {
    public function executeIndex(sfWebRequest $request) {
        $slug = $request->getParameter('slug');
        if($slug){
            $html = AdHtmlTable::getHtmlByHtml($slug);
            if($html){
                $this->html = $html;
            }
            else{
                return $this->redirect404();
            }
        }
        else{
            return $this->redirect404();
        }
    }
}