<?php
  
 $senha = 'beto';
 $criptografada = base64_encode($senha);

 echo "<br>sua senha e:<p>".$senha;

	echo "<br>sua senha criptografada e:<p>".$criptografada;

 $digitousenha = 'beto';
 

	
if(base64_encode($digitousenha) == $criptografada)
	
	echo "<br><br><br>acesso ok";	
	
else
		
   echo "<br><br><br>acesso negado";

 
 $senha_original_descriptografada = base64_decode($criptografada);
 
 echo "<br> sua senha original e: <p>".$senha_original_descriptografada;


?>