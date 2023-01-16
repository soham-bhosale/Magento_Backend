<?php


namespace Hummingbird\Mod1\Controller\Index;
use Magento\Framework\App\ActionInterface;


class Index implements ActionInterface
{
    private $pagefactory;
    /**
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pagefactory) {
        $this->pagefactory = $pagefactory;
    }
    public function execute(){
        $page = $this->pagefactory->create();
        $page->getConfig()->getTitle()->set("Welcomeee");
        return $page;
    }
}