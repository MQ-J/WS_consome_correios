<h2>Consumindo Web Service dos correios</h2>

<table>
  <tr>
    <th>Seq.</th>
    <th><h4>Descrição</h4></th>
  </tr>
  <tr>
    <td>1</td>
    <td>Criar um objeto SoapClient passando como parâmetro o link para o wsdl</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Definir os parâmetros em forma de Array. O nome e tipo de cada um deles deve estar de acordo com o wsdl (neste caso, o CEP em string)</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Chamar a função escolhida do Web Service, passando os parâmetros e recebendo a resposta e uma variável</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Trecho onde eu filtro o resultado para poder usar foreach depois</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Para cada campo existente na resposta eu criei uma célula na tabela para mostrar o valor</td>
  </tr>
</table>
