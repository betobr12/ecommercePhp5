
<body>
<div id="container">
<table>
  <tr>
	  <td><h2>Lista de Categorias</h2>
		<label for="textfield">Pesquisar:</label>      
      <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=categoria&acao=listar">
      <input type="text" name="pesquisa" id="pesquisa" />  
       <input type="submit" value="Pesquisar" />        
      </form>
    </td>
   </tr>
  <tr>
    <td><h2><a href="index.php?tabela=categoria&acao=listar&ordem=CAT_DESCRICAO">Descricao</a></h2></td>
	  <td><nav><a href="index.php?tabela=categoria&acao=incluir">Novo</a></nav></td>  	  
  </tr>
  <?php

  //require('../util/conecta.php');  
  //$sql = "select * from tbl_cidade";  
  //$resultado = $con->banco->Execute($sql);  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  //echo " cidade =  " . $resultado->Fields('CID_DESCRICAO')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('CID_UF')."<br>";  
//  }
  ?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">
	  <td><footer><?php echo $oquefazer->registros->CAT_DESCRICAO;?></footer></td>	  
    <td>
	    <nav><a href="javascript:if(confirm('Deseja realmente alterar esse registro?')){location='index.php?tabela=categoria&acao=alterar&codigo=<?php echo $oquefazer->registros->CAT_CODIGO;?>';}">Alterar</a>
      </nav> 
      <nav><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=categoria&acao=excluir&codigo=<?php echo $oquefazer->registros->CAT_CODIGO;?>';}">Excluir</a>
	    </nav>
    </td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>
