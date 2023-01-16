<?php

namespace Hummingbird\Mod6\Controller\Index;

class Index implements \Magento\Framework\App\ActionInterface
{
    protected $pageFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory) 
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {   
        $page = $this->pageFactory->create();
        $layout = $page->getLayout();
        $block = $layout->createBlock('\Hummingbird\Mod6\Block\Test');
        $page->getConfig()->getTitle()->set($block->toHtml());
        return $page;
    }
}