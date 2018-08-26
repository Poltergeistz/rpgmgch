<?php
$products = include('./products.php');
$users = include('./users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pannier</title>
</head>
<body>
<h2> Pannier client : <?php echo $users[0]->getId() ?></h2>
<table>
<tr>
<th>Product</th>
<th>Price</th>
</tr>
<?php

$users[0]->buy($products[3]);

$cart = $users[0]->getCart();
//
foreach ($cart as $val)
{
    echo '<tr><td>'.$val->getName().'</td>';
    echo '<td>'.$val->getPrice().'</td></tr>';
}
echo '<h3>Total : '. $users[0]->getBillAmount() .'€</h3>';
//
?>
</table>
<h2> Pannier client : <?php echo $users[1]->getId() ?></h2>
<table>
<tr>
<th>Product</th>
<th>Price</th>
</tr>
<?php
$users[1]->buy($products[4]);
$users[1]->buy($products[0]);

$cart = $users[1]->getCart();
//
foreach ($cart as $val)
{
    echo '<tr><td>'.$val->getName().'</td>';
    echo '<td>'.$val->getPrice().'</td></tr>';
}
echo '<h3>Total : '. $users[1]->getBillAmount() .'€</h3>';
//

//echo "Le pannier du client" . $client1[0]->getId() . " contient les objets " . $products[1]->getProductname(). " le total est de " . $products[1]->getPrice();
?>
</table>
</body>
</html>
