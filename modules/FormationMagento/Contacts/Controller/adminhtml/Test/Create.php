<?php

namespace FormationMagento\Contacts\Controller\Test;

class Create extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // L'héritage de Action met à disposition _objectManager
        $contact = $this->_objectManager->create('FormationMagento\Contacts\Model\Contact');

        $contact->setName('Géo Trouvetou');
        $contact->save();

        die('test');
    }
}