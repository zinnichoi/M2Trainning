<?php

namespace M2Tranning\Student\Model;

use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\M2Tranning\Student\Model\ResourceModel\Student::class);
    }
}
