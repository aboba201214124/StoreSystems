<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/StoreSystems/db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$pdo -> query("INSERT INTO product (name,price) VALUES ('$name','$price')");

header("Location:/StoreSystems");