<?php
require __DIR__.'/vendor/autoload.php';
use \App\WebService\Speedio;

//instancia speedio
$obSpeedio = new Speedio;

//cnpj
$cnpj = '00.000.000.0001-91';

//consulta cnpj na api speedio
$result = $obSpeedio->consultarCNPJ($cnpj);

//empty - verifica se o resultado não está vazio
if(empty($result)){
    die('Erro ao consultar CNPJ');
}

//isset - verifica erro na requisição
if(isset($result['error'])){
    die($result['error']);
}

//imprime sucesso
/*echo "CNPJ: ".$cnpj."<br>";
echo "Razão Social: ".$result['RAZAO SOCIAL']."<br>";
echo "Nome Fantasia: ".$result['NOME FANTASIA']."<br>";
echo "Status: ".$result['STATUS']."<br>";
echo "CNAE Descrição: ".$result['CNAE PRINCIPAL DESCRICAO']."<br>";
echo "CNAE Código: ".$result['CNAE PRINCIPAL CODIGO']."<br>";
echo "Cep: ".$result['CEP']."<br>";
echo "Data Abertura: ".$result['DATA ABERTURA']."<br>";
echo "Ddd: ".$result['DDD']."<br>";
echo "Telefone: ".$result['TELEFONE']."<br>";
echo "Email: ".$result['EMAIL']."<br>";
echo "Tipo Logradouro: ".$result['TIPO LOGRADOURO']."<br>";
echo "Logradouro: ".$result['LOGRADOURO']."<br>";
echo "Número: ".$result['NUMERO']."<br>";
echo "Complemento: ".$result['COMPLEMENTO']."<br>";
echo "Bairro: ".$result['BAIRRO']."<br>";
echo "Município: ".$result['MUNICIPIO']."<br>";
echo "Uf: ".$result['UF']."<br>";*/

//echo '<pre>';
//print_r($result);
//echo '</pre>';
//exit;
?>
