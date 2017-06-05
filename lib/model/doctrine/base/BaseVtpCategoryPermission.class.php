<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VtpCategoryPermission', 'doctrine');

/**
 * BaseVtpCategoryPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $permission_id
 * 
 * @method integer               getCategoryId()    Returns the current record's "category_id" value
 * @method integer               getPermissionId()  Returns the current record's "permission_id" value
 * @method VtpCategoryPermission setCategoryId()    Sets the current record's "category_id" value
 * @method VtpCategoryPermission setPermissionId()  Sets the current record's "permission_id" value
 * 
 * @package    Web_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVtpCategoryPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vtp_category_permission');
        $this->hasColumn('category_id', 'integer', 8, array(
             'type' => 'integer',
             'comment' => 'Id của danh mục tin tức',
             'length' => 8,
             ));
        $this->hasColumn('permission_id', 'integer', 8, array(
             'type' => 'integer',
             'comment' => 'Id quyền',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}