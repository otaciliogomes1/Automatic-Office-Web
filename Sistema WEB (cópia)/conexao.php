<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'Codigo20');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Acesso Invalido');