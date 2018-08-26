<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
<table>
<tr>
<th>User ID</th>
<th>Email</th>
<th>Created At</th>
</tr>
<?php
$users = require(__DIR__.'/data/users.php');
foreach($users as $value)
    {
        echo '<tr><td>'.$value->getId().'</td>';
        echo '<td>'.$value->getEmail().'</td>';
        echo '<td>'.$value->getCreatedAt().'</td></tr>';
    }
?>
</table>
</body>
</html>