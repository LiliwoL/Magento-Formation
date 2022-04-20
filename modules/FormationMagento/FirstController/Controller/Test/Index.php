<?php

namespace FormationMagento\FirstController\Controller\Test;

/**
 * Une action du contrôleur Test
 *
 * On pourra l'appeler via
 * /first/test/index
 */
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		die('Test controller');
	}
}
