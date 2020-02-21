<title>fornecedor_manutencao</title>
  <?php
  
  	class fornecedor_manutencao
	{
		var $resultado;
		var $registros;
		
		function fornecedor_manutencao()
			{ 
			$this -> con = new conexao();
			}
			
		function listar_fornecedor()		
			{  		
			$ordenacao = $_REQUEST['ordem']; 
			if ($ordenacao=='')
				$ordenacao = "FOR_RAZAOSOCIAL";
				
				$filtro = $_REQUEST['pesquisa']; 
			if ($filtro=='')
				$filtrar_por = '';
				else
					
				$filtrar_por = $filtro;
								
  			$sql = "select * from tbl_fornecedor where FOR_RAZAOSOCIAL like '".$filtrar_por."%' order by " .$ordenacao;
  			$this->resultado = $this-> con->banco->Execute($sql);
		}
		function excluir()
			{ 
			$sql = "delete from tbl_fornecedor where FOR_CODIGO =". $_REQUEST['codigo'];  
  			if ($this->resultado = $this-> con->banco->Execute($sql))
			{
				alerta("Registro excluido com sucesso") ;
				return true;
			}
			else
			{
				alerta("Ocorreu um problema na exclus�o");
				
				return false;
			}
		}
			
				
	  	function gravar_incluir()
	   {
		   	$sql = "insert into tbl_fornecedor (CID_CODIGO, FOR_RAZAOSOCIAL, FOR_NOME_FANTASIA, FOR_ENDERECO, FOR_BAIRRO, FOR_FONE, FOR_RESPONSAVEL, FOR_EMAIL, FOR_CNPJ, FOR_CEP) 
			values 
			('".$_POST['CID_CODIGO']."',
			 '".$_POST['FOR_RAZAOSOCIAL']."',
			 '".$_POST['FOR_NOME_FANTASIA']."',
			 '".$_POST['FOR_ENDERECO']."',
			 '".$_POST['FOR_BAIRRO']."',
			 '".$_POST['FOR_FONE']."',
			 '".$_POST['FOR_RESPONSAVEL']."',
			 '".$_POST['FOR_EMAIL']."',
			 '".$_POST['FOR_CNPJ']."',
			 '".$_POST['FOR_CEP']."')";
		   
		   
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
			$sql = "select * from tbl_fornecedor where FOR_CODIGO =".$_REQUEST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			}
			
			function gravar_alterar()
			{ 
			$sql = "update tbl_fornecedor set CID_CODIGO = '".$_POST['CID_CODIGO']."',
			FOR_RAZAOSOCIAL = '".$_POST['FOR_RAZAOSOCIAL']."', 
			FOR_NOME_FANTASIA = '".$_POST['FOR_NOME_FANTASIA']."',
			FOR_ENDERECO = '".$_POST['FOR_ENDERECO']."',
			FOR_BAIRRO = '".$_POST['FOR_BAIRRO']."',
			FOR_FONE = '".$_POST['FOR_FONE']."',
			FOR_RESPONSAVEL = '".$_POST['FOR_RESPONSAVEL']."',
			FOR_EMAIL = '".$_POST['FOR_EMAIL']."',
			FOR_CNPJ = '".$_POST['FOR_CNPJ']."',
			FOR_CEP = '".$_POST['FOR_CEP']."' where FOR_CODIGO=".$_POST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);			
			}
		
				function total_registros()
			{ 
			$sql = "select count(*) as TOTAL from tbl_fornecedor";
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			return $this->registros->TOTAL;	
			}
		
				function listar_cidades()
			{
					
			$retorna = '';
			$sql = "select * from tbl_cidade order by CID_DESCRICAO";
			$resultado = $this-> con->banco->Execute($sql);
			while($regcid = $resultado->FetchNextObject()) 			
			{
				$selecionado = '';
				if($this->registros->CID_CODIGO == $regcid->CID_CODIGO)
				{
					$selecionado = 'selected';					
				}
				
				$retorna = $retorna .'<option value="'.$regcid->CID_CODIGO.'"'.$selecionado.'>'.$regcid->CID_DESCRICAO.'</option>';
				
			}
				
				return $retorna;
					
			}
				
	}
  ?>