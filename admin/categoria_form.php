<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categoria</title>
</head>
<link rel="stylesheet" href="../util/admin.css">
<body>
<div id="container">
<form id="form1" name="form_cadastro" method="post" action="">
  <table>
    <tr>
      <td><h1>Manutencao Categoria</h1></td>
    </tr>
    <tr>
      <td><strong>Nome:</strong></td>
      <td width="271"><label>        
        <input name="CAT_DESCRICAO" type="text" id="CAT_DESCRICAO" size="50" 
        value="<?php echo $oquefazer->registros->CAT_DESCRICAO;?>" />
      </label></td>
    </tr>
    <tr>      
    <tr>
      <td>
        <label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
        </label>
          <input type="submit" name="button3" id="button3" value="Cancelado" /></td>
          <input type="hidden" name="tabela" value="categoria"/>
          <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao ?>" />
          <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->CAT_CODIGO;?>" />
    </tr>
    <tr>
		  <h3> <td colspan="2">Rodape</td></h3>
    </tr>
  </table>
</form>
	</div>
</body>
</html>