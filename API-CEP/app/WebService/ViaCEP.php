<?php

namespace App\WebService;

/**
 * Método responsável por consultar um CEP no ViaCEP
 * @param string $cep 
 * @return array
 */
class ViaCEP
{
    public static function consultarCEP($cep)
    {
        // INICIA O CURL
        $curl = curl_init();

        //CONFIGURAÇÕES DO CURL

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        // RESPONSE

        $response = curl_exec($curl);
        //FECHA A CONEXÃO ABERTA
        curl_close($curl);

        print_r($response);

        // CONVERTE O JSON PARA ARRAY
        $array= json_decode($response, true);

        // RETORNAR O CONTEÚDO EM ARRAY
        return isset($array['cep']) ? $array : null;
    }
}
