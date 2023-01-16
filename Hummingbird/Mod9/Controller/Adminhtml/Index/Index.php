<?php
namespace Hummingbird\Mod9\Controller\Adminhtml\Index;

use Hummingbird\Mod9\Helper\Data;
class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFactory;
	protected $helperData;
	
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
		Data $helperData
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
		$this->helperData = $helperData;
	}

	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		
		return $resultPage;
	}
}
?>