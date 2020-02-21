<body>
<form  name="form_cadastro" method="post" action="index.php" onSubmit="return verifica_fornecedor(this)">
  <div>
    <table>
      <tr>
        <td>
        <div>
          <h1 class="titulos_lista_pesquisa">Manutencao de fornecedor</h1>
        </div>
        </td>
      </tr>
      <tr>
        <td>Razão Social</td>
        <td><label>
          <input type="text" name="for_razaosocial"  value="<?php echo $oquefazer->registros->FOR_RAZAOSOCIAL;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Nome Fantasia</td>
        <td>
          <label>
            <input name="for_nome_fantasia" type="text" id="for_nome_fantasia" size="40" value="<?php echo $oquefazer->registros->FOR_NOME_FANTASIA;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Endereço</td>
        <td>
          <label>
            <input name="for_endereco" type="text" id="for_endereco" size="15" value="<?php echo $oquefazer->registros->FOR_ENDERECO;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Bairro</td>
        <td>
          <label>
            <input name="for_bairro" type="text" id="for_bairro" size="15" value="<?php echo $oquefazer->registros->FOR_BAIRRO;?>" />
          </label></td>
      </tr>
      <tr>
        <td>Fone</td>
        <td>
          <label>
            <input type="text" name="for_fone" id="for_fone" onKeyPress="formata_mascara(this, '##-####-####')" value="<?php echo $oquefazer->registros->FOR_FONE;?>"  />
          </label>
        </td>
      </tr>
      <tr>
        <td>Responsável</td>
        <td>
          <label>
            <input type="text" name="for_responsavel" id="for_responsavel" value="<?php echo $oquefazer->registros->FOR_RESPONSAVEL;?>"  />
          </label>
        </td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>
          <label>
            <input type="text" name="for_email" id="for_email"  value="<?php echo $oquefazer->registros->FOR_EMAIL;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Cep</td>
        <td>
          <label>
            <input type="text" name="for_cep" id="for_cep" value="<?php echo $oquefazer->registros->FOR_CEP;?>"  />
          </label>
        </td>
      </tr>
      <tr>
        <td>CNPJ</td>
        <td>
          <label>
            <input type="text" name="for_cnpj" id="for_cnpj" value="<?php echo $oquefazer->registros->FOR_CNPJ;?>"  />
          </label>
        </td>
      </tr>
      <tr>
        <td>Cidade</td>
        <td>
          <label>
            <select name="cid_codigo" id="cid_codigo">
            <option>Selecione uma cidade</option>
            <?php echo $oquefazer->listar_cidades();?>
            </select>
          </label>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">
          <label>
            <input type="submit" name="button" id="button" value="Salvar" />
            <input type="reset" name="button2" id="button2" value="Limpar" />
            <input type="button" name="button3" id="button3" value="Cancelar" />
          </label>
            <input type="hidden" name="tabela" value="fornecedor" />
            <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
            <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->FOR_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td class="titulos_lista_pesquisa">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>