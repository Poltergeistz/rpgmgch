<?php
require_once 'Product.php';
require_once 'Cloth.php';
require_once 'Vegetable.php';

$vetement1 = new Cloth('1','Tie','40','TotoInc');
$vetement2 = new Cloth('2','Shirt','50','TotoInc');
$vetement3 = new Cloth('3','Pant','70','TotoInc');

$vegetable1 = new Vegetable('1','Beans','3','BeansInc','20/08/18');
$vegetable2 = new Vegetable('2','Potato','2','PotatoInc','22/08/18');

return [$vetement1,$vetement2,$vetement3,$vegetable1,$vegetable2];
?>

