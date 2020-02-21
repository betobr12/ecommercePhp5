<title>produto_manutencao</title>
  <?php
  
  	class produto_manutencao
	{
		var $resultado;
		var $registros;
		
		function produto_manutencao()
			{ 
			$this -> con = new conexao();
			}
			
		function listar_produto()		
			{  		
			$ordenacao = $_REQUEST['ordem']; 
			if ($ordenacao=='')
				$ordenacao = "PROD_DESCRICAO";
				
				$filtro = $_REQUEST['pesquisa']; 
			if ($filtro=='')
				$filtrar_por = '';
				else
					
				$filtrar_por = $filtro;
				
				
  			$sql = "select * from tbl_produto where PROD_DESCRICAO like '".$filtrar_por."%' order by " .$ordenacao;
  			$this->resultado = $this-> con->banco->Execute($sql);
		}
		function excluir()
			{ 
			$sql = "delete from tbl_produto where PROD_CODIGO =". $_REQUEST['codigo'];  
  			if ($this->resultado = $this-> con->banco->Execute($sql))
			{
				alerta("Registro excluido com sucesso") ;
				return true;
			}
			else
			{
				alerta("Ocorreu um problema na exclusão");
				
				return false;
			}
		}
			
				
	  	function gravar_incluir()
	   {
		   	$sql = "insert into tbl_produto (FOR_CODIGO, CAT_CODIGO, PROD_DESCRICAO, PROD_VALOR, PROD_QUANTIDADE, PROD_TIPO, PROD_OBS) 
			values 
			('".$_POST['FOR_CODIGO']."',
			 '".$_POST['CAT_CODIGO']."',
			 '".$_POST['PROD_DESCRICAO']."',
			 '".$_POST['PROD_VALOR']."',
			 '".$_POST['PROD_QUANTIDADE']."',
			 '".$_POST['PROD_TIPO']."',
			 '".$_POST['PROD_OBS']."')";
		   
		   
        	if($this->resultado = $this->con->banco->Execute($sql))
			{
			     alerta("O registro foi incluido com sucesso")	;
				 return true;
			}
			else
			{
			     alerta("Nao foi possivel gravar")	;
				 return false;
			}

	   }
		function alterar()
			{ 
			$sql = "select * from tbl_produto where PROD_CODIGO =".$_REQUEST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			}
			
			function gravar_alterar()
			{ 
			$sql = "update tbl_produto set FOR_CODIGO = '".$_POST['FOR_CODIGO']."',
			CAT_CODIGO = '".$_POST['CAT_CODIGO']."', 
			PROD_DESCRICAO = '".$_POST['PROD_DESCRICAO']."',
			PROD_VALOR = '".$_POST['PROD_VALOR']."',
			PROD_QUANTIDADE = '".$_POST['PROD_QUANTIDADE']."',
			PROD_TIPO = '".$_POST['PROD_TIPO']."',
			PROD_OBS = '".$_POST['PROD_OBS'].
			"' where PROD_CODIGO=".$_POST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);			
			}
		
				function total_registros()
			{ 
			$sql = "select count(*) as TOTAL from tbl_produto";
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			return $this->registros->TOTAL;	
			}
		
				function listar_categoria()
			{
					
			$retorna = '';
			$sql = "select * from tbl_categoria order by CAT_DESCRICAO";
			$resultado = $this-> con->banco->Execute($sql);
			while($regcid = $resultado->FetchNextObject()) 			
			{
				$selecionado = '';
				if($this->registros->CAT_CODIGO == $regcid->CAT_CODIGO)
				{
					$selecionado = 'selected';					
				}
				
				$retorna = $retorna .'<option value="'.$regcid->CAT_CODIGO.'"'.$selecionado.'>'.$regcid->CAT_DESCRICAO.'</option>';
				
			}
				
				return $retorna;
					
			}
		
			function listar_fornecedor()
			{
					
			$retorna = '';
			$sql = "select * from tbl_fornecedor order by FOR_RAZAOSOCIAL";
			$resultado = $this-> con->banco->Execute($sql);
			while($regcid = $resultado->FetchNextObject()) 			
			{
				$selecionado = '';
				if($this->registros->FOR_CODIGO == $regcid->FOR_CODIGO)
				{
					$selecionado = 'selected';					
				}
				
				$retorna = $retorna .'<option value="'.$regcid->FOR_CODIGO.'"'.$selecionado.'>'.$regcid->FOR_RAZAOSOCIAL.'</option>';
				
			}
				
				return $retorna;
					
			}
				
	}
  ?>