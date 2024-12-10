<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/StoreSystems/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$pdo->query("UPDATE product SET name = '$name', price = '$price' WHERE article = '$id'");

header("Location:/StoreSystems");