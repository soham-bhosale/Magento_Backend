<?php


namespace Hummingbird\Mod8b\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Emps extends AbstractDb
{
    const MAIN_TABLE = 'employee_table';
    const ID_FIELD_NAME = 'employee_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
