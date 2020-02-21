
<body>
<div>
<table>
  <tr>
    <td><h1>Lista Cidade</h1>
		  <label for="textfield">Pesquisar:</label>      
        <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=cidade&acao=listar">
          <input type="text" name="pesquisa" id="pesquisa" />  
          <input type="submit" value="Pesquisar" />        
        </form>
    <h2>&nbsp;</h2>
    </td>
  </tr>
  <tr>
    <td><h2><a href="index.php?tabela=cidade&acao=listar&ordem=CID_DESCRICAO">Descricao</a></h2></td>
    <td><h2><a href="index.php?tabela=cidade&acao=listar&ordem=CID_UF">UF</a></h2></td>    
    <td><nav><a href="index.php?tabela=cidade&acao=incluir">Novo</a></nav></td>	  
  </tr>
  <?php
  //require('../util/conecta.php');  
  //$sql = "select * from tbl_cidade";  
  //$resultado = $con->banco->Execute($sql);	  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  /*echo " cidade =  " . $resultado->Fields('CID_DESCRICAO')."<br>";
	  echo "uf =  " 	. $resultado->Fields('CID_UF')."<br>";	  
    }*/
  ?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">
	  <td><footer><?php echo $oquefazer->registros->CID_DESCRICAO;?></footer></td>
	  <td><footers><?php echo $oquefazer->registros->CID_UF;?></footers></td>
    <td>	
	    <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=cidade&acao=alterar&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>';}">Alterar</a></nav>
      <nav><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=cidade&acao=excluir&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>';}">Excluir</a></nav>
	  </td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>
