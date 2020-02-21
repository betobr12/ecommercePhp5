<body>
<form action="index.php" method="post" enctype="multipart/form-data"  name="form_cadastro">
  <div>
    <table>
      <tr>
        <td>
          <h1>Manutencao de Imagem</h1>
        </div>
        </td>
      </tr>
      <tr>
        <td>Selecione a Imagem:</td>
        <td><input type="file" name="img_descricao" id="img_descricao"></td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="submit" name="button" id="button" value="Salvar" />
            <input type="reset" name="button2" id="button2" value="Limpar" />
            <input type="button" name="button3" id="button3" value="Cancelar" />
          </label>
            <input type="hidden" name="tabela" value="imagem" />
            <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo'];?>"/>                
        </td>
      </tr>
      <tr>
        <td>
          <b>Mostrar produto codigo =</b><?php echo $_REQUEST['codigo'];?> </p>
        </td>
      </tr>
    </table>
  </div>
</form>
</body>