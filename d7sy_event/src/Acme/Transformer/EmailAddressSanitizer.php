<?php
use D7SY\Event\Acme\Event\UserEvent;

/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\Event\Acme\Transformer;

use D7SY\Event\Acme\Event\UserEvent;

class EmailAddressSanitizer {

  public function __construct() {
    $dispatcher = d7sy_event_get_global_dispatcher();
    $dispatcher->addListener('user.created', [$this, 'onUserCreated']);
  }

  public function onUserCreated(UserEvent $userEvent) {
    $mail = $userEvent->user->getMail();
    $mailProcessed = str_replace('@', ' [at] ', $mail);
    $mailProcessed = str_replace('.', ' [dot] ', $mailProcessed);
    $userEvent->user->setMail($mailProcessed);
  }

}
