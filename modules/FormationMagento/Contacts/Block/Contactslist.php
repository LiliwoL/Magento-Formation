<?php


namespace FormationMagento\Contacts\Block;

use Magento\Framework\View\Element\Template;

/**
 * Classe  de bloc
 */
class Contactslist extends Template
{
	/**
	 * Constructeur qui ajoute une donnée contact
	 *
	 * @param Template\Context $context
	 * @param array $data
	 */
	public function __construct(
		Template\Context $context,
		array $data = []
	){
		parent::__construct( $context, $data);

		// On va ajouter à data un tableau vide
		// Ce tableau contiendra la liste des contacts
		$this->setData( 'contacts', array() );
		// La méthode setData est disponible via DataObject
	}



	/**
	 * a chaque appel de cette méthode, on ajoute $count contacts au tableau
	 *
	 * @param [type] $count
	 * @return void
	 */
    public function addContacts( $count )
	{
		// On récupère le tableau contact (vide au départ)
        $_contacts = $this->getData('contacts');

        $actualNumber = count( $_contacts );

        for( $i=$actualNumber; $i<($actualNumber+$count); $i++ )
		{
			// Ajout de la case nom + le chiffre
            $_contacts[] = 'Contact ' . ($i+1);
        }


		// Mise à jour du tableau et de la data 'contacts'
        $this->setData('contacts', $_contacts);
    }
}