<?php

namespace FormationMagento\Contacts\Controller\Adminhtml\Contact;

use Magento\Backend\App\Action;

class Index extends Action
{
    /**
     * Index action
     */
    public function execute() 
	{
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
} 