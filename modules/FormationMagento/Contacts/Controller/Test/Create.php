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

	//  public function execute()
	// {

	// 	/**
	// 	 * On donne le namespace du model
	// 	 *
	// 	 * @var FormationMagento\Contacts\Model\Contact $contact
	// 	 */
	// 	$contact = $this->_objectManager->create('FormationMagento\Contacts\Model\Contact');

	// 	//var_dump($contact);

	// 	// Le modèle a accès a des méthodes directement "générées" depuis les colonnes de la table
	// 	$contact->setName('Mickey Mouse');
	// 	$contact->setEmail('mickey@mouse.com');
	// 	$contact->setComment('Le mec de Minnie');

	// 	$contact->save();

	// 	die('Créé');
	// }
}
