<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - CNPJ - SPEEDIO </title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <h2>CONSULTA CNPJ</h2>
    <?php 
    require('./consultar.php'); 

    ?>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">CNPJ</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Status</th>
                <th scope="col">CNAE Descrição</th>
                <th scope="col">CNAE Código</th>
                <th scope="col">Cep</th>
                <th scope="col">Data Abertura</th>
                <th scope="col">Ddd</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo Logradouro</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro<th>
                <th scope="col">Município</th>
                <th scope="col">Uf</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $cnpj; ?></td>
                <td scope="row"><?php echo $result['RAZAO SOCIAL']; ?></td>
                <td scope="row"><?php echo $result['NOME FANTASIA']; ?></td>
                <td scope="row"><?php echo $result['STATUS']; ?></td>
                <td scope="row"><?php echo $result['CNAE PRINCIPAL DESCRICAO']; ?></td>
                <td scope="row"><?php echo $result['CNAE PRINCIPAL CODIGO']; ?></td>
                <td scope="row"><?php echo $result['CEP']; ?></td>
                <td scope="row"><?php echo $result['DATA ABERTURA']; ?></td>
                <td scope="row"><?php echo $result['DDD']; ?></td>
                <td scope="row"><?php echo $result['TELEFONE']; ?></td>
                <td scope="row"><?php echo $result['EMAIL']; ?></td>
                <td scope="row"><?php echo $result['TIPO LOGRADOURO']; ?></td>
                <td scope="row"><?php echo $result['LOGRADOURO']; ?></td>
                <td scope="row"><?php echo $result['NUMERO']; ?></td>
                <td scope="row"><?php echo $result['COMPLEMENTO']; ?></td>
                <td scope="row"><?php echo $result['BAIRRO']; ?></td>
                <td scope="row"><?php echo $result['MUNICIPIO']; ?></td>
                <td scope="row"><?php echo $result['UF']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>