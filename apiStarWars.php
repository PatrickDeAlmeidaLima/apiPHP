<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>API</title>

<body>
    <?php
    $url = "https://swapi.dev/api/people/?page=2";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $resultados = json_decode(curl_exec($ch));

    // var_dump($resultados);

    foreach ($resultados->results as $ator) {
        // var_dump($ator);
        echo "Nome do ator :".$ator->name."<br>";
        echo "Altura do ator :".$ator->height."<br>";
        foreach ($ator->films as $filme) {
            echo "Filme :".$filme."<br>";
        }

        echo "<hr>";
    }
    ?>
</body>
</head>

</html>
