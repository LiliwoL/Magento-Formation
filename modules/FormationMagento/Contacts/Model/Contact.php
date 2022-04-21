<?php

namespace FormationMagento\Contacts\Model;

use FormationMagento\Contacts\Model\ResourceModel\Contact as ResourceModelContact;
use Magento\Framework\Model\AbstractModel;

/**
 * Contact Model
 *
 * @author      Formation Magento
 */
class Contact extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
	{
		// On initialise le ResourceModelÒ
        $this->_init( ResourceModelContact::class );
    }
}