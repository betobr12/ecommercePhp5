<title>usuario_manutencao</title>
  <?php
  
  	class usuario_manutencao
	{
		var $resultado;
		var $registros;
		
		function usuario_manutencao()
			{ 
			$this -> con = new conexao();
			}
			
		function listar_usuario()		
			{  		
			$ordenacao = $_REQUEST['ordem']; 
			if ($ordenacao=='')
				$ordenacao = "USU_NOME";
				
				$filtro = $_REQUEST['pesquisa']; 
			if ($filtro=='')
				$filtrar_por = '';
				else
					
				$filtrar_por = $filtro;
				
				
  			$sql = "select * from tbl_usuario where USU_NOME like '".$filtrar_por."%' order by " .$ordenacao;
  			$this->resultado = $this-> con->banco->Execute($sql);
		}
		function excluir()
			{ 
			$sql = "delete from tbl_usuario where USU_CODIGO =". $_REQUEST['codigo'];  
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
		   	$sql = "insert into tbl_usuario (USU_NOME, USU_LOGIN, USU_SENHA, USU_NIVEL) values ('".$_POST['USU_NOME']."',
			 '".$_POST['USU_LOGIN']."',
			 '".md5($_POST['USU_SENHA'])."',
			 '".$_POST['USU_NIVEL']."')";
		   
		   
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
			$sql = "select * from tbl_usuario where USU_CODIGO =".$_REQUEST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			}
			
			function gravar_alterar()
			{ 
			$sql = "update tbl_usuario set USU_NOME = '".$_POST['USU_NOME']."',
			USU_LOGIN = '".$_POST['USU_LOGIN']."', 
			USU_SENHA = '".md5($_POST['USU_SENHA'])."',
			USU_NIVEL = '".$_POST['USU_NIVEL']."' where USU_CODIGO=".$_POST['codigo'];  
  			$this->resultado = $this-> con->banco->Execute($sql);			
			}
		
				function total_registros()
			{ 
			$sql = "select count(*) as TOTAL from tbl_usuario";
  			$this->resultado = $this-> con->banco->Execute($sql);	
			$this->registros = $this->resultado->FetchNextObject();//se posiciona no registro
			return $this->registros->TOTAL;	
			}
		
	}
  ?>