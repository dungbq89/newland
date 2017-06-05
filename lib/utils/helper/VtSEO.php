<?php
/**
Muc dich cua class:
-  Tao ra cac ham SEO ung voi cac trang rieng biet chung
-  Tao ra cac function de tao cac SEO Keyword, SEO Description , ...
-  Quan ly ro rang...
 */
class VtSEO
{

    /**
     * Mo ta: Seo trang chu
     * @return array
     */
    public static function getSeoHomepage(){
        $meta = array();
        $seo_title = VtSEO::getPlainText(sfConfig::get('app_seo_title'),90);
        $meta['title'] = $seo_title;
        $seo_description = VtHelper::truncate(sfConfig::get('app_seo_description'),160,'...');
        $meta['description'] = $seo_description;
        $seo_keywords = VtHelper::truncate(sfConfig::get('app_seo_keywords'),160,'...');
        $meta['keywords'] = $seo_keywords;
        $meta['og_image'] = sfConfig::get('app_seo_ogImage');
        $meta['og_url'] = sfConfig::get('app_seo_url');
        $meta['og_description'] = $seo_description;
        $meta['og_title'] = $seo_title;
        $meta['og_site_name'] = $seo_title;
        $meta['dc_title'] = $seo_title;
        $meta['dc_keywords'] = $seo_keywords;
        $meta['news_keywords'] = $seo_keywords;
        return $meta;
    }

    //seo trang chuyen muc tin tuc
    public static function getSeoCategory($category){
        $meta = array();
        if($category->name){
            $seo_title = htmlspecialchars($category->name);
        }
        else{
            $seo_title = VtHelper::truncate(sfConfig::get('app_seo_title'),90,'...');
        }
        $meta['title'] = $seo_title;
        if($category->meta){
            $seo_description = htmlspecialchars($category->meta);
        }
        else{
            $seo_description = VtHelper::truncate(sfConfig::get('app_seo_description'),160,'...');
        }
        $meta['description'] = $seo_description;
        if($category->keywords){
            $seo_keywords = htmlspecialchars($category->keywords);
        }
        else{
            $seo_keywords = VtSEO::getPlainText(sfConfig::get('app_seo_keywords'),160);
        }
        $meta['keywords'] = $seo_keywords;
        if($category->image_path){
            $path = '/uploads/' . sfConfig::get('app_category_images') . $category->image_path;
            $meta['og_image'] = sfConfig::get('app_domain').VtHelper::getThumbUrl($path, 200, 200, 'article_default');
        }
        else{
            $meta['og_image'] = sfConfig::get('app_seo_ogImage');
        }

        $meta['og_url'] =sfConfig::get('app_domain').'/tin-tuc/'.$category->slug;
        $meta['og_description'] = $seo_description;
        $meta['og_title'] = $seo_title;
        $meta['og_site_name'] = $seo_title;
        $meta['dc_title'] = $seo_title;
        $meta['dc_keywords'] = $seo_keywords;
        $meta['news_keywords'] = $seo_keywords;
        return $meta;
    }

    //seo trang chi tiet tin tuc
    public static function getSeoArticle($article){
        $meta = array();
        if($article->title){
            $seo_title = htmlspecialchars($article->title);
        }
        else{
            $seo_title = VtHelper::truncate(sfConfig::get('app_seo_title'),90,'...');
        }
        $meta['title'] = $seo_title;
        if($article->meta){
            $seo_description = htmlspecialchars($article->meta);
        }
        else{
            $seo_description = VtHelper::truncate(sfConfig::get('app_seo_description'),160,'...');
        }
        $meta['description'] = $seo_description;
        if($article->keywords){
            $seo_keywords = htmlspecialchars($article->keywords);
        }
        else{
            $seo_keywords = VtSEO::getPlainText(sfConfig::get('app_seo_keywords'),160);
        }
        $meta['keywords'] = $seo_keywords;
        if($article->image_path){
            $path = '/uploads/' . sfConfig::get('app_article_images') . $article->image_path;
            $meta['og_image'] = sfConfig::get('app_domain').VtHelper::getThumbUrl($path, 200, 200, 'article_default');
        }
        else{
            $meta['og_image'] = sfConfig::get('app_seo_ogImage');
        }

        $meta['og_url'] =sfConfig::get('app_domain').'/chi-tiet-tin-tuc/'.$article->slug;
        $meta['og_description'] = $seo_description;
        $meta['og_title'] = $seo_title;
        $meta['og_site_name'] = $seo_title;
        $meta['dc_title'] = $seo_title;
        $meta['dc_keywords'] = $seo_keywords;
        $meta['news_keywords'] = $seo_keywords;
        return $meta;
    }


