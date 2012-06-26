<?php

/**
 * BaseNeighborhood
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $city_id
 * @property integer $country_id
 * @property City $City
 * @property Country $Country
 * @property Doctrine_Collection $VendorZones
 * @property Doctrine_Collection $Neighborhood
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getName()         Returns the current record's "name" value
 * @method integer             getCityId()       Returns the current record's "city_id" value
 * @method integer             getCountryId()    Returns the current record's "country_id" value
 * @method City                getCity()         Returns the current record's "City" value
 * @method Country             getCountry()      Returns the current record's "Country" value
 * @method Doctrine_Collection getVendorZones()  Returns the current record's "VendorZones" collection
 * @method Doctrine_Collection getNeighborhood() Returns the current record's "Neighborhood" collection
 * @method Neighborhood        setId()           Sets the current record's "id" value
 * @method Neighborhood        setName()         Sets the current record's "name" value
 * @method Neighborhood        setCityId()       Sets the current record's "city_id" value
 * @method Neighborhood        setCountryId()    Sets the current record's "country_id" value
 * @method Neighborhood        setCity()         Sets the current record's "City" value
 * @method Neighborhood        setCountry()      Sets the current record's "Country" value
 * @method Neighborhood        setVendorZones()  Sets the current record's "VendorZones" collection
 * @method Neighborhood        setNeighborhood() Sets the current record's "Neighborhood" collection
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNeighborhood extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('neighborhood');
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
        $this->hasColumn('city_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('country_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('City', array(
             'local' => 'city_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Country', array(
             'local' => 'country_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('VendorZone as VendorZones', array(
             'local' => 'id',
             'foreign' => 'neighborhood_id'));

        $this->hasMany('RealProperty as Neighborhood', array(
             'local' => 'id',
             'foreign' => 'neighborhood_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}