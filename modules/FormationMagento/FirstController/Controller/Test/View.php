<?php

namespace FormationMagento\FirstController\Controller\Test;

/**
 * Une autre action du contrôleur Test
 *
 * On pourra l'appeler via
 * /first/test/view
 */
class View extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		die('Une autre action');
	}
}
