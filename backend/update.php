<?php

require_once 'databasePdo.php';

session_start();

$user = DB::run("SELECT * FROM users WHERE user_id=?", [$_SESSION['usuario']])->fetch();

$id = $_SESSION['usuario'];
$name = $_POST['displayname'];
$email = $_POST['email'];
$aniversario = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$sexo = ($_POST['gender'] == null) ? $user['user_gender'] : $_POST['gender'];

$acceptMarketing = ($_POST['shareData'] == null) ? 0 : 1;

$stmt = DB::run("UPDATE users SET user_nome=?, user_email=?, user_birthday=?, user_gender=?, user_marketing=? WHERE user_id=$id", [$name, $email, $aniversario, $sexo, $acceptMarketing]);

$_SESSION['message'] = 'Dados do usuário atualizado com sucesso!';
header( 'Location: http://eventos-vimeo/area-logada/index.php' );