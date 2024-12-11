<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/StoreSystems/db.php';

$products = $pdo -> query("SELECT 
    p.*, 
    SUM(e.Quantity) AS total_quantity
FROM 
    product p
LEFT JOIN 
    entrance e ON p.article = e.product_id
GROUP BY 
    p.article, p.name, p.price;
")->fetchAll();
$entrance = $pdo -> query("SELECT 
    entrance.id, 
    product.name AS product_name, 
    entrance.datetime, 
    entrance.Quantity
FROM 
    entrance
JOIN 
    product ON entrance.product_id = product.article;")->fetchAll();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/index.css">
    <title>Document</title>
</head>
<body>
<div class="links">
<a href="Create.php" id="addproduct">Добавить товар в базу</a>
<a href="CreateEntrance.php" id="addentrance">Добавить информацию о поступлении товара</a>
</div>
<div class="product">
    <h1>Товар</h1>
<?php foreach($products as $item):?>
    <div class="card">
        <h1><?=$item['name']?></h1>
        <p>Артикул:<?=$item['article']?></p>
        <p>Цена: <?=$item['price']?>.р</p>
        <p>В наличии: <?=$item['total_quantity']?>/кг</p>
        <a href="action/delete.php?id=<?=$item['article']?>" id="deleteproduct">Удалить</a>
        <a href="edit.php?id=<?=$item['article']?>" id="editproduct">Изменить</a>
    </div>
<?php endforeach;?>
</div>
<div class="entrance">
    <h1>Поступление</h1>
        <table>
            <tr>
                <th>Название</th>
                <th>Дата поставки</th>
                <th>Количество</th>
            </tr>
            <?php foreach($entrance as $item):?>
            <tr>
                <td><?=$item['product_name']?></td>
                <td><?=$item['datetime']?></td>
                <td><?=$item['Quantity']?></td>
                <td><a href="action/DeleteEntrance.php?id=<?=$item['id']?>" id="deleteentrance">Удалить</a></td>
            </tr>
            <?php endforeach;?>
        </table>
</div>
</body>
</html>