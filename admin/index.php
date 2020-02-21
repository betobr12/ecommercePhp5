<?php
session_start();
if(!$_SESSION['sessao_codigo_usuario'] && !$_SESSION['sessao_nome_usuario'])
{
	require('../util/funcoes.php');	
	direciona('login_form.php');
	exit;	
}
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<title>e-commerce</title>
<link rel="stylesheet" href="../util/admin.css">
<script type="text/javascript" src="../util/funcoes.js"></script>
</head>
<body>
<div>
<header><h1>Sistema de administração do Site e-commerce - WebSys 0.0</h1>
<h4>WebSys Sistema Administrativo <?php echo "Bem vindo Usuario: <br>".$_SESSION['sessao_nome_usuario']; ?></h4>
</header>
<div>   
    <nav>   
		<h3><a href="index.php">Home</a></h3>
      	<p>
		  	<a href="index.php?tabela=categoria&acao=listar">Categoria</a>
        	<a width="30" href="index.php?tabela=cidade&acao=listar">Cidade</a> 
        	<a href="index.php?tabela=usuario&acao=listar">Usuario</a> 
        	<a href="index.php?tabela=fornecedor&acao=listar">Fornecedor</a>
        	<a href="index.php?tabela=produto&acao=listar">Produtos</a>        
      	</p>
      	<p><a href="logoff.php">Sair</a></p>
    </nav>
</div> 
<div>
	<article>
    <footers>
            <?php
	// require ('principal.php');	
	        require('../util/conecta.php'); 
			
			$tabela = $_REQUEST['tabela'];
	
	     if($tabela)
		 require ($_REQUEST['tabela']."_acao.php");
		 else
		 require ('principal.php');
				  ?>
	</footers>		
	</article>
</div>
	<footer>Company inc. WebSys</footer>
</div>
</body>
</html>
<?php }?>