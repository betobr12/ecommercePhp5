<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGAR</title>
</head>

<body>
<form id="form_login" name="form_login" method="post" action="index.php">
  <table>    
      <tr>
        <td>&nbsp;</td>
        <td><p>&nbsp;</p>
        <p>Se for cadastrado entre com o login e senha:</p>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td>Login:</td>
        <td><input type="text" name="cli_login" id="cli_login"></td>
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="password" name="cli_senha" id="cli_senha"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="botao_acessar" id="botao_acessar" value="Acessar">
        <input type="hidden" name="id" id="id" value="3">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><p>Não sou cadastrado, <a href="index.php?id=4&acao=novo_cliente">cadastre-se aqui!</a></p></td>
      </tr> 
  </table>
</form>
</body>
</html>