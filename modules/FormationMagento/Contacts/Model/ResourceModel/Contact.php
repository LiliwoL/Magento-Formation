<?php

namespace FormationMagento\Contacts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contact extends AbstractDb
{

	// On doit implémenter la méthode _construct() avec un seul underscore
	public function _construct()
	{
		// Liaison avec la table de la BD
		$this->_init(
			'FormationMagento_contacts', 	// Nom de la table liée à ce ResourceModel
			'FormationMagento_contacts_id'	// Clé primaire de la table
		);
	}

}