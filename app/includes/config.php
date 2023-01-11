<?php

ob_start();

date_default_timezone_set('America/Sao_Paulo');

try {
  $con = new PDO('mysql:dbname=youchannel;host=localhost', 'root', '');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  //echo "Connection Success";
} catch (PDOException $e) {
  echo "Connection failed:" . $e->getMessage();
}

?>