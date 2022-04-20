<?php

namespace FormationMagento\Contacts\Controller\Adminhtml\Contact;

use Magento\Backend\App\Action;
use FormationMagento\Contacts\Model\Contact as Contact;

class NewAction extends Action 
{
    /**
     * Add A Contact Page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     */
    public function execute() 
	{
        $this->_view->loadLayout();
        $this->_view->renderLayout();

		// Récupération des données depuis la requête
        $contactDatas = $this->getRequest()->getParam('contact');

        if(is_array($contactDatas)) 
		{

            $contact = $this->_objectManager->create(
				Contact::class
			);
            $contact->setData($contactDatas)->save();

            $resultRedirect = $this->resultRedirectFactory->create();

            return $resultRedirect->setPath('*/*/index');
        }
    }
} 