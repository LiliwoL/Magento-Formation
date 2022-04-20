<?php

namespace FormationMagento\Contacts\Model\ResourceModel\Contact;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      Formation Magento
 */
class Collection extends AbstractCollection 

{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() 
	{
       // Initialisation
		$this->_init(
			'FormationMagento\Contacts\Model\Contact',					// Modele
			'FormationMagento\Contacts\Model\ResourceModel\Contact'		// ResourceModel
		);
    }
} 