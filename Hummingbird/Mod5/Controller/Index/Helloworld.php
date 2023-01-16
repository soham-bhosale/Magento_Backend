<?php


namespace Hummingbird\Mod5\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;


class Helloworld implements ActionInterface
{
    private $pagefactory;

    private $redirectFactory;
    /**
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pagefactory, RedirectFactory $redirectFactory) {
        $this->pagefactory = $pagefactory;
        $this->redirectFactory = $redirectFactory;
    }
    public function execute(){
        $page = $this->pagefactory->create();
        $page->getConfig()->getTitle()->set("Hello World");
        // return $page;

        $redirect = $this->redirectFactory->create();
        $redirect->setPath('joust-duffle-bag.html');
        return $redirect;
    }
}