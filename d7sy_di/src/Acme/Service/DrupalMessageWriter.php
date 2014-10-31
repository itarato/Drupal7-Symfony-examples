<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\DI\Acme\Service;

class DrupalMessageWriter implements Writer {

  private $level;

  public function __construct($level) {
    $this->level = $level;
  }

  public function write($message) {
    drupal_set_message($message, $this->level);
  }

}
