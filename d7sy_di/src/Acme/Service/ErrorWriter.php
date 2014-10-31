<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\DI\Acme\Service;


class ErrorWriter implements Writer {

  public function write($message) {
    drupal_set_message($message, 'error');
    watchdog('System error', $message, array(), WATCHDOG_ERROR);
  }

}
