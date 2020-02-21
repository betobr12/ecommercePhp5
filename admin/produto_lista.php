
<body>
<div>
<table>
  <tr>
    <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=produto&acao=listar">
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
    <td><h2><a href="index.php?tabela=produto&acao=listar&ordem=PROD_DESCRICAO">Produto</a></h2></td>    
    <td><h2><a href="index.php?tabela=produto&acao=listar&ordem=PROD_QUANTIDADE">Qtde</a></h2></td>
    <td><h2><a href="index.php?tabela=produto&acao=listar&ordem=PROD_VALOR">Valor</a></h2></td>
    <td><h2><a href="index.php?tabela=produto&acao=listar&ordem=PROD_TIPO">Unidade</a></h2></td>	
     <td><h2><a href="index.php?tabela=produto&acao=listar&ordem=CAT_CODIGO">Categoria</a></h2></td>	  
	  <td><form><h1><nav><a href="index.php?tabela=produto&acao=incluir">Novo</a></nav></h1></form></td>    	  	  
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
	  <td><?php echo $oquefazer->registros->PROD_DESCRICAO;?></td>
	  <td><?php echo $oquefazer->registros->PROD_QUANTIDADE;?></td>
	  <td><?php echo $oquefazer->registros->PROD_VALOR;?></td>
	  <td><?php echo $oquefazer->registros->PROD_TIPO;?></td>
	  <td><?php echo $oquefazer->registros->CAT_CODIGO;?></td>
    <td>		
	    <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=produto&acao=alterar&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>';}">Alterar</a></nav>
      <nav><p><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=produto&acao=excluir&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>';}">Excluir</a></p></nav>
		  <nav><p><a href="index.php?tabela=imagem&acao=listar&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>">Imagem</a></p></nav>
	  </td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>