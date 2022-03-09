<?php
namespace App\WebService;

class Speedio
{
    //url speedio
    const URL_BASE = 'https://api-publica.speedio.com.br';

    //consulta cnpj speedio
    public function consultarCNPJ($cnpj)
    {
        //var_dump($cnpj);
        //remove os caracteres inválidos - substitui tudo que não seja número
        $cnpj = preg_replace('/\D/','',$cnpj);
        //retorna a excução da consulta
        //var_dump($cnpj);
        //exit;
        return $this->get('/buscarcnpj?cnpj='.$cnpj);
    }

    //executa a consulta GET api no speedio
    public function get($resource)
    {
        //endpoint completo da api
        $endpoint = self::URL_BASE.$resource;
        //var_dump($endpoint);
        //exit;

        //inicia curl
        $curl = curl_init();

        //configurações curl - array
        curl_setopt_array($curl,[
            //url endpoint
            CURLOPT_URL             => $endpoint,
            //retorna o conteudo
            CURLOPT_RETURNTRANSFER  => true,
            //requisição get
            CURLOPT_CUSTOMREQUEST   => 'GET'
        ]);

        //executa a requisição
        $response = curl_exec($curl);

        //fecha a requisição
        curl_close($curl);

        //response array
        $responseArray = json_decode($response,true);

        //retorna o array com os dados
        return is_array($responseArray) ? $responseArray : [];

        //echo '<pre>';
        //print_r($response);
        //echo '</pre>';
        //exit;
    }
}

?>