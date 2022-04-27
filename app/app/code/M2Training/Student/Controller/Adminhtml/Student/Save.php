<?php

namespace M2Training\Student\Controller\Adminhtml\Student;

use M2Training\Student\Model\StudentFactory;
use Magento\Backend\App\Action\Context as ContextAlias;

class Save extends \Magento\Backend\App\Action
{

    private $studentFactory;

    public function __construct(
        ContextAlias   $context,
        StudentFactory $studentFactory)
    {
        $this->studentFactory = $studentFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $this->studentFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();
        return $this->resultRedirectFactory->create()->setPath('student/index/index');
    }
}
