<?php

namespace Hummingbird\Mod1\Test;


class Test
{

    protected $arr;
    protected $resultFactory;

    protected $s;

    public function __construct(\Magento\Catalog\Api\Data\CategoryInterface $catagoryInterface, \Magento\Framework\Controller\Result\RawFactory $resultFactory, $arr=["One","Two","Three"], $s="Test String"){
        $this->arr = $arr;
        $this->s = $s;
        $this->resultFactory = $resultFactory;
    }

    public function displayParams(){
        $str = implode("\n",$this->arr)."\n".$this->s;
        $page = $this->resultFactory->create();
        $page->setContents($str);
        // echo $this->s;
        // echo "Yess";
        return $page;
    }
}