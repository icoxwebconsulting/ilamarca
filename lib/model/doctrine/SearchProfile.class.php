<?php

/**
 * SearchProfile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SearchProfile extends BaseSearchProfile
{
	/**
	 * Get string info from object
	 *
	 * @param object $sObject
	 * @return array
	 */
	public static function getStringInfoFromDBObject($sObject)
	{
		$query_str = '?';
		$criterios = '';
		$st_for_db = 'p.id > 0';

		if ($sObject->getPropertyTypeId()) {
			$criterios .= $sObject->PropertyType->getName().' | ';
			$query_str .= 'property_type='.$sObject->getPropertyTypeId().'&';
			$st_for_db .= ' AND p.property_type_id = '.$sObject->getPropertyTypeId();
		}
		if ($sObject->getBedroomId()) {
			$criterios .= $sObject->Bedroom->getName().' | ';
			$query_str .= 'bedroom='.$sObject->getBedroomId().'&';
			$st_for_db .= ' AND p.bedroom_id = '.$sObject->getBedroomId();
		}
		if ($sObject->getNeighborhoodId()) {
			$criterios .= $sObject->Neighborhood->getName().' | ';
			$query_str .= 'neighborhood='.$sObject->getNeighborhoodId().'&';
			$st_for_db .= ' AND p.neighborhood_id = '.$sObject->getNeighborhoodId();
		}
		if ($sObject->getGeoZoneId()) {
			$query_str .= 'geo_zone='.$sObject->getGeoZoneId().'&';
			$st_for_db .= ' AND p.geo_zone_id = '.$sObject->getGeoZoneId();
		}
		if ($sObject->getCityId()) {
			$query_str .= 'city='.$sObject->getCityId().'&';
			$st_for_db .= ' AND p.city_id = '.$sObject->getCityId();
		}
		//
		if ($sObject->getOperationId()) {
			$criterios .= $sObject->Operation->getName().' | ';
			$query_str .= 'operation='.$sObject->getOperationId().'&';
		}
		if ($sObject->getCurrencyId()) {
			$query_str .= 'currency='.$sObject->getCurrencyId().'&';
		}
		$_minprice = (float) $sObject->getMinPrice();
		$_maxprice = (float) $sObject->getMaxPrice();

		if (!empty($_minprice)) {
			$query_str .= 'p_from='.$_minprice.'&';
		}
		if (!empty($_maxprice)) {
			$query_str .= 'p_to='.$_maxprice.'&';
		}
		//
		$add_to_filter = '';
		$aProOperation = array();
		$aDataCurrency = array(
			'currency'  => $sObject->getCurrencyId(),
			'p_desde'   => $sObject->getMinPrice(),
			'p_hasta'   => $sObject->getMaxPrice(),
			'operation' => $sObject->getOperationId()
		);
		if (array_sum($aDataCurrency) > 0) {
      $aProOperation = OperationRealProperty::getArrayPropertyByOperation($aDataCurrency);

      foreach ($aProOperation as $v_pro_ope) { $add_to_filter .= $v_pro_ope.','; }
    }  	
  	if (!empty($add_to_filter)) {
  		$st_for_db .= ' AND p.id IN ('.substr($add_to_filter, 0, -1).')';
  	}
		//
		return array(
			'criterios'     => substr($criterios, 0, -3),
			'query_string'  => substr($query_str, 0, -1),
			'filter_for_db' => $st_for_db
		);
	}

} // end class