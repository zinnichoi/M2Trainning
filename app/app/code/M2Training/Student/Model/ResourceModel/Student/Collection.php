<?php

namespace M2Training\Student\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use M2Training\Student\Model\Student;
use M2Training\Student\Model\ResourceModel\Student as StudentResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Student::class, StudentResource::class);
    }
}
