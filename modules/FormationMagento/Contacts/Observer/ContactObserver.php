<?php

namespace Formationmagento\Contacts\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;
use Psr\Log\LoggerInterface;

class ContactObserver implements ObserverInterface
{
	private $_logger;
	private $_messenger;

	/**
	 * On injecte les dépendances logger et messenger
	 *
	 * @param ManagerInterface $messenger
	 * @param LoggerInterface $logger
	 */
	public function __construct(
		ManagerInterface $messenger,
		LoggerInterface $logger
	)
	{
		$this->_logger = $logger;
		$this->_messenger = $messenger;
	}

	public function execute( Observer $observer )
	{
		// Log
		$this->_logger->info("Nouveau contact " . $observer->getData('name') );

		// Afficher un message
		$this->_messenger->addSuccessMessage( "Nouveau contact " . $observer->getData('name') );
	}
}