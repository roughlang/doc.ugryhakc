<?php
require_once (__DIR__."/../wp-config.php");

// echo __DIR__."/../wp-config.php";
// exit;
class utility
{
  public $hello = "hello";

  public $ip_allow_list = [
    '126.235.23.188',
    '127.0.0.1',
  ];

  public $db =[
    "host" => DB_HOST,
    "user" => DB_USER,
    "password" => DB_PASSWORD,
    "database" => DB_NAME,
  ];

  public $statistics_file = "./statistics.json";

  public function mysql_connect() {

    $database = new mysqli(
      $this->db['host'],
      $this->db['user'],
      $this->db['password'],
      $this->db['database'],
    );

    if ($database->connect_error) {
      $connect_error = $database->connect_error;
      $this->logging($connect_error,"EMERGENCY");
      echo $EMERGENCY;
    } else {
      $database->set_charset("utf8");
      return $database;
    }
  }
  
  public function ipallow() {

  }

  /**
   * Logging
   * 
   */
  public function logging($message, $log_level) {
    /**
     * self::DEBUG     => 'DEBUG',
     * self::INFO      => 'INFO',
     * self::NOTICE    => 'NOTICE',
     * self::WARNING   => 'WARNING',
     * self::ERROR     => 'ERROR',
     * self::CRITICAL  => 'CRITICAL',
     * self::ALERT     => 'ALERT',
     * self::EMERGENCY => 'EMERGENCY',
     */
    $now = date("Y-m-d H:i:s");
    $line = $now." [".$log_level."]: ".$message."\n";
    file_put_contents("../utility.log", $line, FILE_APPEND | LOCK_EX);
    return true;
  }

  public function json_writeout(Array $data, $file) {
    $json = json_encode($data);
    file_put_contents($file, $json);

    return $json;
  }
}