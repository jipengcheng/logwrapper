<?php
namespace logwrapper;

require 'vendor/autoload.php';

class logwrapper {

  private $log = null;

  public __constructor($file){
    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler($file, Monolog\Logger::WARNING));
  }

  public function logwarn($msg){
    $log->addWarning($msg);
  }
}
