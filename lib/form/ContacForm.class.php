<?php
/**
 * contac project form.
 *
 * @package    sf_icox
 * @subpackage form
 * @author     mauro
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

class ContacForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormInput(array()),
      'email'       => new sfWidgetFormInput(array()),
      'phone'       => new sfWidgetFormInput(array()),
      'address'       => new sfWidgetFormInput(array()),
      'message'     => new sfWidgetFormTextarea()
    ));
    
    $this->setValidators(array(
      'name'        => new sfValidatorString(array('max_length' => 150, 'required' => true), array('required' => 'this field is mandatory')),
      'email'       => new sfValidatorAnd(array(new sfValidatorEmail(array(),array('invalid'=>'Enter valid Email Address'))),array(),array('required' => 'this field is mandatory')),
      'phone'     => new sfValidatorString(array('max_length' => 150, 'required' => true), array('required' => 'this field is mandatory')),
      'address'     => new sfValidatorString(array('max_length' => 150, 'required' => FALSE), array('required' => 'this field is mandatory')),
      'message'     => new sfValidatorString(array('required' => true))

    ));


    $this->widgetSchema->setNameFormat('contac[%s]');


  }
}