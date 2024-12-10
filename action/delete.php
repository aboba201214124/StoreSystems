<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/StoreSystems/db.php';

$id = $_GET['id'];

$pdo ->query("DELETE FROM `product` WHERE article = '$id'");

header("Location:/StoreSystems");