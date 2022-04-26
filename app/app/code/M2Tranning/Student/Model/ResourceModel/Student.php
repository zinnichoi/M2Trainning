<?php

namespace M2Tranning\Student\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Student extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('student', 'id');
    }
}
