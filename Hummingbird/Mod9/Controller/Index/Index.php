<?php

namespace Hummingbird\Mod9\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
class Index extends Action
{
    /**
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $this->_view->getPage()->getConfig()->getTitle()->set(__("User Story #9"));
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
