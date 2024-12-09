<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$products = $pdo -> query("SELECT * FROM product")->fetchAll();
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
<form action="action/StoreEntrance.php" method="post">
    <label for="">Товар</label>
    <select name="product" id="">
        <?php foreach ($products as $item):?>
        <option value="<?=$item['article']?>"><?=$item['name']?></option>
        <?php endforeach;?>
    </select>
    <label for="">Время поступления</label>
    <input type="date" name="date">
    <label for="">Сколько товара пришло??(в килограммах)</label>
    <input type="number" name="quantity">
    <input type="submit" value="Отправить">
</form>
</body>
</html>