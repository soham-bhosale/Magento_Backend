<?php

namespace Hummingbird\Mod6\Block;

class Test extends \Magento\Framework\View\Element\Template
{

    protected function _toHtml()
    {
        return "New Block";
    }

    protected  function _afterToHtml($html)
    {
        return parent::_afterToHtml($html);
    }

}
