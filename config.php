<?php
return [
  "db"=> [
    "dbname"=> "tufftexweb",
    "username"=> "root",
    "password"=> ""
  ]
];
$pdo = new PDO("mysql:dbname=tufftex_web;host=localhost","tufftex_web","111111", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
$result1 = $pdo->query("SELECT * FROM productservice ORDER BY id DESC", PDO::FETCH_ASSOC);
$result2 = $pdo->query("SELECT * FROM simplework ORDER BY id DESC", PDO::FETCH_ASSOC);