    //seo trang dien thoai thiet bi
    public static function getSeoProductCategory($object){
        $meta = array();
        if($object->name){
            $seo_title = htmlspecialchars($object->name);
        }
        else{
            $seo_title = VtHelper::truncate(sfConfig::get('app_seo_title'),90,'...');
        }
        $meta['title'] = $seo_title;
        if($object->meta){
            $seo_description = htmlspecialchars($object->meta);
        }
        else{
            $seo_description = VtSEO::getPlainText(sfConfig::get('app_seo_description'),160);
        }
        $meta['description'] = $seo_description;
        if($object->keywords){
            $seo_keywords = htmlspecialchars($object->keywords);
        }
        else{
            $seo_keywords = VtHelper::truncate(sfConfig::get('app_seo_keywords'),160,'...');
        }
        $meta['keywords'] = $seo_keywords;
        if($object->image_path){
            $path = '/uploads/' . sfConfig::get('app_category_images') . $object->image_path;
            $meta['og_image'] = sfConfig::get('app_domain').VtHelper::getThumbUrl($path, 200, 200, 'article_default');
        }
        else{
            $meta['og_image'] = sfConfig::get('app_seo_ogImage');
        }

        $meta['og_url'] =sfConfig::get('app_domain').'/danh-sach-sam-pham/'.$object->slug;
        $meta['og_description'] = $seo_description;
        $meta['og_title'] = $seo_title;
        $meta['og_site_name'] = $seo_title;
        $meta['dc_title'] = $seo_title;
        $meta['dc_keywords'] = $seo_keywords;
        $meta['news_keywords'] = $seo_keywords;
        return $meta;
    }

    //seo trang chi tiet dien thoai thiet bi
    public static function getSeoProductDetail($object){
        $meta = array();
        if($object->product_name){
            $seo_title = htmlspecialchars($object->product_name);
        }
        else{
            $seo_title = VtSEO::getPlainText(sfConfig::get('app_seo_title'),90);
        }
        $meta['title'] = $seo_title;
        if($object->meta){
            $seo_description = htmlspecialchars($object->meta);
        }
        else{
            $seo_description = VtSEO::getPlainText(sfConfig::get('app_seo_description'),160);
        }
        $meta['description'] = $seo_description;
        if($object->keywords){
            $seo_keywords = htmlspecialchars($object->keywords);
        }
        else{
            $seo_keywords = VtSEO::getPlainText(sfConfig::get('app_seo_keywords'),160);
        }
        $meta['keywords'] = $seo_keywords;
        if($object->image_path){
            $path = '/uploads/' . sfConfig::get('app_product_images') . $object->image_path;
            $meta['og_image'] = sfConfig::get('app_domain').VtHelper::getThumbUrl($path, 200, 200, 'article_default');
        }
        else{
            $meta['og_image'] = sfConfig::get('app_seo_ogImage');
        }

        $meta['og_url'] =sfConfig::get('app_domain').'/danh-sach-sam-pham/'.$object->slug;
        $meta['og_description'] = $seo_description;
        $meta['og_title'] = $seo_title;
        $meta['og_site_name'] = $seo_title;
        $meta['dc_title'] = $seo_title;
        $meta['dc_keywords'] = $seo_keywords;
        $meta['news_keywords'] = $seo_keywords;
        return $meta;
    }




    public static function getPlainText($str,$limit){
        $str = str_replace(array("\r\n", "\r"), "\n", strip_tags($str));
        $lines = explode("\n", $str);
        $new_lines = array();

        foreach ($lines as $i => $line) {
            if(!empty($line))
                $new_lines[] = trim($line);
        }
        $str = implode($new_lines);
        return VtHelper::substring($str,$limit);
    }

}