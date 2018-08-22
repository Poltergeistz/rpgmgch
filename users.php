<?php
require 'Client.php';
$client1 = new Client('boby','bobyjoe@mail.com','20/10/18 - 18:00:00');
$client2 = new Client('johns','brinejohns@mail.com','21/10/18 - 10:48:00');

return [
    $client1,
    $client2
  ];
?>