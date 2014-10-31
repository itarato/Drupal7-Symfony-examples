<?php
/**
 * @file
 *
 * Author: itarato
 */

namespace D7SY\DI\Acme\Service;

class AcmeService {

  /**
   * @var Writer
   */
  private $messageWriter;

  private $messagePrefix;

  public function __construct(Writer $messageWriter) {
    $this->messageWriter = $messageWriter;
  }

  public function doSomeImportantStuff($message) {
    $this->messageWriter->write($this->messagePrefix . $message);
  }

  /**
   * @param mixed $messagePrefix
   */
  public function setMessagePrefix($messagePrefix) {
    $this->messagePrefix = $messagePrefix;
  }

}
