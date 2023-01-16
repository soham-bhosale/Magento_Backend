<?php


namespace Hummingbird\Mod8b\Model\ResourceModel\Emps;


use Hummingbird\Mod8b\Model\Emps;
use Hummingbird\Mod8b\Model\ResourceModel\Emps as EmpsResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Emps::class, EmpsResourceModel::class);
    }
}
