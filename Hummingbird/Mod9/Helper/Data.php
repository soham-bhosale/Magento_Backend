<?php

namespace Hummingbird\Mod9\Helper;
use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper{


    const XML_PATH_MOD9 = "enable_ops/";

    public function getConfig($fieldId, $storecode= null){
        $scopeType = \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT;
        return $this->scopeConfig->getValue(self::XML_PATH_MOD9 . 'general/' . $fieldId, $scopeType,$storecode);
    }
}



?>