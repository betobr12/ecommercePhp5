<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<form id="form1" name="form_cadastro" method="post" action="">
  <table width="508" height="326" border="1" align="center">
    <tr>
      <td colspan="2" align="center"><h2>Manutencao de Cidades</h2></td>
    </tr>
    <tr>
      <td width="60"><strong>Nome:</strong></td>
      <td width="271"><label>
        <input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="50" />
      </label></td>
    </tr>
    <tr>
      <td><strong>UF:</strong></td>
      <td><label>
        <select name="CID_UF" id="CID_UF">
          <option>SP</option>
          <option>SC</option>
          <option>RJ</option>
          <option>RS</option>
          <option>RO</option>
          <option>MS</option>
          <option>MG</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="submit" name="button" id="button" value="Salvar" />
        <input type="reset" name="button2" id="button2" value="Limpar" />
      </label>
      <input type="submit" name="button3" id="button3" value="Cancelado" /></td>
      <input type="hidden" name="tabela" value="cidade"/>
      <input type="hidden" name="acao" value="gravar" />
    </tr>
    <tr>
      <td colspan="2">Rodape</td>
    </tr>
  </table>
</form>
</body>
</html>