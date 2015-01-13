<?php
class Vijay_Ageverify_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$sess_val = 'm78v20a89';
		Mage::getSingleton('core/session')->setAgeVerifydate($sess_val);
		$_data = array(	'success' => 200);
		$this->getResponse()->setBody(json_encode( $_data));
	}
}