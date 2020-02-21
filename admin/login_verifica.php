<?php
session_start();
 if(($_POST['usu_login'] != '' ) && ($_POST['usu_senha'] !=''))
 {
	 require ('../util/conecta.php');	 
		$sql = "select * from tbl_usuario where USU_LOGIN = '".$_POST['usu_login']."' and USU_SENHA = '".md5($_POST['usu_senha'])."'";
		$resultado = $con->banco->Execute($sql);
	 if($registro = $resultado->FetchNextObject())		 
	 {
		 session_register('sessao_codigo_usuario');
		 $_SESSION['sessao_codigo_usuario'] = $registro->USU_CODIGO;
		 session_register('sessao_nome_usuario');
		 $_SESSION['sessao_nome_usuario'] = $registro->USU_NOME;
		 session_register('sessao_nivel_usuario');
		 $_SESSION['sessao_nivel_usuario'] = $registro->USU_NIVEL;
		// alerta("Usuario Acessou o Sistema");
		 direciona('index.php');
	}	 
	 else
	{
		 alerta("Usuario Invalido");
		 voltar();
		 exit;
	}
	 
 }
	 else
		 echo "Você precisa digitar o usuario ou a senha";
?>