<?php

namespace Hummingbird\Mod8\Controller\Emps;

use Hummingbird\Mod8\Model\Emps;
use Hummingbird\Mod8\Model\ResourceModel\Emps as EmpsResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{
    /**
     * @var Emps
     */
    private $emps;
    /**
     * @var EmpsResourceModel
     */
    private $empsResourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param Emps $emps
     * @param EmpsResourceModel $empsResourceModel
     */
    public function __construct(
        Context $context,
        Emps $emps,
        EmpsResourceModel $empsResourceModel
    ) {
        $this->emps = $emps;
        $this->empsResourceModel = $empsResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $emps = $this->emps->setData($params);
        try {
            $this->empsResourceModel->save($emps);
            $this->messageManager->addSuccessMessage(__("Successfully added the Employee."));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong while adding employee."));
        }
        /* Redirect back to form display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('mod8/index/index');
        return $redirect;
    }
}