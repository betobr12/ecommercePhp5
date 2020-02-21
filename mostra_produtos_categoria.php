
<table>
   <tr>
      <td>   
      <?php
         while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()){ ?>
         <div>
               <p><img src="admin/imagens/<?php echo $oquefazer->listar_imagem($oquefazer->registros->PROD_CODIGO);?>" width="173" height="140" /></p>
               <p><?php echo $oquefazer->registros->PROD_DESCRICAO;?></p>
               <h3>Valor:<?php echo formata_money($oquefazer->registros->PROD_VALOR);?></h3>               
               <a href="index.php?id=1&codproduto=<?php echo $oquefazer->registros->PROD_CODIGO;?>&acao=incluir_no_carrinho">
               <img src="img/botao-comprar-16.png" width="148" height="28" alt=""/></a>
			</div>             
      <?php }?>
	   </td>
   </tr>   
</table>