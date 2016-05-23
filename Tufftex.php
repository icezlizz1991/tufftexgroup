<?php
namespace Tufftex;
date_default_timezone_set("Asia/Bangkok");

class Tufftex {
  private static $config, $db;

  /*
  * @return \PDO;
  */
  public static function getDb()
  {
    if(empty(self::$db)) {
      $config = self::getConfig();
      self::$db = new \PDO("mysql:dbname={$config["db"]["dbname"]};host=localhost", $config["db"]["username"], $config["db"]["password"], [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
    }
    return self::$db;
  }

  public static function getConfig()
  {
    if(empty(self::$config)) {
      self::$config = include("config.php");
    }
    return self::$config;
  }
}
