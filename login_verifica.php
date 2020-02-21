<?php

 if (($_POST['cli_login'] != '' ) && ($_POST['cli_senha'] !=''))
 {
	// require ('util/conecta.php');	
	 
	  $sql = "select * from tbl_cliente where CLI_LOGIN = '".$_POST['cli_login']."' and CLI_SENHA = '".$_POST['cli_senha']."'";
	 $resultado = $con->banco->Execute($sql);
	 if($registro = $resultado->FetchNextObject())
		 
	 {
		 session_register('sessao_codigo_cliente');
		 $_SESSION['sessao_codigo_cliente'] = $registro->CLI_CODIGO;
		 session_register('sessao_codigo');		
		 $_SESSION['sessao_codigo'] = session_id();
		 direciona('index.php?id=5');
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