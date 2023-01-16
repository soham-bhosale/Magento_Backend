<?php


namespace Hummingbird\Mod1\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Psr\Log\LoggerInterface;


class Catraw implements ActionInterface
{
    private $pagefactory;
    private $testfactory;
    protected $logger;
    /**
     */
    public function __construct(\Hummingbird\Mod1\Test\TestFactory $testfactory, LoggerInterface $logger) {
        // $this->pagefactory = $pagefactory;
        $this->testfactory = $testfactory;
        $this->logger = $logger;
    }
    public function execute(){
        // $page = $this->pagefactory->create();
        $npage = $this->testfactory->create();
        // $this->logger->info($npage);
        $pageT = $npage->displayParams();
        // $page->getConfig()->getTitle()->set("Welcomeee");
        return $pageT;
    }
}