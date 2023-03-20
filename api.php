<?php

$identificador = 535;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$resposta=curl_exec($ch);

$valores = json_decode($resposta, TRUE);
echo "O nome do pokemon é :" .$valores['name'];
echo"<br>";
echo "A altura do pokemon é :" .$valores['height'];
echo"<br>";


echo "------------------------------------<br>";


$json = file_get_contents("https://pokeapi.co/api/v2/pokemon/ditto");

// decodificar o JSON em um objeto PHP
$data = json_decode($json);

// imprimir os dados do objeto PHP
echo "Nome: " . $data->name . "<br>";
echo "Peso: " . $data->weight . "<br>";
echo "Altura: " . $data->height . "<br>";

// imprimir a imagem do pokemon
echo "<img src='" . $data->sprites->front_default . "'>";
?>
