<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$products = $pdo -> query("SELECT * FROM product")->fetchAll();
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
    <title>Document</title>
</head>
<style>
    a{
        margin: 20px;
    }
    body{
        display: grid;
        grid-template-areas: "a a"
                            "b c";
    }
    .links{
        grid-area: a;
    }
    .product{
        grid-area: b;
    }
    .entrance{
        grid-area: c;
    }
</style>
<body>
<div class="links">
<a href="Create.php">Добавить товар в базу</a>
<a href="CreateEntrance.php">Добавить информацию о поступлении товара</a>
</div>
<div class="product">
    <h1>Товар</h1>
<?php foreach($products as $item):?>
    <div class="card">
        <h1><?=$item['name']?></h1>
        <p>Цена: <?= $item['price']?>.р</p>
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
                <td><a href="action/DeleteEntrance.php">Удалить</a></td>
                <td><a href="EditEntrance.php">Изменить</a></td>
            </tr>
            <?php endforeach;?>
        </table>
</div>
</body>
</html>