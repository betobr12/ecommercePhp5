<?php

		require('adodb/adodb.inc.php'); // acessando a biblioteca para trabalhar com o banco de dados
		require('funcoes.php');
		
		class conexao{
		
		var	$tipo_banco	=	"mysql";
		var	$servidor	=	"localhost";
		var	$usuario	=	"root";
		var	$senha		=	"";
		var	$banco;
		var $acessar	=	"sitecompra";
		
		 function conexao()//metodo construtor
		 
		 {
			 
			 $this-> banco = NewADOConnection($this->tipo_banco);
			 $this-> banco ->dialect = 3;
			 $this-> banco ->debug = false; //mostra informações de erro e conexao do banco
			 $this-> banco ->Connect($this->servidor, $this->usuario, $this-> senha, $this->acessar);
			 
		 }
		
			
		}
		
		$con = new conexao();
		
		//mysql_select_db("sitecompra");
		//if ($con)
		//echo "conectou";
		//else 
		//echo "nao conectou";
		
		

?>