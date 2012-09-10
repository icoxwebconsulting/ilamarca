<?php
/**
 * EmailShare
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_icox
 * @subpackage model
 * @author     pinika
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class EmailShare extends BaseEmailShare
{
	/**
	 * Register email share
	 *
	 * @param object $_parameter
	 * @param string $url
	 * @return object
	 */
  public static function NewEmailShare($_parameter, $url)
  {
    $email_share = new EmailShare();

    $email_share->setName       ($_parameter['name']);
    $email_share->setEmail      ($_parameter['email']);
    $email_share->setEmailFriend($_parameter['email_friend']);
    $email_share->setComment    ($_parameter['message']);
    $email_share->setUrl        ($url);
    $email_share->save();

    return $email_share;
  }

} // end class