<?php

/**
 * AdArticleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AdArticleTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AdArticleTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AdArticle');
    }

    public static function checkSlug($slug, $id)
    {
        $query = AdArticleTable::getInstance()->createQuery('a')
            ->select('a.slug')
            ->where('a.slug=?', $slug)
            ->andWhere('a.id<>?', $id);
        return $query;
    }

    public static function getSearchArticle($keyword,$articleId='')
    {
        $keyword = addcslashes($keyword, sfConfig::get('app_addcslashes_charlist', "'%_-\\"));
        $q= AdArticleTable::getInstance()->createQuery('a')
            ->select('a.id, a.title as name')
            ->where('LOWER(a.title) like LOWER(?) COLLATE utf8_bin', '%' . trim($keyword) . '%')

            ->andWhere('a.is_active=?', VtCommonEnum::NUMBER_TWO)
            ->andWhere('a.lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->orderBy('updated_at desc');
        if ($articleId!=''){
            $q->andWhere('a.id<>?', $articleId);
        }
        return $q;

    }

    public static function getArticleSameByCategory($article_id, $category_id, $limit = 5)
    {
        return self::getActiveArticleQuery(VtCommonEnum::portalDefault)
            ->addWhere('id <> ?', $article_id)
            ->addWhere('category_id = ?', $category_id)
            ->limit($limit)
            ->orderBy('a.is_hot DESC, a.published_time desc')
            ->execute();
    }

    public static function getArticleArrayId($arrayId)
    {
        return AdArticleTable::getInstance()->createQuery('a')
            ->select('a.id, a.title as name')
            ->whereIn('a.id', $arrayId)
            ->andWhere('a.lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->orderBy('a.updated_at desc');
    }

    public static function getArticleByCategoryId($categoryID)
    {
        return AdArticleTable::getInstance()->createQuery('a')
            ->where('a.category_id=?', $categoryID)->execute();
    }

    /*
     * Frontend BEGIN
     */

    public static function getActiveArticleQuery()
    {
        return AdArticleTable::getInstance()->createQuery('a')
            ->where('a.is_active=?', VtCommonEnum::NUMBER_TWO)
            ->andWhere('a.published_time is null or a.published_time <= ?', date('Y-m-d H:i:s', time()))
            ->andWhere('(a.expiredate_time is null or a.expiredate_time >= ?)', date('Y-m-d H:i:s', time()))
            ->andWhere('a.lang=?', sfContext::getInstance()->getUser()->getCulture());
    }

    public static function getRandomArticle($attributes, $limit)
    {
        return self::getActiveArticleQuery()
            ->select('a.title, a.alttitle, a.header, a.image_path, a.slug, a.published_time')
            ->andWhere('a.attributes & ?=?', array($attributes, $attributes))
            ->orderBy('a.published_time desc')
            ->limit($limit)
            ->fetchArray();
    }

    public static function getCatIdArticlePublish()
    {
        return self::getActiveArticleQuery()
            ->select('a.category_id')
            ->fetchArray();
    }

    public static function getArticleBySlug($slug)
    {
        return self::getActiveArticleQuery()
            ->addWhere('a.slug=?', $slug)
            ->fetchOne();
    }


    //danh sách cái tin tưc cùng chuyên mục
    public static function getArticleRelatedByCatId( $catId, $article_id, $limit)
    {
        return self::getActiveArticleQuery()
            ->select('a.title, a.header, a.image_path, a.slug, a.published_time')
            ->andWhere('a.category_id=?', $catId)
            ->andWhere('a.id <> ?', $article_id)
            ->orderBy('a.is_hot DESC, a.published_time desc')
            ->limit($limit)
            ->fetchArray();
    }

    //Bài viết liên quan
    public static function getListArticleRelated( $article_id, $limit = null)
    {
        $querry = self::getActiveArticleQuery()
            ->select('a.id,a.title,a.slug')
            ->innerJoin("a.VtpCategory r ON r.related_article_id=a.id")
            ->where('r.article_id=?', $article_id)
            ->orderBy('a.is_hot DESC, a.published_time desc');
        if ($limit)
            $querry->limit($limit);
        return $querry->fetchArray();
    }

    /**
     * Function used in
     * @param $catId
     * @return mixed
     */
    public static function getListArticle($catId)
    {
        $query =  self::getActiveArticleQuery()
            ->select('a.title, a.alttitle, a.header, a.image_path, a.slug, a.published_time')
            ->andWhere('a.category_id=?', $catId)
            ->orderBy('a.published_time desc');
        return $query;
    }


    /**
     * Hàm lấy danh sách tin tức
     * @param null $parentId
     * @return mixed
     */
    public static function getArticlePublish( $parentId = null)
    {
        $query = self::getActiveArticleQuery()
            ->innerJoin("a.AdArticleCategory c ON c.id = a.category_id")
            ->andWhere(($parentId != '') ? 'parent_id=?' : '(parent_id=? or parent_id is null)', $parentId);
        return $query->execute();
    }

    //Hàm lấy tất cả các bài viết theo category slug

    public static function getArticleByCategorySlug( $catSlug, $limit)
    {
        $query = self::getActiveArticleQuery()
            ->select('a.title, a.header, a.image_path, a.slug, a.published_time')
            ->distinct()
            ->addFrom('AdCategory c')
            ->leftJoin('c.ParentCategory p')
            ->andWhere('c.type="N"')
            ->andWhere('(a.category_id=c.id or a.category_id=p.id)')
            ->andWhere('c.slug=?', $catSlug)
            ->orderBy('a.is_hot DESC, a.published_time DESC')
            ->limit($limit);
        return $query->execute();
    }


    public static function getHotArticle($limit = 5)
    {
        return self::getActiveArticleQuery()
            ->select('a.title, a.slug, a.published_time')
            ->limit($limit)
            ->addWhere('a.is_hot = ?', 1)
            ->orderBy('a.priority, a.published_time DESC')
            ->execute();

    }

    /**
     * @param $portalId
     * @param $catSlug
     * @param $limit
     * @return mixed
     */
    public static function getArticleByCategorySlugQuery($catSlug = '', $limit, $promotion = false)
    {
        $query = self::getActiveArticleQuery()
            ->select('a.title, a.header, a.image_path, a.slug, a.published_time')
            ->distinct()
            ->addFrom('AdCategory c')
            ->leftJoin('c.ParentCategory p')
            ->andWhere('c.type="N"')
            ->andWhere('(a.category_id=c.id or a.category_id=p.id)')
            ->orderBy('a.published_time DESC')
            ->limit($limit);
        if ($catSlug != '') {
            $query->andWhere('c.slug=?', $catSlug);
        }

        return $query;
    }

    public static function updateHitCounter($id){
        $query=AdArticleTable::getInstance()->createQuery()
            ->update()
            ->set('hit_count', '1+hit_count')
            ->where('id=?',$id);
        return $query->execute();
    }
    /**
     * Bai viet xem nhieu
     */
    public static function getMostViewNews($limit = 10)
    {
        return self::getActiveArticleQuery()
            ->limit($limit)
            ->orderBy('a.hit_count, a.published_time DESC');
    }
}