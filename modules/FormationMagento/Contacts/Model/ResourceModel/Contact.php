<?php

namespace FormationMagento\Contacts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Contact Resource Model
 *
 * @author      Formation Magento
 */
class Contact extends AbstractDb 
{

    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct() 
	{
		// Initialisation du ResourceModel
        $this->_init(
			'FormationMagento_contacts', 	// Nom de la table
			'FormationMagento_contacts_id'	// Clé primaire de la table
		);
    }
} 