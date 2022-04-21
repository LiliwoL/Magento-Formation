<?php

namespace FormationMagento\Contacts\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

	/**
	 * Méthode appelée à l'upgrade du module
	 *
	 * @param SchemaSetupInterface $setup
	 * @param ModuleContextInterface $context
	 * @return void
	 */
	public function upgrade(  SchemaSetupInterface $setup, ModuleContextInterface $context )
	{

		$setup->startSetup();

		if ( version_compare( $context->getVersion(), '0.2.0', '<') )
		{
			// La version installée est infériéure à 0.2.0
			// On peut mettre à jour la table
			$tableName = $setup->getTable( 'FormationMagento_contacts' );

			// Ajout d'une colonne à la table
            $setup->getConnection()->addColumn($tableName, 'comment', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Comment'
            ]);
        }

        $setup->endSetup();

	}
}