<?php 
	$oquefazer->listar_categoria();
?>
 <?php
		while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
		{
?>
		<div>			
			<a href="index.php?id=1&codcategoria=<?php echo $oquefazer->registros->CAT_CODIGO;?>&acao=listar_produtos">
			<?php echo $oquefazer->registros->CAT_DESCRICAO;?></a>		
		</div>		
<?php }?>
