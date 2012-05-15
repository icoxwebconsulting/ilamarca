<?php

/**
 * BaseVideo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property text $youtube
 * @property string $uploaded
 * @property integer $real_property_id
 * @property RealProperty $RealProperty
 * 
 * @method integer      getId()               Returns the current record's "id" value
 * @method text         getYoutube()          Returns the current record's "youtube" value
 * @method string       getUploaded()         Returns the current record's "uploaded" value
 * @method integer      getRealPropertyId()   Returns the current record's "real_property_id" value
 * @method RealProperty getRealProperty()     Returns the current record's "RealProperty" value
 * @method Video        setId()               Sets the current record's "id" value
 * @method Video        setYoutube()          Sets the current record's "youtube" value
 * @method Video        setUploaded()         Sets the current record's "uploaded" value
 * @method Video        setRealPropertyId()   Sets the current record's "real_property_id" value
 * @method Video        setRealProperty()     Sets the current record's "RealProperty" value
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVideo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('video');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('youtube', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('uploaded', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('real_property_id', 'integer', 4, array(
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
        $this->hasOne('RealProperty', array(
             'local' => 'real_property_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}