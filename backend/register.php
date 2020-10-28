<?php

require_once 'databasePdo.php';

$name = $_POST['displayname'];
$email = $_POST['email'];
$password = $_POST['senha'];
$aniversario = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$sexo = $_POST['gender'];
$acceptMarketing = ($_POST['shareData'] == null) ? 0 : 1;
$acceptTerms = ($_POST['termsConditionsEmail'] == null) ? 0 : 1;

$stmt = DB::prepare("INSERT INTO users VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$name, $email, $password, $aniversario, $sexo, $acceptMarketing, $acceptTerms]);

$idUser  = DB::lastInsertId();

session_start();

$_SESSION['message'] = 'Usuário criado com Sucesso!';
$_SESSION['logado'] = true;
$_SESSION['usuario'] = $idUser;

header( 'Location: http://eventos-vimeo/area-logada/index.php' );