<body>
<form  name="form_cadastro" method="post" action="index.php">
  <div>
    <table>
      <tr>
        <td>
          <div>
            <h1>Manutencao de Produto</h1>
          </div>
        </td>
      </tr>
      <tr>
        <td>Descricao do Produto</td>
        <td>
          <label>
            <input name="PROD_DESCRICAO" type="text" id="PROD_DESCRICAO" size="40" value="<?php echo $oquefazer->registros->PROD_DESCRICAO;?>"/>
          </label>
        </td>
      </tr>
      <tr>
        <td>Valor</td>
        <td>
          <label>
            <input name="PROD_VALOR" type="text" id="PROD_VALOR" size="15" value="<?php echo $oquefazer->registros->PROD_VALOR;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Quantidade</td>
        <td>
          <label>
          <input name="PROD_QUANTIDADE" type="text" id="PROD_QUANTIDADE" size="15" value="<?php echo $oquefazer->registros->PROD_QUANTIDADE;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Unidade</td>
        <td>
          <label>
            <input type="text" name="PROD_TIPO" id="PROD_TIPO" value="<?php echo $oquefazer->registros->PROD_TIPO;?>"/>
          </label>
        </td>
      </tr>
      <tr>
        <td>Observação</td>
        <td>
          <label>
          <input type="text" size="80" name="PROD_OBS" id="PROD_OBS" value="<?php echo $oquefazer->registros->PROD_OBS;?>"/>
          </label></td>
      </tr>
      <tr>
        <td>Categotria</td>
        <td><label>
          <select name="CAT_CODIGO" id="CAT_CODIGO">
            <option>Selecione a categoria</option>
            <?php echo $oquefazer->listar_categoria();?>
          </select>
        </label></td>
		  </tr>
        <tr>
          <td>Fornecedor</td>
          <td>
            <label>
              <select name="FOR_CODIGO" id="FOR_CODIGO">
              <option>Selecione um Fornecedor</option>
              <?php echo $oquefazer->listar_fornecedor();?>
              </select>
            </label>
          </td>        
      </tr>
      <tr>
        <td>
          <label>
            <input type="submit" name="button" id="button" value="Salvar" />
            <input type="reset" name="button2" id="button2" value="Limpar" />
            <input type="button" name="button3" id="button3" value="Cancelar" />
          </label>
            <input type="hidden" name="tabela" value="produto" />
            <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
            <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->PROD_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>