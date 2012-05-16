<?php

/**
 * BaseRealProperty
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property text $detail
 * @property text $address
 * @property text $points_of_ref
 * @property text $transports
 * @property text $google_map
 * @property string $pdf_file
 * @property integer $square_meters
 * @property integer $covered_area
 * @property integer $years_antiquity
 * @property integer $qty_bathrooms
 * @property boolean $has_garage
 * @property boolean $has_swimming_pool
 * @property boolean $has_dep_of_service
 * @property boolean $has_balcony
 * @property boolean $has_bbq
 * @property string $owner_name
 * @property string $owner_phone
 * @property string $owner_email
 * @property integer $bedroom_id
 * @property integer $property_type_id
 * @property integer $geo_zone_id
 * @property integer $city_id
 * @property integer $neighborhood_id
 * @property integer $app_user_id
 * @property datetime $updated
 * @property Bedroom $Bedroom
 * @property PropertyType $PropertyType
 * @property GeoZone $GeoZone
 * @property City $City
 * @property Neighborhood $Neighborhood
 * @property AppUser $AppUser
 * @property Doctrine_Collection $OperationRealProperties
 * @property Doctrine_Collection $RealProperty
 * @property Doctrine_Collection $SearchMatches
 * 
 * @method integer             getId()                      Returns the current record's "id" value
 * @method string              getName()                    Returns the current record's "name" value
 * @method text                getDetail()                  Returns the current record's "detail" value
 * @method text                getAddress()                 Returns the current record's "address" value
 * @method text                getPointsOfRef()             Returns the current record's "points_of_ref" value
 * @method text                getTransports()              Returns the current record's "transports" value
 * @method text                getGoogleMap()               Returns the current record's "google_map" value
 * @method string              getPdfFile()                 Returns the current record's "pdf_file" value
 * @method integer             getSquareMeters()            Returns the current record's "square_meters" value
 * @method integer             getCoveredArea()             Returns the current record's "covered_area" value
 * @method integer             getYearsAntiquity()          Returns the current record's "years_antiquity" value
 * @method integer             getQtyBathrooms()            Returns the current record's "qty_bathrooms" value
 * @method boolean             getHasGarage()               Returns the current record's "has_garage" value
 * @method boolean             getHasSwimmingPool()         Returns the current record's "has_swimming_pool" value
 * @method boolean             getHasDepOfService()         Returns the current record's "has_dep_of_service" value
 * @method boolean             getHasBalcony()              Returns the current record's "has_balcony" value
 * @method boolean             getHasBbq()                  Returns the current record's "has_bbq" value
 * @method string              getOwnerName()               Returns the current record's "owner_name" value
 * @method string              getOwnerPhone()              Returns the current record's "owner_phone" value
 * @method string              getOwnerEmail()              Returns the current record's "owner_email" value
 * @method integer             getBedroomId()               Returns the current record's "bedroom_id" value
 * @method integer             getPropertyTypeId()          Returns the current record's "property_type_id" value
 * @method integer             getGeoZoneId()               Returns the current record's "geo_zone_id" value
 * @method integer             getCityId()                  Returns the current record's "city_id" value
 * @method integer             getNeighborhoodId()          Returns the current record's "neighborhood_id" value
 * @method integer             getAppUserId()               Returns the current record's "app_user_id" value
 * @method datetime            getUpdated()                 Returns the current record's "updated" value
 * @method Bedroom             getBedroom()                 Returns the current record's "Bedroom" value
 * @method PropertyType        getPropertyType()            Returns the current record's "PropertyType" value
 * @method GeoZone             getGeoZone()                 Returns the current record's "GeoZone" value
 * @method City                getCity()                    Returns the current record's "City" value
 * @method Neighborhood        getNeighborhood()            Returns the current record's "Neighborhood" value
 * @method AppUser             getAppUser()                 Returns the current record's "AppUser" value
 * @method Doctrine_Collection getOperationRealProperties() Returns the current record's "OperationRealProperties" collection
 * @method Doctrine_Collection getRealProperty()            Returns the current record's "RealProperty" collection
 * @method Doctrine_Collection getSearchMatches()           Returns the current record's "SearchMatches" collection
 * @method RealProperty        setId()                      Sets the current record's "id" value
 * @method RealProperty        setName()                    Sets the current record's "name" value
 * @method RealProperty        setDetail()                  Sets the current record's "detail" value
 * @method RealProperty        setAddress()                 Sets the current record's "address" value
 * @method RealProperty        setPointsOfRef()             Sets the current record's "points_of_ref" value
 * @method RealProperty        setTransports()              Sets the current record's "transports" value
 * @method RealProperty        setGoogleMap()               Sets the current record's "google_map" value
 * @method RealProperty        setPdfFile()                 Sets the current record's "pdf_file" value
 * @method RealProperty        setSquareMeters()            Sets the current record's "square_meters" value
 * @method RealProperty        setCoveredArea()             Sets the current record's "covered_area" value
 * @method RealProperty        setYearsAntiquity()          Sets the current record's "years_antiquity" value
 * @method RealProperty        setQtyBathrooms()            Sets the current record's "qty_bathrooms" value
 * @method RealProperty        setHasGarage()               Sets the current record's "has_garage" value
 * @method RealProperty        setHasSwimmingPool()         Sets the current record's "has_swimming_pool" value
 * @method RealProperty        setHasDepOfService()         Sets the current record's "has_dep_of_service" value
 * @method RealProperty        setHasBalcony()              Sets the current record's "has_balcony" value
 * @method RealProperty        setHasBbq()                  Sets the current record's "has_bbq" value
 * @method RealProperty        setOwnerName()               Sets the current record's "owner_name" value
 * @method RealProperty        setOwnerPhone()              Sets the current record's "owner_phone" value
 * @method RealProperty        setOwnerEmail()              Sets the current record's "owner_email" value
 * @method RealProperty        setBedroomId()               Sets the current record's "bedroom_id" value
 * @method RealProperty        setPropertyTypeId()          Sets the current record's "property_type_id" value
 * @method RealProperty        setGeoZoneId()               Sets the current record's "geo_zone_id" value
 * @method RealProperty        setCityId()                  Sets the current record's "city_id" value
 * @method RealProperty        setNeighborhoodId()          Sets the current record's "neighborhood_id" value
 * @method RealProperty        setAppUserId()               Sets the current record's "app_user_id" value
 * @method RealProperty        setUpdated()                 Sets the current record's "updated" value
 * @method RealProperty        setBedroom()                 Sets the current record's "Bedroom" value
 * @method RealProperty        setPropertyType()            Sets the current record's "PropertyType" value
 * @method RealProperty        setGeoZone()                 Sets the current record's "GeoZone" value
 * @method RealProperty        setCity()                    Sets the current record's "City" value
 * @method RealProperty        setNeighborhood()            Sets the current record's "Neighborhood" value
 * @method RealProperty        setAppUser()                 Sets the current record's "AppUser" value
 * @method RealProperty        setOperationRealProperties() Sets the current record's "OperationRealProperties" collection
 * @method RealProperty        setRealProperty()            Sets the current record's "RealProperty" collection
 * @method RealProperty        setSearchMatches()           Sets the current record's "SearchMatches" collection
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRealProperty extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('real_property');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('detail', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('address', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('points_of_ref', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('transports', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('google_map', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('pdf_file', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('square_meters', 'integer', 4, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('covered_area', 'integer', 4, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('years_antiquity', 'integer', 4, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('qty_bathrooms', 'integer', 4, array(
             'type' => 'integer',
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('has_garage', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('has_swimming_pool', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('has_dep_of_service', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('has_balcony', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('has_bbq', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('owner_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('owner_phone', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('owner_email', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('bedroom_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('property_type_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('geo_zone_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('city_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('neighborhood_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('app_user_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('updated', 'datetime', null, array(
             'type' => 'datetime',
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Bedroom', array(
             'local' => 'bedroom_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('PropertyType', array(
             'local' => 'property_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('GeoZone', array(
             'local' => 'geo_zone_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('City', array(
             'local' => 'city_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Neighborhood', array(
             'local' => 'neighborhood_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('AppUser', array(
             'local' => 'app_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('OperationRealProperty as OperationRealProperties', array(
             'local' => 'id',
             'foreign' => 'real_property_id'));

        $this->hasMany('Gallery as RealProperty', array(
             'local' => 'id',
             'foreign' => 'real_property_id'));

        $this->hasMany('SearchMatch as SearchMatches', array(
             'local' => 'id',
             'foreign' => 'real_property_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'detail',
              2 => 'address',
              3 => 'points_of_ref',
              4 => 'transports',
             ),
             ));
        $this->actAs($i18n0);
    }
}