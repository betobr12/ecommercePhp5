<?php
 

 $acao = $_REQUEST['acao'];

 if ($acao == 'listar_produtos')
 	{
		//alerta($_REQUEST['codcategoria']);
		
		$oquefazer->listar_produtos_categoria($_REQUEST['codcategoria']);
		require ('mostra_produtos_categoria.php');
	}

 if ($acao == 'incluir_no_carrinho')
 	{
		//alerta($_REQUEST['codcategoria']);
		
		$oquefazer->incluir_no_carrinho($_REQUEST['codproduto']);	
		voltar();
	}
 if ($acao == 'listar_carrinho')
 	{
		//alerta($_REQUEST['codcategoria']);
		
		$oquefazer->listar_carrinho();
		require ('carrinho_compras.php');
		
	}
 if ($acao == 'atualizar_carrinho')
 	{
		$oquefazer->atualizar_carrinho();
		$oquefazer->listar_carrinho();
		require ('carrinho_compras.php');
		
	}


 
?>