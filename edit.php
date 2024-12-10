<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/StoreSystems/db.php';
$id = $_GET['id'];
$product = $pdo ->query("SELECT * FROM  `product` WHERE article = '$id'")->fetch();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Изменить товар <?=$product['name']?></h1>
        <form action="action/update.php" method="post">
            <input type="hidden" value="<?=$product['article']?>" name="id">
            <input type="text" value="<?=$product['name']?>" name="name">
            <input type="number" value="<?=$product['price']?>" name="price">
            <input type="submit" name="submit">
</form>
</body>
</html>