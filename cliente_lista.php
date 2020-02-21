
<body>
<div>
<table>
  <tr>
    <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=cliente&acao=listar">
    <td>
     <p> 
      Pesquisar:
       <input type="text" name="pesquisa" id="pesquisa" />  
       <input type="submit" value="Pesquisar" />        
     </p>
    </td>
    </form>
  </tr>
  <tr>
    <td></td>
	</tr>
  <tr>
    <td><h2><a href="index.php?tabela=cliente&acao=listar&ordem=CLI_RAZAOSOCIAL">Razao Social</a></h2></td>    
    <td><h2><a href="index.php?tabela=cliente&acao=listar&ordem=CLI_NOME_FANTASIA">Nome Fantasia</a></h2></td>
    <td><h2><a href="index.php?tabela=cliente&acao=listar&ordem=CLI_CNPJ">CNPJ</a></h2></td>
    <td><h2><a href="index.php?tabela=cliente&acao=listar&ordem=CLI_CEP">CEP</a></h2></td>	  
	  <td><form><nav><a href="index.php?tabela=cliente&acao=incluir">Novo</a></nav></form></td>    	  	  
  </tr>

  <?php
  //require('../util/conecta.php');  
  //$sql = "select * from tbl_FORario";  
  //$resultado = $con->banco->Execute($sql);  
	  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  //echo " FORario =  " . $resultado->Fields('CLI_NOME')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('CLI_UF')."<br>";
	  
	  
//  }



?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">	  
	  <td><footer><?php echo $oquefazer->registros->CLI_RAZAOSOCIAL;?></footer></td>
	  <td><footers><?php echo $oquefazer->registros->CLI_NOME_FANTASIA;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->CLI_CNPJ;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->CLI_CEP;?></footers></td>
    <td width="274">		
	  <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=cliente&acao=alterar&codigo=<?php echo $oquefazer->registros->CLI_CODIGO;?>';}">Alterar</a></nav>
    <nav><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=cliente&acao=excluir&codigo=<?php echo $oquefazer->registros->CLI_CODIGO;?>';}">Excluir</a></nav>
	  </td>
  </tr>	
  <?php   
  }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>