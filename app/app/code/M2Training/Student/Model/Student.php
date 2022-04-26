<?php

namespace M2Training\Student\Model;

use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\M2Training\Student\Model\ResourceModel\Student::class);
    }
}
