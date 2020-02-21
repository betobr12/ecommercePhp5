<?php
  
 $senha = 'beto';
 $criptografada = sha1($senha);

 echo "sua senha é".$senha;

	echo "<br>sua senha criptografada é".$criptografada;

 $digitousenha = 'beto';
 
if(sha1($digitousenha) == $criptografada)
	echo "acesso ok";
	
	else
   echo "acesso negado";
 

?>