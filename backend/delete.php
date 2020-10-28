<?php

require_once 'databasePdo.php';

session_start();

$user = DB::run("SELECT * FROM users WHERE user_id=?", [$_SESSION['usuario']])->fetch();

$stmt = DB::run("DELETE FROM users WHERE user_id=?", [$user['user_id']]);

$_SESSION['message'] = 'Usuário deletado com Sucesso!';
header( 'Location: logout.php' );