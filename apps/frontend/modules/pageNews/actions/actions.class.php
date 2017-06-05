<?php

/**
 * pageNewsDetails actions.
 *
 * @package    Vt_Portals
 * @subpackage pageNewsDetails
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageNewsActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        if($slug){
            $category = VtpCategoryTable::getCategoryBySlug($slug);
            if($category){
                $this->catName = $category->getName();
                $this->url_paging = 'category_news';
                $this->page = $this->getRequestParameter('page', 1);
                $pager = new sfDoctrinePager('AdArticle', 10);
                $pager->setQuery(AdArticleTable::getListArticle($category->getId()));
                $pager->setPage($this->page);
                $pager->init();
                $this->pager = $pager;
                $this->listArticle = $pager->getResults();
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
