<?php

$login = $_POST['login'];

$cookieValue = [];

$cookieValue[ 'Usuario' ] = $login[0];
$cookieValue[ 'Pass' ] = $login[1];

setcookie("loginUsuario", $cookieValue);

header("Location: Home.php");
