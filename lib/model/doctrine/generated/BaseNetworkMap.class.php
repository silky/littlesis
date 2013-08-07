<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseNetworkMap extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('network_map');
    $this->hasColumn('user_id', 'integer', null, array('type' => 'integer', 'notnull' => true, 'notblank' => true));
    $this->hasColumn('data', 'clob', null, array('type' => 'clob', 'notnull' => true));
    $this->hasColumn('entity_ids', 'string', 200, array('type' => 'string', 'length' => '200'));
    $this->hasColumn('rel_ids', 'string', 200, array('type' => 'string', 'length' => '200'));
    $this->hasColumn('title', 'string', 100, array('type' => 'string', 'length' => '100'));
    $this->hasColumn('description', 'clob', null, array('type' => 'clob'));
    $this->hasColumn('width', 'integer', 4, array('type' => 'integer', 'notnull' => true, 'length' => '4'));
    $this->hasColumn('height', 'integer', 4, array('type' => 'integer', 'notnull' => true, 'length' => '4'));

    $this->option('collate', 'utf8_unicode_ci');
    $this->option('charset', 'utf8');
  }

  public function setUp()
  {
    $this->hasOne('sfGuardUser as User', array('local' => 'user_id',
                                               'foreign' => 'id',
                                               'onUpdate' => 'CASCADE'));

    $timestampable0 = new Doctrine_Template_Timestampable();
    $softdelete0 = new Doctrine_Template_SoftDelete(array('name' => 'is_deleted'));
    $this->actAs($timestampable0);
    $this->actAs($softdelete0);
  }
}