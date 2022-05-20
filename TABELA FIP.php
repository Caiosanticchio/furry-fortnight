<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <link rel="stylesheet" href="php.css">
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="cabecalho">
        <img src="logo.png" alt="logo" width="200" height="200">

        <nav>
            <ul class="menu">
                <li class="links"><a href="#">Home</a></li>
                <li class="links"><a href="#">Sobre</a></li>
                <li class="links"><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>

    <section class="resultado">
        <h1>Valor do IPVA é:</h1><br>

        <section class="php">
            <?php

$reg=$_POST["regiao"];
$vec=$_POST["veiculos"];
$v=$_POST["valor"];

if ($reg=="sp")
{
    if ($vec=="carro")
    {
        $val=$v*4/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1.5/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2/100;
        echo"R$ $val ";
    }
}
else if ($reg=="es")
{
    if ($vec=="carro")
    {
        $val=$v*2/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*3/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*1.7/100;
        echo" R$ $val ";
    }
}
else if ($reg=="mg")
{
    if ($vec=="carro")
    {
        $val=$v*4.2/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2.2/100;
        echo"R$ $val ";
    }
}
else if ($reg=="rj")
{
    if ($vec=="carro")
    {
        $val=$v*4.10/100;
        echo"R$ $val ";
    }
    else if ($vec=="caminhão")
    {
        $val=$v*1.30/100;
        echo"R$ $val ";
    }
    else if ($vec=="moto")
    {
        $val=$v*2.50/100;
        echo" R$ $val";
    }
}
?>
        </section>
    </section>
</body>

</html>
