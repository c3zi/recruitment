<?php
/**
 * Created by PhpStorm.
 * User: c3zi
 * Date: 23/06/15
 * Time: 17:04
 */

namespace AppBundle\Service;

use AppBundle\Event\UpdateUserEvent;

interface NotifyInterface
{
    /**
     * Notifies external system when data is being changed for a certain user.
     *
     * @param User $user
     * @return mixed
     */
    public function postRequest(UpdateUserEvent $event);
}