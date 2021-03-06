<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseMembership extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('membership');
    $this->hasColumn('dues', 'integer', null, array('type' => 'integer'));

    $this->option('collate', 'utf8_unicode_ci');
    $this->option('charset', 'utf8');
  }

  public function setUp()
  {
    $this->hasMany('Relationship', array('local' => 'relationship_id',
                                         'foreign' => 'id'));

    $relationshipcategorytemplate0 = new RelationshipCategoryTemplate();
    $this->actAs($relationshipcategorytemplate0);
  }
}