<?php
session_start();
$_SESSION['nome'] = 'matheus';
if(isset($_SESSION['nome'])){
    echo $_SESSION['nome'];
}
// nome,valor,tempo para expirar, caminho, dominio, segurança
// setcookie('nome','guilherme',time() + (86.400).'/' );
setcookie('nome','guilherme',time() - (86.400).'/' );
?>