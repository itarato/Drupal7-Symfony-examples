<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\Event\Acme\Log;

use D7SY\Event\Acme\Event\UserEvent;

class ScreenLogger {

  public static function onUserCreated(UserEvent $userEvent) {
    drupal_set_message('User ' . $userEvent->user->getName() . ' has been submitted with email: ' . $userEvent->user->getMail());
  }

}
