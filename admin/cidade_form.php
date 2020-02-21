<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<link rel="stylesheet" href="../util/admin.css">
<body>
<div>
<form id="form1" name="form_cadastro" method="post" action="">
  <table>
    <tr>
      <td><h1>Manutencao Cidade</h1></td>
    </tr>
    <tr>
        <td><strong>Nome:</strong></td>
        <td>
          <label>        
          <input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="50" value="<?php echo $oquefazer->registros->CID_DESCRICAO;?>" />
          </label>
        </td>
    </tr>
    <tr>
      <td><strong>UF:</strong></td>
      <td><label>
        <select name="CID_UF" id="CID_UF" value="<?php echo $oquefazer->registros->CID_UF;?>">
       <?php 
        $estado1 = '';
		$estado2 = '';
		$estado3 = '';
		$estado4 = '';
		$estado5 = '';
		$estado6 = '';
		$estado7 = '';
		
		switch($oquefazer->registros->CID_UF) 
		
			{
			case 'SP': $estado1 = 'selected';break;
			case 'SC': $estado2 = 'selected';break;
			case 'RJ': $estado3 = 'selected';break;
			case 'RS': $estado4 = 'selected';break;
			case 'RO': $estado5 = 'selected';break;
			case 'MS': $estado6 = 'selected';break;
			case 'MG': $estado7 = 'selected';break;
			}		
        ?>
          <option value="SP"<?php echo $estado1 ?>>SP</option>
          <option value="SC"<?php echo $estado2 ?>>SC</option>
          <option value="RJ"<?php echo $estado3 ?>>RJ</option>
          <option value="RS"<?php echo $estado4 ?>>RS</option>
          <option value="RO"<?php echo $estado5 ?>>RO</option>
          <option value="MS"<?php echo $estado6 ?>>MS</option>
          <option value="MG"<?php echo $estado7 ?>>MG</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="button" id="button" value="Salvar" />
        <input type="reset" name="button2" id="button2" value="Limpar" />
      </label>
      <input type="submit" name="button3" id="button3" value="Cancelado" /></td>
      <input type="hidden" name="tabela" value="cidade"/>
      <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao ?>" />
       <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->CID_CODIGO;?>" />
    </tr>
    <tr>
      <td>Rodape</td>
    </tr>
  </table>
</form>
	</div>
</body>
</html>