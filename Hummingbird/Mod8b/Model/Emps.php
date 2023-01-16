<?php


namespace Hummingbird\Mod8b\Model;


use Magento\Framework\Model\AbstractModel;

class Emps extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Emps::class);
    }
}
