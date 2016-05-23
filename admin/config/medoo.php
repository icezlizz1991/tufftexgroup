<?php
return [
  'database_type' => 'mysql',
  'server' => 'localhost',
  'database_name' => 'tufftexweb',
  'username' => 'root',
  'password' => '',
  // 'database_name' => 'tufftex_web',
  // 'username' => 'tufftex_web',
  // 'password' => '111111',
  'port' => 3306,
  'charset' => 'utf8',
  'option' => [
      \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
      \PDO::ATTR_EMULATE_PREPARES => false
  ]
];
