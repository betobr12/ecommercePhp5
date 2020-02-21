<?php 
session_start();
require('util/conecta.php');
require('carrinho_manutencao.php');
$oquefazer = new carrinho_manutencao();
$total_produtos_carrinho = $oquefazer->quantidade_produtos();
$codcategoria = $_REQUEST['codcategoria'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<title>Cursos WEB-Commerce</title>
<link rel="stylesheet" href="util/index.css">
<script type="text/javascript" src="util/funcoes.js"></script>
<script src="util/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body>

<table>
<div>
<header>
  <h1>Cursos WEB-Commerce</h1>
  
</header>
	<div>   
		<h3><a href="index.php">Home</a></h3>
		<h3><a href="/ecommerce/admin/login_form.php">Acesso Administrador</a></h3>


		<a href="index.php?acao=listar_carrinho&id=1&codcategoria=<?php echo $codcategoria;?>">Ver Carrinho (QTDE = <?php echo $total_produtos_carrinho;?> Itens)</b></a> <b></p>
		<a><?php require('listar_categoria.php')?></a>
	</div>	  
	<div >       
    	<table>
    		<tr>
    			<td>
            	<?php
	// require ('principal.php');	
	       //require('util/conecta.php'); 
			
			$tabela = $_REQUEST['tabela'];
			$acao = $_REQUEST['acao'];
			$id	  = $_REQUEST['id'];
		
			if($id == 1)
				require ('carrinho_acao.php');
			if($id == 2)
				require ('login_form.php');
			if($id == 3)
				require ('login_verifica.php');
			if($id == 4)
				require ('cliente_acao.php');
			if($id == 5)
				require ('pedido_acao.php');
				?>		
				</td>
			</tr>
		</table>			 		
	</div>
		<footer>Company inc. </footer>
	</div>
</body>
</html>

