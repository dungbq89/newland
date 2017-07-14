<?php

/**
 * VtpProductsTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class VtpProductsTable extends Doctrine_Table
{

    /**
     * Returns an instance of this class.
     *
     * @return object VtpProductsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('VtpProducts');
    }

    public static function checkSlug($slug, $id)
    {
        $query = VtpProductsTable::getInstance()->createQuery()
            ->select('slug')
            ->where('slug=?', $slug)
            ->andWhere('id<>?', $id);
        return $query;
    }

    public static function deleteProductByCategory($categoryId)
    {
        //Lay ra danh sach san pham thuoc category
        $q = VtpProductsTable::getInstance()->createQuery()
            ->select('id')
            ->where('category_id=?', $categoryId)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchArray();
        //Xoa hình ảnh của các sản phẩm đó
        VtpProductImageTable::deleteImageByProduct($q);
        //Xóa sản phẩm thuộc category
        return VtpProductsTable::getInstance()->createQuery()
            ->delete()
            ->whereIn('category_id', $categoryId)->execute();
    }

    /* Frontend */

    public static function getHomeProducts($limit)
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->select('product_name, description, image_path, link, slug, price, price_promotion')
            ->where('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->where('is_hot=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->orderBy('priority ASC')
            ->limit($limit)
            ->fetchArray();
    }

    // Lấy danh sách sản phẩm
    public static function getAllProduct()
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->select('id, product_name')
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchArray();
    }

    public function getProductName()
    {
        return "{$this->getProductName()}";
    }

    //Lay ten san pham theo Id
    public static function getProductById($id)
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->where('id=?', $id)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchOne();
    }

    // Lay san pham hien thi o menu right
    public static function getProductNew($limit, $portalId)
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->select('product_name, image_path, link, slug, price')
            ->where('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('portal_id=?', $portalId)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->orderBy('created_at DESC')
            ->limit($limit)
            ->fetchArray();
    }

    //Lay danh sach san pham o trang danh sach san pham
    public static function getListProducts($portalId, $slug)
    {
        $query = VtpProductsTable::getInstance()->createQuery('p')
            ->select('p.product_name, p.description, p.image_path, p.link, p.price, p.slug, p.price, p.price_promotion')
            ->innerJoin('p.VtpProducts cp')
            ->where('p.is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('p.portal_id=?', $portalId)
//            ->andWhere('p.lang=?',sfContext::getInstance()->getUser()->getCulture())
            ->orderBy('p.priority ASC');
        if ($slug != '') {
            $query->andWhere('cp.slug=?', $slug);
        }
        return $query;
    }

    //Lay san pham theo slug
    public static function getProductbySlug($slug, $portalId)
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->where('slug=?', $slug)
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('portal_id=?', $portalId)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchOne();
    }

    //Lay danh sach san pham theo chuyen muc
    public static function getProductByCategoryId($catId, $portalId)
    {
        return VtpProductsTable::getInstance()->createQuery()
            ->where('category_id=?', $catId)
            ->andWhere('portal_id=?', $portalId)
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchArray();
    }

    //Lay danh sach san pham theo chuyen muc
    public static function getProductByCatId($catId, $limit)
    {
        $query = VtpProductsTable::getInstance()->createQuery()
            ->where('category_id=?', $catId)
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->limit($limit)
            ->orderBy('updated_at DESC');
        return $query;
    }


    //Lay danh sach san pham theo chuyen muc
    public static function getProductHomeByCategory($catId, $limit)
    {
        $listChildCat = VtpProductsCategoryTable::getStrCategoryByParent($catId);
        $query = VtpProductsTable::getInstance()->createQuery()
            ->whereIn('category_id', explode(',', $listChildCat))
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('is_home=?', VtCommonEnum::NUMBER_ONE)
            ->limit($limit)
            ->orderBy('updated_at DESC');
        return $query;
    }

    public static function getSearchProduct($keyword)
    {
        $keyword = addcslashes($keyword, sfConfig::get('app_addcslashes_charlist', "'%_-\\"));
        $q = VtpProductsTable::getInstance()->createQuery('a')
            ->where('LOWER(a.product_name) like LOWER(?) COLLATE utf8_bin', '%' . trim($keyword) . '%')
            ->andWhere('a.is_active=1')
            ->orderBy('updated_at desc');
        return $q;

    }

    //Lay tat ca san pham theo chuyen muc hien thi trang danh sach
    public static function getAllProductByCategory($catId)
    {
        $listChildCat = VtpProductsCategoryTable::getStrCategoryByParent($catId);
        $query = VtpProductsTable::getInstance()->createQuery()
            ->whereIn('category_id', explode(',', $listChildCat))
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
//            ->andWhere('is_home=?', VtCommonEnum::NUMBER_ONE)
            ->orderBy('updated_at DESC');
        return $query;
    }

    public function getListProduct($catId)
    {
        $q = $this->createQuery()
            ->andWhere('category_id=?', $catId)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->andWhere('is_active=1')
            ->fetchArray();
        if (!empty($q)) {
            return $q;
        }
        return false;
    }


    public static function getProductbySlugV2($slug)
    {
        $q = VtpProductsTable::getInstance()->createQuery()
            ->where('slug=?', $slug)
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->fetchArray();
        if (!empty($q)) {
            return $q[0];
        }
        return false;
    }


    public static function getProductByCatIdV2($catId, $limit = 12)
    {
        $query = VtpProductsTable::getInstance()->createQuery()
            ->where('category_id=?', $catId)
            ->andWhere('is_active=?', VtCommonEnum::NUMBER_ONE)
            ->andWhere('lang=?', sfContext::getInstance()->getUser()->getCulture())
            ->limit($limit)
            ->orderBy('updated_at DESC')
            ->fetchArray();
        if (!empty($query)) {
            return $query;
        }
        return false;
    }
}
