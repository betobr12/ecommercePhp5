<?php

  require('conecta.php');  
  $sql = "select * from tbl_cidade";
  
  $resultado = $con->banco->Execute($sql);
  
  while(!$resultado->EOF)  
  {	  
	  echo " cidade =  " . $resultado->Fields('CID_DESCRICAO')."<br>";
	  echo "   ";
	  echo "uf =  " 	. $resultado->Fields('CID_UF')."<br>";
	  $resultado->MoveNext();
	  
  }



?>