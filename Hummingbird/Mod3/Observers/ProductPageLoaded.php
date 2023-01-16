<?php

namespace Hummingbird\Mod3\Observers;
use Psr\Log\LoggerInterface;

class ProductPageLoaded implements \Magento\Framework\Event\ObserverInterface{

    protected $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer){

        $product = $observer->getEvent()->getData('product');
        $this->logger->info("Page loaded. Product Name -> ". $product->getName());

    }
}