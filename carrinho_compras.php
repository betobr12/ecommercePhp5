<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cursos WEB-Commerce</title>
</head>

<body>
<form id="FmCarrinho" name="FmCarrinho" method="post" action="index.php">
  <table>  
      <tr>
		    <td colspan="4"><h2>Meu Carrinho de Compras</h2></td>
      </tr>
      <tr>
		    <td><footer><h3>Descricao do Produto</h3></footer></td>
		    <td><footer><h3>Quantidade</h3></footer></td>
		    <td><footer><h3>Preco Unitario</h3></footer></td>
		    <td><footer><h3>Total</h3></footer></td>
      </tr>
  <?php	     
		 $total_carrinho = 0;
	   $codcategoria = $_REQUEST['codcategoria'];
		while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
		{
			$total_carrinho += $oquefazer->registros->CAR_VALOR  * $oquefazer->registros->CAR_QUANTIDADE;
	?>
      <tr>
        <td><?php echo $oquefazer->registros->PROD_DESCRICAO;?></td>
        <td>
          <p>
            <input name="qtde[]" type="text" value="<?php echo $oquefazer->registros->CAR_QUANTIDADE;?>" size="12">
            <input type="hidden" name="codigo[]" value="<?php echo $oquefazer->registros->PROD_CODIGO;?>">
          </p>          </td>
        <td><?php echo formata_money($oquefazer->registros->CAR_VALOR);?></td>
        <td><?php echo formata_money($oquefazer->registros->CAR_VALOR  * $oquefazer->registros->CAR_QUANTIDADE);?></td>
        
       
      </tr>
       <?php } ?> 
      <tr>
        <td>Total do Carrinho</td>
        <td style="text-align: center"><?php echo formata_money($total_carrinho);?></td>
      </tr>
      <tr>
		    <td>
          <label><input type="submit" name="botao_atualizar" value="Atualizar"/> </label>
          <input type="hidden" name="acao" value="atualizar_carrinho"/> 
          <input type="hidden" name="id" value="1"/>
          <input type="hidden" name="codcategoria" id="codcategoria" value="<?php echo $codcategoria;?>"/> 
        ou 
          <label>
          <input type="button" name="continuar_comprando" value="Continuar Comprando" onClick="document.location='index.php?id=1&acao=listar_produtos&codcategoria=<?php echo $codcategoria;?>'"/>
	         </label>
        </td>
      </tr>
      <tr>
		    <td colspan="4" style="text-align: center"><a href="index.php?id=4&acao=finalizar_pedido">FINALIZAR PEDIDO</a></td>
      </tr> 
  </table>
</form>
</body>
</html>