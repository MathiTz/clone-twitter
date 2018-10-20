<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

$exit = "<script>alert('Esperamos sua volta em breve')</script>";

echo $exit;

header('Location: index.php');


?>