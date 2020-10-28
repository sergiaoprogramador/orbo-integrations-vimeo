<?php
session_start();

$_SESSION['logado'] = false;
$_SESSION['usuario'] = "";

session_unset();
header( 'Location: http://eventos-vimeo/');