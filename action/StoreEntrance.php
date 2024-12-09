<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$product = $_POST['product'];
$date = $_POST['date'];
$quantity = $_POST['quantity'];

$pdo ->query("INSERT INTO entrance (product_id, datetime, quantity) values ('$product', '$date', '$quantity')");

header("Location:/index.php");