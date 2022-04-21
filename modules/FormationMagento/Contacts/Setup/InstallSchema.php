<?php

namespace FormationMagento\Contacts\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Classe appelée à l'installation du module
 */
class InstallSchema implements InstallSchemaInterface
{

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install( SchemaSetupInterface $setup, ModuleContextInterface $context )
	{
        $setup->startSetup();

        /**
         * Create table 'FormationMagento_contacts'
         */
        if (!$setup->getConnection()->isTableExists($setup->getTable('FormationMagento_contacts')))
		{
			// On récupère la connexion à la base
            $table = $setup->getConnection()
				// Et on crée une nouvelle table
                ->newTable($setup->getTable('FormationMagento_contacts'))
                ->addColumn(
                    'FormationMagento_contacts_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Contacts ID'
                )
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    ['nullable' => false, 'default' => 'simple'],
                    'Name'
                )
                ->addColumn(
                    'email',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    ['nullable' => false, 'default' => 'simple'],
                    'Email'
                )
                ->setComment('FormationMagento Contacts Table')
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');

			// La création de la table est vraiment appliquée à la base
            $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}