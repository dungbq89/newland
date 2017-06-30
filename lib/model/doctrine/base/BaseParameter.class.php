<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Parameter', 'doctrine');

/**
 * BaseParameter
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $priority
 * @property integer $cat_id
 * @property boolean $is_active
 * @property string $lang
 * 
 * @method string    getName()      Returns the current record's "name" value
 * @method integer   getPriority()  Returns the current record's "priority" value
 * @method integer   getCatId()     Returns the current record's "cat_id" value
 * @method boolean   getIsActive()  Returns the current record's "is_active" value
 * @method string    getLang()      Returns the current record's "lang" value
 * @method Parameter setName()      Sets the current record's "name" value
 * @method Parameter setPriority()  Sets the current record's "priority" value
 * @method Parameter setCatId()     Sets the current record's "cat_id" value
 * @method Parameter setIsActive()  Sets the current record's "is_active" value
 * @method Parameter setLang()      Sets the current record's "lang" value
 * 
 * @package    Web_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParameter extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('parameter');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Tên',
             'length' => 255,
             ));
        $this->hasColumn('priority', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('cat_id', 'integer', 8, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 8,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => false,
             'default' => false,
             'comment' => 'Trạng thái',
             ));
        $this->hasColumn('lang', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Đa ngôn ngữ',
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $vtblameable0 = new Doctrine_Template_VtBlameable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($vtblameable0);
        $this->actAs($timestampable0);
    }
}