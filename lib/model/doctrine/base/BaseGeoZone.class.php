<?php

/**
 * BaseGeoZone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $GeoZone
 * 
 * @method integer             getId()      Returns the current record's "id" value
 * @method string              getName()    Returns the current record's "name" value
 * @method Doctrine_Collection getGeoZone() Returns the current record's "GeoZone" collection
 * @method GeoZone             setId()      Sets the current record's "id" value
 * @method GeoZone             setName()    Sets the current record's "name" value
 * @method GeoZone             setGeoZone() Sets the current record's "GeoZone" collection
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGeoZone extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('geo_zone');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('City as GeoZone', array(
             'local' => 'id',
             'foreign' => 'geo_zone_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}