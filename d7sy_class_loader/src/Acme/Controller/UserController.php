<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace MyModule\Acme\Controller;

class UserController {

  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function __toString() {
    return 'My name is: ' . $this->name . ' from ' . __CLASS__;
  }

}
