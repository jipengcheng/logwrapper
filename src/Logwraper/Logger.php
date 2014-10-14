<?php
namespace Logwraper;

class Logger {

  private $log = null;

  public function __construct($file){
    $this->log = new \Monolog\Logger('name');
    $this->log->pushHandler(new \Monolog\Handler\StreamHandler($file, \Monolog\Logger::WARNING));
  }

  public function logwarn($msg){
    $this->log->addWarning($msg);
  }
}
