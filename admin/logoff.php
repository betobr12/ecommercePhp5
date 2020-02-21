<?php
session_start();
unset($_SESSION['sessao_codigo_usuario']);
unset($_SESSION['sessao_nome_usuario']);
unset($_SESSION['sessao_nivel_usuario']);
session_destroy();
header('location:login_form.php');
?>