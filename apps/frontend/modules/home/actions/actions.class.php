<?php

/**
 * home actions.
 *
 * @package    ilamarca
 * @subpackage home
 * @author     pinika
 * @version    1
 */
class homeActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->db_properties = PropertyTypeTable::getInstance()->getAllForSelect(true, 'Property type');
    $this->db_operations = OperationTable::getInstance()->getAllForSelect(true, 'Operation');
    $this->db_geo_zones  = GeoZoneTable::getInstance()->getAllForSelect(true, 'Place');
    $this->db_bedrooms   = BedroomTable::getInstance()->getAllForSelect(true, 'Bedrooms');
    $this->db_currencies = CurrencyTable::getInstance()->getAllForSelect();
  }
  
  /**
   * Executes contact action
   *
   * @param sfRequest $request A request object
   */
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new ContacForm();
    if($request->isMethod('POST'))
    {
       $this->processForm($request, $this->form);
    }
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $user = $form->getValues();
      ServiceSendEmail::sendEmailForContact($user);
      $this->getUSer()->setFlash('notice', true);
      $this->redirect('home/contact');
    }
   }
   

} // end class