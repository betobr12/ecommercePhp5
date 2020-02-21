<body>
<form  name="form_cadastro" method="post" action="index.php" onSubmit="return verifica_cliente(this)">
  <div>
    <table>
      <tr>
        <td>
          <h1>Manutencao de Cliente</h1>
        </div></td>
      </tr>
      <tr>
        <td>Nome:</td>
        <td><label>
          <input name="cli_nome" type="text" id="cli_nome"  value="<?php echo $oquefazer->registros->CLI_NOME;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Endereco:</td>
        <td>
          <label>
            <input name="cli_endereco" type="text" id="cli_nome_fantasia" size="40" value="<?php echo $oquefazer->registros->CLI_ENDERECO;?>" />
          </label>
        </td>
      </tr>
      <tr>
        <td>Numero</td>
        <td><label>
          <input name="cli_numero" type="text" id="cli_numero" size="15"
          value="<?php echo $oquefazer->registros->CLI_NUMERO;?>" />
        </label></td>
      </tr>      
      <tr>      
        <td>Complemento:</td>
        <td><label>
          <input name="cli_complemento" type="text" id="cli_complemento" size="15"
          value="<?php echo $oquefazer->registros->CLI_COMPLEMENTO;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Bairro:</td>
        <td>
          <label>
            <input type="text" name="cli_bairro" id="cli_bairro"  value="<?php echo $oquefazer->registros->CLI_BAIRRO;?>"  />
          </label></td>
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
        <td>Cep:</td>
        <td><label>
          <input type="text" name="cli_cep" id="cli_cep" value="<?php echo $oquefazer->registros->CLI_CEP;?>"  />
        </label></td>
      </tr>
      <tr>
        <td>Tel. Residencial:</td>
        <td><label>
          <input type="text" name="cli_foneres" id="cli_foneres"  value="<?php echo $oquefazer->registros->CLI_FORNERES;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Celular:</td>
        <td><label>
          <input type="text" name="cli_fonecel" id="cli_fonecel" value="<?php echo $oquefazer->registros->CLI_FONECEL;?>"  />
        </label></td>
      </tr>
      <tr>
        <td>Tel. Comercial:</td>
        <td><label>
          <input type="text" name="cli_fonecom" id="cli_fonecom" value="<?php echo $oquefazer->registros->CLI_FONECOM;?>"  />
        </label></td>
      </tr>
      <tr>
        <td>CPF:</td>
        <td><input type="text" name="cli_cpf" id="cli_cpf" value="<?php echo $oquefazer->registros->CLI_cpf;?>"  /></td>
      </tr>
      <tr>
        <td>RG:</td>
        <td><input type="text" name="cli_rg" id="cli_rg" value="<?php echo $oquefazer->registros->CLI_RG;?>"  /></td>
      </tr>
      <tr>
        <td>Data Cadastro:</td>
        <td><input type="text" name="cli_datacadastro" id="cli_datacadastro" value="<?php echo $oquefazer->registros->CLI_DATACADASTRO;?>"  /></td>
      </tr>
      <tr>
        <td>Data de Nascimento:</td>
        <td><input type="text" name="cli_datanasc" id="cli_datanasc" value="<?php echo $oquefazer->registros->CLI_DATANASC;?>"  /></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="text" name="cli_email" id="cli_email" value="<?php echo $oquefazer->registros->CLI_EMAIL;?>"  /></td>
      </tr>
      <tr>
        <td>Login</td>
        <td><input type="text" name="cli_login" id="cli_login" value="<?php echo $oquefazer->registros->CLI_LOGIN;?>"  /></td>
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="text" name="cli_senha" id="cli_senha" value="<?php echo $oquefazer->registros->CLI_SENHA;?>"  /></td>
      </tr>
      <tr>
        <td>Data Ult. Compra</td>
        <td><input type="text" name="cli_dataultcomp" id="cli_dataultcomp" value="<?php echo $oquefazer->registros->CLI_DATAULTCOMP;?>"  /></td>
      </tr>
      <tr>
        <td>Valor Ult. Compra</td>
        <td><input type="text" name="cli_valor_ultcomp" id="cli_valor_ultcomp" value="<?php echo $oquefazer->registros->CLI_VALOR_ULTCOMP;?>"/></td>
      </tr>
      <tr>
        <td>Valor Total:</td>
        <td><input type="text" name="cli_valor_total" id="cli_valor_total" value="<?php echo $oquefazer->registros->CLI_VALOR_TOTAL;?>"/></td>
      </tr>   
      <tr>
        <td class="titulos_lista_pesquisa"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
        <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->CLI_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>