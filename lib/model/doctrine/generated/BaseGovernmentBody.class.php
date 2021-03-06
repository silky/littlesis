<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseGovernmentBody extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('government_body');
    $this->hasColumn('is_federal', 'boolean', null, array('type' => 'boolean'));
    $this->hasColumn('state_id', 'integer', null, array('type' => 'integer'));
    $this->hasColumn('city', 'string', 50, array('type' => 'string', 'length' => '50'));
    $this->hasColumn('county', 'string', 50, array('type' => 'string', 'length' => '50'));

    $this->option('collate', 'utf8_unicode_ci');
    $this->option('charset', 'utf8');
  }

  public function setUp()
  {
    $this->hasOne('AddressState as State', array('local' => 'state_id',
                                                 'foreign' => 'id',
                                                 'onUpdate' => 'CASCADE'));

    $extension0 = new Extension();
    $this->actAs($extension0);
  }
}