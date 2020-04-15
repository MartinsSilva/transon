<?php

require __DIR__ . "/vendor/autoload.php";

$prequel = new \Prequel\Prequel;
$database = new \Prequel\database\Database;

$database->connect("localhost", "root", "", "virtualines");
$data = $database->findAll("sales_record");

$jsonEncode = $prequel->convert_json($data);
$jsonDecodeObject = $prequel->convert_json_object($data);
$jsonEncodeArray = $prequel->convert_json_array($data);

print_r($jsonEncode);
print_r($jsonDecodeObject);
print_r($jsonEncodeArray);
