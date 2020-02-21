<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cidade Lista</title>
</head>

<body>
<table width="813" height="253" border="1">
  <tr>
    <td colspan="4" align="center"><h2>&nbsp;</h2></td>
  </tr>
  <tr>
    <td width="237" height="23" align="center"><h3><strong>Descricao</strong></h3></td>
    <td width="104" align="center"><h3><strong>UF</strong></h3></td>
    <td colspan="2" align="center"><strong>Novo Registro</strong></td>
  </tr>
  <?php

  require('../util/conecta.php');  
  $sql = "select * from tbl_cidade";
  
  $resultado = $con->banco->Execute($sql);
  
  while(!$resultado->EOF)  
  {	  
	  //echo " cidade =  " . $resultado->Fields('CID_DESCRICAO')."<br>";
	  //echo "uf =  " 	. $resultado->Fields('CID_UF')."<br>";
	  
	  
//  }



?>
  <tr>
    <td height="28"><?php echo $resultado->Fields('CID_DESCRICAO');?></td>
    <td><?php echo $resultado->Fields('CID_UF');?></td>
    <td width="88" align="center"><strong>Alterar </strong></td>
    <td width="188" align="center"><strong>Excluir</strong></td>
  </tr>
  
  <?php
  
  $resultado->MoveNext();
  
  
  }?>
  
  <tr>
    <td height="109" colspan="4">Numero de registros:</td>
  </tr>
</table>
</body>
</html>