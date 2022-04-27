<?php


namespace M2Training\Student\Controller\Adminhtml\Student;

use M2Training\Student\Model\StudentFactory;
use Magento\Backend\App\Action\Context as ContextAlias;
use M2Training\Student\Model\ResourceModel\Student\CollectionFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Backend\Model\View\Result\RedirectFactory;

class Delete extends \Magento\Backend\App\Action
{

    private $studentFactory;
    private $filter;
    private $collectionFactory;
    private $resultRedirect;

    public function __construct(
        ContextAlias      $context,
        StudentFactory    $studentFactory,
        Filter            $filter,
        CollectionFactory $collectionFactory,
        RedirectFactory   $redirectFactory)
    {
        $this->studentFactory = $studentFactory;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->resultRedirect = $redirectFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $total = 0;
        $err = 0;
        foreach ($collection->getItems() as $item) {
            $deleteStudent = $this->studentFactory->create()->load($item->getData('id'));
            try {
                $deleteStudent->delete();
                $total++;
            } catch (LocalizedException $exception) {
                $err++;
            }
        }

        if ($total) {
            $this->messageManager->addSuccessMessage(
                __('A total of %1 record(s) have been deleted.', $total)
            );
        }

        if ($err) {
            $this->messageManager->addErrorMessage(
                __(
                    'A total of %1 record(s) haven\'t been deleted. Please see server logs for more details.',
                    $err
                )
            );
        }

        return $this->resultRedirect->create()->setPath('student/index/index');
    }
}
