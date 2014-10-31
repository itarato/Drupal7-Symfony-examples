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

  public function __construct(Writer $messageWriter) {
    $this->messageWriter = $messageWriter;
  }

  public function doSomeImportantStuff($message) {
    $this->messageWriter->write($message);
  }

}
