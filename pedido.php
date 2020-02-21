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
        <td><h2>Dados do Cliente</h2></td>
      </tr>
<?php 
	        $oquefazer->registros_pedido = $oquefazer->res_pedido->FetchNextObject();
	  		  $_SESSION['sessao_codigo_pedido'] = $oquefazer->registros_pedido->PED_CODIGO;
	  		
	      ?>
      <tr>
        <td colspan="4">Nome: <?php echo $oquefazer->registros_pedido->CLI_NOME;?></td>
      </tr>
      <tr>
        <td colspan="4">Endereço: <?php echo $oquefazer->registros_pedido->CLI_ENDERECO;?></td>
      </tr>
      <tr>
        <td colspan="4">E-mail: <?php echo $oquefazer->registros_pedido->CLI_EMAIL;?></td>
      </tr>
      <tr>
        <td colspan="4">Fone: <?php echo $oquefazer->registros_pedido->CLI_FONERES;?></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
		  <td><h2>Produtos a Adquirir</h2></td>
      </tr>
      <tr>
		  <td><footer><h3>Descricao do Produto</h3></footer></td>
		  <td ><footer><h3>Quantidade</h3></footer></td>
		  <td ><footer><h3>Preco Unitario</h3></footer></td>
		  <td><footer><h3>Total</h3></footer></td>
      </tr>
        <?php
	     
		      $total_carrinho = 0;
	        //$codcategoria = $_REQUEST['codcategoria'];
		        while($oquefazer->reg_itens = $oquefazer->res_itens->FetchNextObject()){
			        $total_carrinho += $oquefazer->reg_itens->PED_VALOR * $oquefazer->reg_itens->PED_QUANT;
	      ?>
      <tr>
        <td><?php echo $oquefazer->reg_itens->PROD_DESCRICAO;?></td>
        <td><p><?php echo $oquefazer->reg_itens->PED_QUANT;?></p>          </td>
        <td><?php echo formata_money($oquefazer->reg_itens->PED_VALOR);?></td>
        <td><?php echo formata_money($oquefazer->reg_itens->PED_VALOR  * $oquefazer->reg_itens->PED_QUANT);?></td>      
      </tr>
<?php } ?> 
      <tr>
        <td>Total do Carrinho</td>
        <td><?php echo formata_money($total_carrinho);?></td>
      </tr>
      <tr>
		  <td><label>
		    <input type="button" name="continuar_comprando" value="Continuar Comprando" onClick="document.location='index.php?id=1&acao=listar_produtos&codcategoria=<?php echo $codcategoria;?>'"/>
	    </label>
        </td>
      </tr>
      <tr>
		  <td><a href="gera_boleto/boleto_cef.php">GERAR O BOLETO</a></td>
      </tr>
 
  </table>
</form>
</body>
</html>