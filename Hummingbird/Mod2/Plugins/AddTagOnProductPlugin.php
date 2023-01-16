<?php

namespace Hummingbird\Mod2\Plugins;
use Psr\Log\LoggerInterface;


class AddTagOnProductPlugin{

    protected $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
        $price = $subject->getPrice();
        $minprice = $subject->getMinimalPrice();
        if (( ($price < 60 && $price!=0) || ($minprice < 60 && $minprice!=0) ) && !is_null($subject->getMinimalPrice())) {
            // $this->logger->info("Condition true for ->  " . $result." Price is  -> ".$subject->getPrice()." Min price is ".$subject->getMinimalPrice()."  min price dtype  ". (is_null($subject->getMinimalPrice())?"its null":"not null"));
            return $result . " On Sale!";
        }
        // $this->logger->info("Condition false for ->  " . $result." Price is  -> ".$subject->getPrice()." Min price is ".$subject->getMinimalPrice());
        return $result;
    }
}