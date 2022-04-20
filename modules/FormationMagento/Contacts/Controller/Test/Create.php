<?php

namespace FormationMagento\Contacts\Controller\Test;

class Create extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		// Création du model Contact
        $contactModel = $this->_objectManager->create('FormationMagento\Contacts\Model\Contact');

		// Création d'une collection avec des filtres
        $collection = $contactModel->getCollection()
						->addFieldToFilter(
							'name',
							array('like'=> 'Mickey Mouse')
						);

		// Parcours de la collection
        foreach ( $collection as $contact )
		{
            var_dump($contact->getData());
        }

        die('test');

    }
}
