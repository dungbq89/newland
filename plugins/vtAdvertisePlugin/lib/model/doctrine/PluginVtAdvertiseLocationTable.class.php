<?php

/**
 * PluginVtAdvertiseLocationTable
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginVtAdvertiseLocationTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   * @return object PluginVtAdvertiseLocationTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('PluginVtAdvertiseLocation');
  }

  /**
   * Tra ve truy van lay ra id quang cao theo ten
   * @author dongvt1
   * @created on 18/04/2013
   */
  public function getLocationByName($name)
  {
    $result = $this->createQuery()
        ->where('name = ?', $name)
        ->fetchOne();
    return $result;
  }
}
