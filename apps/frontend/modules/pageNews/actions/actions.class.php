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
        $categorys = VtpCategoryTable::getAllCategoryFront();
        if ($categorys) {
            $this->categorys = $categorys;

        } else {
            return $this->redirect404();
        }

    }

    public function executeCategoryNews(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        if ($slug) {
            $category = VtpCategoryTable::getCategoryBySlug($slug);
            if ($category) {
                $this->catName = $category->getName();
                $this->url_paging = 'category_new';
                $this->page = $this->getRequestParameter('page', 1);
                $pager = new sfDoctrinePager('AdArticle', 4);
                $pager->setQuery(AdArticleTable::getListArticle($category->getId()));
                $pager->setPage($this->page);
                $pager->init();
                $this->pager = $pager;
                $this->listArticle = $pager->getResults();
            } else {
                return $this->redirect404();
            }

        } else {
            return $this->redirect404();
        }

    }

    public function executeNewDetail(sfWebRequest $request)
    {
        $slug = $request->getParameter('slug');
        $article = AdArticleTable::getInstance()->createQuery()->andWhere('slug=?', $slug)->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->andWhere('is_active=?', 2)->fetchArray();
        if (!empty($article)) {
            $this->article = $article[0];
        } else {
            return $this->redirect404();
        }

    }

}
