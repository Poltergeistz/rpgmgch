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
    <title>Shopping</title>
</head>
<body>

<form action="views/validateOrder.php" method="POST">

<label>Choisir un client : </label>
<select name="client">
	<option value="" selected disabled hidden>Choix</option>
	<?php 
	foreach($users as $val)
	{
		echo '<option value='.$val->getId().'>'.$val->getId().'</option>'; 
	}
	?>
</select>


<?php 
	for($i=0;$i<3;$i++)
	{
        echo '<div>';
        echo '<label>Choisir un produit : </label>';
		echo "<select name='product".$i."'>";
		echo "<option value='0' selected disabled hidden>Choix</option>";
		foreach($products as $val)
		{
			echo '<option value='.$val->getId().'>'.$val->getName().'</option>';
		}
		echo '</select>';
		echo '</div>';
	}
?>

<button type="submit" name="submit">Envoyer</button>

</form>
    
</body>
</html>
