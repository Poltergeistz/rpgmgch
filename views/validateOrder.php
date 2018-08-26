<?php 
$users = require_once __DIR__."/../data/users.php";
$products = require_once __DIR__."/../data/products.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Order</title>
</head>
<body>
<?php
if(isset($_POST['submit'])&&isset($_POST['client'])&&isset($_POST['product0'])&&isset($_POST['product1'])&&isset($_POST['product2']))
{
	foreach($users as $val){
		if ($val->getId()==$_POST['client'])
            $client=$val;
	}
	foreach($products as $val){
		if ($val->getId()==$_POST['product0'])
			$product1=$val;
	}
	foreach($products as $val){
		if ($val->getId()==$_POST['product1'])
			$product2=$val;
	}
	foreach($products as $val){
		if ($val->getId()==$_POST['product2'])
			$product3=$val;
    }
	$client->Buy($product1);
	$client->Buy($product2);
	$client->Buy($product3);
    $cart = $client->getCart();
    echo '<h2>Panier du client : ' . $client->getId() . '</h2>';
	foreach($cart as $val)
	{
		echo '<p>'.$val->getName().' : '.$val->getPrice().'€</p>';
		echo '<hr>';
	}
	echo '<h3>Total : '.$client->getBillAmount().'€</h3>';
}
else header('Location: ../shopping.php');
?>
</body>
</html>
