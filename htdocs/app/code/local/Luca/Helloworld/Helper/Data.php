<?php
/**
 * Hello World
 */

/**
 * Hello World
 * 
 * Main Helper
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 */
class Luca_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{   
    
    /**
     * getConfig
     * 
     * @param string $config
     * @return string
    */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('luca_helloworld/' . $config);
    }
    
    /**
     * isEnabled
     * 
     * Returns true if this module is enabled.
     * @return bool
    */
    public function isEnable()
    {
        return $this->getConfig('configuration/enabled');
    }
}
