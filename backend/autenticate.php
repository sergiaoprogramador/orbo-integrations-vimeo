<?php

require_once 'databasePdo.php';

$stmt = DB::prepare("SELECT * FROM `users` WHERE `user_email`=?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();

if (!is_array($user)) {
  echo json_encode([
    "status" => 0,
    "msg" => "E-mail não pertence aos nossos registros"
  ]);
  die();
}

if ($user['user_password'] == $_POST['senha']) {
  session_start();
  $_SESSION['message'] = 'Login efetuado com sucesso!';
  $_SESSION['logado'] = true;
  $_SESSION['usuario'] = $user['user_id'];
  echo json_encode([
    "status" => 1,
    "msg" => "OK"
  ]);
} else {
  echo json_encode([
    "status" => 0,
    "msg" => "Senha inválida!"
  ]);
}

die();