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

/*

Expects the same products as input/outputs but fails
Does not put some user products from shopping in validateOrder

Si je commande que des vetements en tant que boby ou johns, j'ai dans mon pannier un bean, une potato, et un pant
ce qui n'est pas attendu.. le problème est aussi présent dans plusieurs cas

####### Resolu ####
Après avoir cherché je me suis rendu compte que l'ID de certains vétements étaient la même que les légumes.
J'ai donc modifié l'ID et tout fonctionne comme attendu.

J'ai aussi laissé en commentaire ce que j'avais fait pour que ça soit plus lisible.
*/

// Cannot be NULL
if(isset($_POST['submit'])&&isset($_POST['client'])&&isset($_POST['product0'])&&isset($_POST['product1'])&&isset($_POST['product2']))
{
    foreach($users as $val1)
    {
		if ($val1->getId()==$_POST['client'])
            $client=$val1;
    }
    foreach($products as $val2)
    {
		if ($val2->getId()==$_POST['product0'])
			$product1=$val2;
	}
    foreach($products as $val3)
    {
		if ($val3->getId()==$_POST['product1'])
			$product2=$val3;
	}
    foreach($products as $val4)
    {
		if ($val4->getId()==$_POST['product2'])
			$product3=$val4;
    }
	$client->Buy($product1);
	$client->Buy($product2);
	$client->Buy($product3);
    $cart = $client->getCart();
    echo '<h2>Panier du client : ' . $client->getId() . '</h2>';
	foreach($cart as $value)
	{
		echo '<p>'.$value->getName().' : '.$value->getPrice().'€</p>';
		echo '<hr>';
	}
	echo '<h3>Total : '.$client->getBillAmount().'€</h3>';
}
else header('Location: ../shopping.php');
?>
</body>
</html>
