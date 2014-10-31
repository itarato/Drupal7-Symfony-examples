<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\Event\Acme\Event;

use D7SY\Event\Acme\Model\User;
use Symfony\Component\EventDispatcher\Event;

class UserEvent extends Event {

  /**
   * @var User
   */
  public $user;

}
