<?php
session_start();
$_SESSION['nome'] = 'mulamba';
unset($_SESSION['nome']);
session_destroy();

?>