<?php
/**
 * Created by PhpStorm.
 * User: Radek
 * Date: 06/01/15
 * Time: 22:14
 */

namespace AppBundle\Service;

use AppBundle\Event\UpdateUserEvent;

class StatsSystem implements NotifyInterface
{
	public function postRequest(UpdateUserEvent $event)
	{
		return true;
	}
}