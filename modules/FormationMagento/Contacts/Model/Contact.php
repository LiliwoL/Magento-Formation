<?php

namespace FormationMagento\Contacts\Model;

use FormationMagento\Contacts\Model\ResourceModel\Contact as ResourceModelContact;
use Magento\Framework\Model\AbstractModel;


class Contact extends AbstractModel
{
	// Attributs


	// Méthodes

	// Attention, un seul underscore
	protected function _construct()
	{
		// A l'initialisation, on associe à ce model le resourceModel Contact
		$this->_init(
			ResourceModelContact::class
		);
	}
}