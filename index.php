
<form method="post">
  <label for="cep">Digite um CEP para pesquisar:</label>
  <input type="number" id="cep" name="cep"></input>
  <input type="submit"></input
</form>

<?php if(isset($_POST['cep'])) : ?>
  <table>
    <tr>
      <th>Bairro</th>
      <th>Cep</th>
      <th>Cidade</th>
      <th></th>
      <th>Endereço</th>
      <th>UF</th>
    </tr>
    <tr>
    <?php
      //1
      $webservice = new SoapClient("https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl");

      //2
      $parametros = array("cep" => $_POST['cep']);

      //3
      $result = $webservice->consultaCEP($parametros);

      //4
      $endereco = $result->return;

      //5
      foreach($endereco as $item)
      {
        echo "<td>" . $item . "</td>";
      }
    ?>
    </tr>
  </table>

<? endif; ?>