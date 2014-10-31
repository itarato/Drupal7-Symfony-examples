<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\Event\Acme\Model;

class User {

  private $name;

  private $mail;

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getMail() {
    return $this->mail;
  }

  /**
   * @param mixed $mail
   */
  public function setMail($mail) {
    $this->mail = $mail;
  }

}
