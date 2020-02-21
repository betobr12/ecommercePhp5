<?php
  
 $senha = 'beto';
 $criptografada = md5($senha);

 echo "sua senha é".$senha;

	echo "<br>sua senha criptografada é".$criptografada;

 $digitousenha = 'beto';
 
if(md5($digitousenha) == $criptografada)
	echo "acesso ok";
	
	else
   echo "acesso negado";
 

?>