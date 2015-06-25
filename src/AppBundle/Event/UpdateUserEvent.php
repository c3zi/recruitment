<?php
/**
 * Created by PhpStorm.
 * User: c3zi
 * Date: 25/06/15
 * Time: 19:27
 */

namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use AppBundle\Model\User;

class UpdateUserEvent extends Event
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }


}