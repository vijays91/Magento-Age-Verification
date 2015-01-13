<?php
class Vijay_Ageverify_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_AGE_VERIFY_ENABLE   = 'ageverify_tab/ageverify_setting/ageverify_active';
	const XML_PATH_AGE_VERIFY_WIDTH    = 'ageverify_tab/ageverify_setting/ageverify_width';
	const XML_PATH_AGE_VERIFY_HEIGHT   = 'ageverify_tab/ageverify_setting/ageverify_height';
	const XML_PATH_AGE_VERIFY_REDIR    = 'ageverify_tab/ageverify_setting/ageverify_redirect';
	const XML_PATH_AGE_VERIFY_CONTENT  = 'ageverify_tab/ageverify_setting/ageverify_content';

	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function ageverify_enable() {
		return $this->conf(self::XML_PATH_AGE_VERIFY_ENABLE, $store);
	}
	
	public function ageverify_popupwidth() {
		return $this->conf(self::XML_PATH_AGE_VERIFY_WIDTH, $store);
	}
	
	public function ageverify_popupheight() {
		return $this->conf(self::XML_PATH_AGE_VERIFY_HEIGHT, $store);
	}
		
	public function ageverify_redirect() {
		return $this->conf(self::XML_PATH_AGE_VERIFY_REDIR, $store);
	}
		
	public function ageverify_content() {
		return $this->conf(self::XML_PATH_AGE_VERIFY_CONTENT, $store);
	}
}