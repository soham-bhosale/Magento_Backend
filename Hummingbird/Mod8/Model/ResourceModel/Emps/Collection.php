<?php


namespace Hummingbird\Mod8\Model\ResourceModel\Emps;


use Hummingbird\Mod8\Model\Emps;
use Hummingbird\Mod8\Model\ResourceModel\Emps as EmpsResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Emps::class, EmpsResourceModel::class);
    }
}