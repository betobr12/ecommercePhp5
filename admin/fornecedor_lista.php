
<body>
<div>
<table>
  <tr>
   <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=fornecedor&acao=listar">
   <td>
      <p> 
       <b>Pesquisar:</b>
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
    <td><h2><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_RAZAOSOCIAL">Razao Social</a></h2></td>    
    <td><h2><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_NOME_FANTASIA">Nome Fantasia</a></h2></td> 
    <td><h2><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_CNPJ">CNPJ</a></h2></td>
    <td><h2><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_CEP">CEP</a></h2></td>	  
	  <td>
       <form>
        <nav><a href="index.php?tabela=fornecedor&acao=incluir">Novo</a></nav>
      </form>
    </td>   	  	  
  </tr>
  <?php
  //require('../util/conecta.php');  
  //$sql = "select * from tbl_FORario";  
  //$resultado = $con->banco->Execute($sql); 	  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  //echo " FORario =  " . $resultado->Fields('FOR_NOME')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('FOR_UF')."<br>"; //  }
?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">	  
	  <td><footer><?php echo $oquefazer->registros->FOR_RAZAOSOCIAL;?></footer></td>
	  <td><footers><?php echo $oquefazer->registros->FOR_NOME_FANTASIA;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->FOR_CNPJ;?></footers></td>
	  <td><footers><?php echo $oquefazer->registros->FOR_CEP;?></footers></td>
    <td>		
	    <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=fornecedor&acao=alterar&codigo=<?php echo $oquefazer->registros->FOR_CODIGO;?>';}">Alterar</a></nav>
      <nav><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=fornecedor&acao=excluir&codigo=<?php echo $oquefazer->registros->FOR_CODIGO;?>';}">Excluir</a></nav>
	  </td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>