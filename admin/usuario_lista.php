
<body>
<div>
<table>
  <tr>
    <td ><h2>Lista de Usuarios</h2>		
      <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=usuario&acao=listar">
	      <b>Pesquisar:</b>
	      <input type="text" name="pesquisa" id="pesquisa" />  
        <input type="submit" value="Pesquisar" />        
        </p>
      </form>
  </tr>
  <tr>
    <td><h2><a href="index.php?tabela=usuario&acao=listar&ordem=USU_NOME">Nome</a></h2></td>    
    <td><h2><a href="index.php?tabela=usuario&acao=listar&ordem=USU_LOGIN">Login</a></h2></td>    
    <td><h2><a href="index.php?tabela=usuario&acao=listar&ordem=USU_SENHA">Senha</a></h2></td>
    <td><h2><a href="index.php?tabela=usuario&acao=listar&ordem=USU_NIVEL">Nivel</a></h2></td>
	  <td><form><nav><a href="index.php?tabela=usuario&acao=incluir">Novo</a></nav></form></td>   	  	  
  </tr>
  <?php
  //require('../util/conecta.php');  
  //$sql = "select * from tbl_usuario";  
  //$resultado = $con->banco->Execute($sql); 	  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  //echo " usuario =  " . $resultado->Fields('USU_NOME')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('USU_UF')."<br>";	  
//  }
?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">
	  <td height="28"><footer><?php echo $oquefazer->registros->USU_NOME;?></footer></td>	  
	  <td><footers><?php echo $oquefazer->registros->USU_LOGIN;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->USU_SENHA;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->USU_NIVEL;?></footers></td>
    <td>	
		  <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=usuario&acao=alterar&codigo=<?php echo $oquefazer->registros->USU_CODIGO;?>';}">Alterar</a></nav>
		  <nav><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=usuario&acao=excluir&codigo=<?php echo $oquefazer->registros->USU_CODIGO;?>';}">Excluir</a></nav>
	  </td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>
