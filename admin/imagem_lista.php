
<body>
<div>
<table>
  <tr>
   <form id="form_pesquisa" name="form1" method="post" action="index.php?tabela=imagem&acao=listar">
   <td>
     <p> 
       <b>Mostrar produto codigo =</b><?php echo $_REQUEST['codigo'];?> </p>
     <p><b>Pesquisar:</b>
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
    <td><h2><a href="index.php?tabela=imagem&acao=listar&ordem=PROD_CODIGO">Produto</a></h2></td>    
    <td><h2><a href="index.php?tabela=imagem&acao=listar&ordem=IMG_DESCRICAO">Imagem</a></h2></td>    
	  <td><form><nav><a href="index.php?tabela=imagem&acao=incluir&codigo=<?php echo $_REQUEST['codigo'];?>">Novo</a></nav></form></td>    	  	  
  </tr>
  <?php
  //require('../util/conecta.php');  
  //$sql = "select * from tbl_FORario";  
  //$resultado = $con->banco->Execute($sql); 	  
   while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
  //while(!$resultado->EOF)  
  {	  
	  //echo " FORario =  " . $resultado->Fields('FOR_NOME')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('FOR_UF')."<br>";  }
  ?>
  <tr onMouseOver="muda_cor_over(this)" onMouseOut="muda_cor_out(this)">	  
	  <td><footer><?php echo $oquefazer->registros->PROD_CODIGO;?></footer></td>	  
	  <td><footers><img src="./imagens/<?php echo $oquefazer->registros->IMG_DESCRICAO;?>" width="277" height="202" /></footers></td>	
    <td><nav>
      <p><a href="javascript:if(confirm('Deseja realmente excluir esse registro?')){location='index.php?tabela=imagem&acao=excluir&codigo=<?php echo $_REQUEST['codigo'];?>&codigo_imagem=<?php echo $oquefazer->registros->IMG_CODIGO;?>';}">Excluir</a></p>		  
    </nav></td>
  </tr>	
  <?php }?>  
  <tr>
	  <td><footer>Numero de registros: <?php echo $oquefazer->total_registros();?></footer></td>
  </tr>
</table>
</div>
</body>