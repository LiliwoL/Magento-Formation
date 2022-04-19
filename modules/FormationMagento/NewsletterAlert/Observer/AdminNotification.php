<?php
namespace FormationMagento\NewsletterAlert\Observer;


class AdminNotification implements \Magento\Framework\Event\ObserverInterface
{
    protected $messageManager;

    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager
    )
    {
        // Injection du gestionnaire de message
        $this->messageManager = $messageManager;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->messageManager->addSuccessMessage(__("Observateur appelé avec succès."));
        // Ajouter ici la logique métier
    }
}
