<?php

class Smartwave_Mango_Model_System_Config_Source_Setting_Footer_Column_Top
{
    public function toOptionArray()
    {
        return array(
            array('value' => '0', 'label' => Mage::helper('mango')->__('Do not show')),
            array('value' => 'custom', 'label' => Mage::helper('mango')->__('Custom Block'))
        );
    }
}