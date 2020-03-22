<?php
$pass = 'Caracas.01';
$user = 'admin_bod';
$name = 'admin_bod_v1';
try {
  # Conexión a MySQL
  $pdo = new PDO('mysql:host=localhost;dbname='.$name, $user, $pass);
}
catch(PDOException $e) {
  echo $e->getMessage();
}