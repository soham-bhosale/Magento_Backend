<?php

namespace Hummingbird\Mod7\Block;

class Message extends \Magento\Framework\View\Element\Template
{

    private $message;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, array $data=[]){
        $this->message = "My message";

        parent::__construct($context, $data);
    }

    public function getMessage(){
        return $this->message;
    }

    protected  function _afterToHtml($html)
    {
        return parent::_afterToHtml($html);
    }

}
