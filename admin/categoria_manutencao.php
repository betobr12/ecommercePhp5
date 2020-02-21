<title>categoria_manutencao</title>
  <?php
  
  	class categoria_manutencao
	{
		var $resultado;
		var $registros;
		
		function categoria_manutencao()
			{ 
			$this -> con = new conexao();
			}
			
		function listar_categoria()		
			{  		
			$ordenacao = $_REQUEST['ordem']; 
			if ($ordenacao=='')
				$ordenacao = "CAT_DESCRICAO";
				
				$filtro = $_REQUEST['pesquisa']; 
			if ($filtro=='')
				$filtrar_por = '';
				else
					
				$filtrar_por = $filtro;
				
				
  			$sql = "select * from tbl_categoria where CAT_DESCRICAO like '".$filtrar_por."%' order by " .$ordenacao;
  			$this->resultado = $this-> con->banco->Execute($sql);
		}
		function excluir()
			{ 
			$sql = "delete from tbl_categoria where CAT_CODIGO =". $_REQUEST['codigo'];  
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
		   	$sql = "insert into tbl_categoria (CAT_DESCRICAO) values ('".$_REQUEST['CAT_DESCRICAO']."')";
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
			$sql = "select * from tbl_categoria where CAT_CODIGO =".$_REQUEST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			}
			
			function gravar_alterar()
			{ 
			$sql = "update tbl_categoria set CAT_DESCRICAO = '".$_REQUEST['CAT_DESCRICAO']."'where CAT_CODIGO=".$_REQUEST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);			
			}
		
				function total_registros()
			{ 
			$sql = "select count(*) as TOTAL from tbl_categoria";
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			return $this->registros->TOTAL;	
			}
		
	}
  ?>