<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'tcc');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("não foi possível conectar!!");

?>