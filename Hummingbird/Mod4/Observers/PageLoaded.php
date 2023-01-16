<?php

namespace Hummingbird\Mod4\Observers;
use Magento\Framework\App\RouterInterface;
use Psr\Log\LoggerInterface;


class PageLoaded implements \Magento\Framework\Event\ObserverInterface {

    protected $logger;

    protected $frontFactory;

    protected $rlist;
    // protected $routerList;
    public function __construct(
        \Magento\Framework\App\FrontControllerFactory $frontFactory,
        LoggerInterface $logger)
        {
            $this->frontFactory = $frontFactory;
            $this->logger = $logger;
        }
        
        
        
        /**
         * @param \Magento\Framework\Event\Observer $observer
         * @return void
         */
        public function execute(\Magento\Framework\Event\Observer $observer) {
                        
        $this->logger->info("Event page construct is fired");
        $request = $observer->getEvent()->getData('request');

        $this->logger->info("Routers are:- ".$request->_routerList);
        return $request->getPathInfo();
    }

}