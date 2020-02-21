<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Usuario</title>
</head>
  <link rel="stylesheet" href="../util/admin.css">
<body>
  <div>
    <form id="form1" name="form_cadastro" method="post" action="">
      <table>
        <tr>
          <td><h2>Manutencao de Usuarios</h2></td>
        </tr>
        <tr>
          <td><strong>Nome:</strong></td>
          <td>
            <label>        
              <input name="USU_NOME" type="text" id="USU_NOME" size="50" value="<?php echo $oquefazer->registros->USU_NOME;?>" />
            </label>
          </td>
        </tr>
        <tr>
          <td><strong>Login:</strong></td>
          <td><input name="USU_LOGIN" type="text" id="USU_LOGIN" size="25" value="<?php echo $oquefazer->registros->USU_LOGIN;?>"/></td>
        </tr>
        <tr>
          <td><strong>Senha:</strong></td>
          <td>
            <input name="USU_SENHA" type="text" id="USU_SENHA" value="<?php echo $oquefazer->registros->USU_SENHA;?>" size="25" />
	        </td>
        </tr>
        <tr>
          <td><strong>Nivel de Acesso:</strong></td>
          <td><input name="USU_NIVEL" type="text" id="USU_NIVEL" size="10" value="<?php echo $oquefazer->registros->USU_NIVEL;?>"/></td>
        </tr>
        <tr>
          <td>
            <label>
              <input type="submit" name="button" id="button" value="Salvar" />
              <input type="reset" name="button2" id="button2" value="Limpar" />
            </label>
              <input type="submit" name="button3" id="button3" value="Cancelado" /></td>
              <input type="hidden" name="tabela" value="usuario"/>
              <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao ?>" />
              <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->USU_CODIGO;?>" />
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
</body>
</html>