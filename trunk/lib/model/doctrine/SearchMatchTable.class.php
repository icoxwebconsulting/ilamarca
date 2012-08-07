<?php

class SearchMatchTable extends Doctrine_Table
{
  public static function getInstance() { return Doctrine_Core::getTable('SearchMatch'); }
  
  /**
   * Register by search conditions
   *
   * @param string $filter
   * @param integer $search_profile_id
   */
  public function recBySearchConditions($filter, $search_profile_id)
  {
  	$q = Doctrine_Query::create()->select('p.app_user_id, p.neighborhood_id')->from('RealProperty p')->where($filter);

		if ($q->count() > 0) {
			$u = array();
  		$b = array();
			$d = $q->execute();

			foreach ($d as $value) {
				$user_id = $value->getAppUserId();
				$zone_id = $value->getNeighborhoodId();

				$u[$user_id] = $user_id;
				$b[$zone_id] = $zone_id;
			}
			// get vendors by zone
			if (count($b) > 0) {
				$st_barrios = ''; foreach ($b as $barrio) { $st_barrios .= $barrio.','; }
				$qr_vendors = Doctrine_Query::create()->from('VendorZone')->where('neighborhood_id IN ('.substr($st_barrios, 0, -1).')');
				
				if ($qr_vendors->count() > 0) {
					$d_vendors = $qr_vendors->execute();
					
					foreach ($d_vendors as $vendor) {
						$v = $vendor->getAppUserId(); $u[$v] = $v;
					}
				}
			}
			// final rec in DB
			foreach ($u as $u_to_rec) {
				$oMatch = new SearchMatch();
				$oMatch->setVendorId($u_to_rec);
				$oMatch->setSearchProfileId($search_profile_id);
				$oMatch->save();
			}
		}
  }
  
  /**
   * Get properties in query for admin user
   *
   * @param string $query
   * @param integer $vendor
   * @return object
   */
  public function getPropertiesInProfile($query, $vendor)
  {
  	$sz = '';
  	$qz = Doctrine_Query::create()->from('VendorZone')->where("app_user_id = $vendor");
  	
  	if ($qz->count() > 0) {
  		$dz = $qz->execute();

  		foreach ($dz as $v_z) { $sz .= $v_z->getNeighborhoodId().','; }
  	}
  	$sz = substr($sz, 0, -1);

  	if (!empty($sz)) {
  		$sz = "OR p.neighborhood_id IN ($sz)";
  	}
  	$filter = "$query AND (p.app_user_id = $vendor $sz)";

  	$q = Doctrine_Query::create()
  			 ->from('RealProperty p')
  			 ->leftJoin('p.Neighborhood n')
  			 ->leftJoin('p.PropertyType pt')
  			 ->where($filter)
  			 ->orderBy('p.updated DESC')
  			 ->limit(50);

		return $q->count() > 0 ? $q->execute() : NULL;
  }
  
} // end class