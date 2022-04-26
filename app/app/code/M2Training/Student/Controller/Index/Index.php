<?php

namespace M2Training\Student\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $studentFactory;

    public function __construct(Context                                    $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory,
                                \M2Training\Student\Model\StudentFactory   $studentFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->studentFactory = $studentFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $studentFactory = $this->studentFactory->create();
        $students = $studentFactory->getCollection();
        foreach ($students as $student) {
            var_dump($student->getData());
        }
        exit;
        return $resultPage;
    }
}
