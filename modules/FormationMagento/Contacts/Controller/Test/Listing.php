<?php

namespace FormationMagento\Contacts\Controller\Test;

use Magento\Framework\App\Action\Action;

class Listing extends Action
{

	/**
	 * Attribut de la Fabrique de collection de produits
	 *
	 * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
	 */
	protected $productCollectionFactory;


	// Constructeur de l'action qui injecte la dépendance de la collection
	public function __construct(
		 // Nécessaire poure le constructeur parent
        \Magento\Framework\App\Action\Context $context,

		// Injection de la dépendance
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
	) {

        $this->productCollectionFactory = $productCollectionFactory;

		// appel au constructeur parent pour avoir accès au ObjectManager
        parent::__construct($context);
    }


	public function execute()
	{
		// Création du model Contact

		/**
		 * Création du modele contact
		 * @var FormationMagento\Contacts\Model\Contact $contactModel
		 */
        $contactModel = $this->_objectManager->create('FormationMagento\Contacts\Model\Contact');

		// Affichage du nom de la collection
		//var_dump( $contactModel->getCollection() );


		// Création d'une collection avec des filtres
        $collection = $contactModel->getCollection()
						->addFieldToFilter(
							'name',
							array(
								'like' => '%Mickey%'
							)
						);

		// Parcours de la collection
        foreach ( $collection as $contact )
		{
            var_dump( $contact->getData() );
        }

		// *****************************************

		// Collection Products
		$productCollection= $this->productCollectionFactory->create();
		//$productCollection->addAttributeToSelect('*');	// On récupère tous les champs
		$productCollection->addAttributeToSelect(['name','sku']); // For specific attributes
		$productCollection->setPageSize(5); // On ne récupère que 5 produits

		// Parcours de la collection
        foreach ( $productCollection as $product )
		{
			echo "<br>";
            echo 'Name  =  ' . $product->getName();
			echo "<br>";
			echo 'SKU  =  ' . $product->getSku();
        }

		// // Collection Products
		// $productCollection = $this->collectionFactory->create();
		// //$collection->addAttributeToSelect('*'); //For all attributes
		// //$collection->addAttributeToSelect(['name','sku']); // For specific attributes
		// $productCollection->addAttributeToSelect('*');
		// $productCollection->setPageSize(5);
		// foreach ($productCollection as $product) {
		// 		echo 'Name  =  ' . $product->getName();
		// }

        die('test');

    }
}