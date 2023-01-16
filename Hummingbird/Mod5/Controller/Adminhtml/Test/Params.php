<?php

namespace Hummingbird\Mod5\Controller\Adminhtml\Test;

class Params extends \Magento\Backend\App\AbstractAction
{
    protected $_publicActions = ['params'];

    protected $_formKeyValidator;
    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $result->getConfig()->getTitle()->set('Access Granted');
        $this->_formKeyValidator = true;
        return $result;
    }

    protected function _isAllowed() {
        // $access = $this->getRequest()->getParam('access');
        // return isset($access) && (int)$access==1;
       return true;
    }

    public function _processUrlKeys() {
        return true;
    }

    protected function _validateSecretKey()
    {
        return true;
    }
}
