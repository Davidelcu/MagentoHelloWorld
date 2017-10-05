<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Blocks
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 */
class Luca_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * @return mixed
     *
     */
    public function isEnabled()
    {
        return Mage::helper('luca_helloworld')->isEnabled();
    }

    /**
     * getMessage
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('luca_helloworld')->getConfig('configuration/message');
    }
}
