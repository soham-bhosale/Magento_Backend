<?php

namespace Hummingbird\Mod9\Block;

use Magento\Framework\View\Element\Template;

class Display extends Template
{
    /**
     * @var \Hummingbird\Mod9\Helper\Data
     */
    private $dataHelper;

    protected $isEnable;

    protected $textToDisplay;

    /**
     * Display constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Hummingbird\Mod9\Helper\Data $dataHelper,
        array $data = []
    ) {
        $this->dataHelper = $dataHelper;
        $this->isEnable = false;
        $this->textToDisplay = "block text";
        parent::__construct($context, $data);
    }

    public function enable()
    {
        if($this->dataHelper->getConfig("enable")==1){
            $this->isEnable = true;
        }else{
            $this->isEnable = false;
        }

        $this->getText();
        return $this->isEnable;
    }

    public function getText(){
        $this->textToDisplay = $this->dataHelper->getConfig("textsb");
        if (strlen($this->textToDisplay)==0){
            // $this->isEnable = false;
        }
        return $this->textToDisplay;
    }

}
