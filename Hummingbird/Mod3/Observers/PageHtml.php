<?php

namespace Hummingbird\Mod3\Observers;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class PageHtml implements ObserverInterface
{

    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer) {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $body = substr($body, 0, 10);
        $this->logger->info($body);
    }
}



