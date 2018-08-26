<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Produits</title>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Productor</th>
<th>Brand</th>
<th>Expires At</th>
</tr>
<?php
$basket = require(__DIR__.'/../data/products.php');
    foreach($basket as $value)
    {
        echo '<tr><td>'.$value->getId().'</td>';
        echo '<td>'.$value->getName().'</td>';
        echo '<td>'.$value->getPrice().'</td>';
        if(is_a($value,'Cloth'))
        {
        echo '<td>'.$value->getBrand().'<td>';
        } else
        // if(is_a($basket,'Vegetable'))
        {
        echo '<td></td>';
        echo '<td>'.$value->getProductorName().'</td>';
        echo '<td>'.$value->getExpiresAt().'</td></tr>';
        }
        
    }
?>
</table>
</body>
</html>