<?php
 
 require ('cliente_manutencao.php');
 
 $oquefazer = new cliente_manutencao();
 
 $acao = $_REQUEST['acao'];
 
 if ($acao == 'listar')
 	{
		$filtro = $_REQUEST['pesquisa'];
		//echo "filtro = $filtro";
		$oquefazer->listar_cliente();
		require ('cliente_lista.php');
	}
	 if ($acao == 'excluir')
 	{
		$oquefazer->excluir();
		$oquefazer->listar_cliente();
		require ('cliente_lista.php');
	}
	if ($acao == 'novo_cliente')
 	{	
		require ('cliente_form.php');
	}
	
	 if ($acao == 'gravar_novo_cliente')
 	{
		$oquefazer->gravar_incluir();
		//$oquefazer->listar_cliente();
		//require ('cliente_lista.php');
		require('login_form.php');
	}
	 if ($acao == 'alterar')
 	{
		$oquefazer->alterar();
		require ('cliente_form.php');
	}
		
	 if ($acao == 'gravar_alterar')
 	{
		$oquefazer->gravar_alterar();
		$oquefazer->listar_cliente();
		require ('cliente_lista.php');
	}
	if ($acao == 'finalizar_pedido')
 	{
		
		require ('login_form.php');
		
	}

		

 
  //echo "acao";

?>