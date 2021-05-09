<?php /**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Learning\HelloPage\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class View extends Action
{
//     /**
//      * @var \Magento\Framework\Controller\Result\JsonFactory
//      */
//     protected $resultJsonFactory;
//     /**
//      * @param \Magento\Framework\App\Action\Context $context
//      * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
//      */
//     public function __construct(
//        \Magento\Framework\App\Action\Context $context,
//        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
// {
//        $this->resultJsonFactory = $resultJsonFactory;
//        parent::__construct($context);
// }
//     /**
//      * View  page action
//      *
//      * @return \Magento\Framework\Controller\ResultInterface
//      */
//     public function execute()
//     {
//        // $result = $this->resultJsonFactory->create();
//        // $data = ['message' => 'Hello world!'];
//        // echo json_encode($data);
//        // return $result->setData($data);
// } 
       protected $pageFactory;

       public function __construct(Context $context, PageFactory $pageFactory)
       {
              parent::__construct($context);
              $this->pageFactory = $pageFactory;
       }


       public function execute()
       {
              return $this->pageFactory->create();
       }
}
