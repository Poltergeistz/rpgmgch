<?php
require_once __DIR__.'/../models/Product.php';
require_once __DIR__.'/../models/Cloth.php';
require_once __DIR__.'/../models/Vegetable.php';

$vetement1 = new Cloth('1','Tie','40','TotoInc');
$vetement2 = new Cloth('2','Shirt','50','TotoInc');
$vetement3 = new Cloth('3','Pant','70','TotoInc');
// Bug resolu problème d'ID voir commentaire validateOrder 
$vegetable1 = new Vegetable('4','Beans','3','BeansInc','20/08/18');
                    // was  '1'
$vegetable2 = new Vegetable('5','Potato','2','PotatoInc','22/08/18');
                    // was  '2'
return [$vetement1,$vetement2,$vetement3,$vegetable1,$vegetable2];
?>

