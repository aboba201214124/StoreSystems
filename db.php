<?php

$host = "MySQL-8.2";
$dbname = "kvest";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname";

return $pdo = new PDO($dsn, $username, $password);
