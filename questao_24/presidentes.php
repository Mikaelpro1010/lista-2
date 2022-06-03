<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_DEFAULT);
$vice = filter_input(INPUT_GET, 'vice', FILTER_DEFAULT);
$anos = filter_input(INPUT_GET, 'anos', FILTER_DEFAULT);

$presidentes[0]["nome"] = "Deodoro da Fonseca";
$presidentes[0]["vice"] = "Floriano Peixoto";
$presidentes[0]["ano"] = "1889";
$presidentes[1]["nome"] = "Afonso Pena";
$presidentes[1]["vice"] = "Nilo Peçanha";
$presidentes[1]["ano"] = "1906";
$presidentes[2]["nome"] = "Campos Sales";
$presidentes[2]["vice"] = "Rosa e Silva";
$presidentes[2]["ano"] = "1898";

function cmp($var_1, $var_2)
{
    return $var_1["nome"] <  $var_2["nome"];
}

function cmp_1($var_3, $var_4)
{
    return $var_3["nome"] > $var_4["nome"];
}

function cmp_2($var_5, $var_6)
{
    return $var_5["vice"] <  $var_6["vice"];
}

function cmp_3($var_7, $var_8)
{
    return $var_7["vice"] >  $var_8["vice"];
}

function cmp_4($var_9, $var_10)
{
    return $var_9["ano"] < $var_10["ano"];
}

function cmp_5($var_11, $var_12)
{
    return $var_11["ano"] > $var_12["ano"];
}

if ($nome == "Cima") {
    usort($presidentes, "cmp");
}
if ($nome == "Baixo") {
    usort($presidentes, "cmp_1");
}
if ($vice == "Cima_vice") {
    usort($presidentes, "cmp_2");
}
if ($vice == "Baixo_vice") {
    usort($presidentes, "cmp_3");
}
if ($anos == "Cima_anos") {
    usort($presidentes, "cmp_4");
}
if ($anos == "Baixo_anos") {
    usort($presidentes, "cmp_5");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body class="container">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <td>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?nome=Baixo">Crescente</a>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?nome=Cima">Decrescente</a>
                    </td>
                    <td>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?vice=Baixo_vice">Crescente</a>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?vice=Cima_vice">Descrescente</a>
                    </td>
                    <td>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?anos=Baixo_anos">Crescente</a>
                        <a class="btn btn-primary col-sm" href="http://localhost/lista%202/questao_24/presidentes.php?anos=Cima_anos">Decrescente</a>
                    </td>
                </tr>
                <tr>
                    <th>Nome do Presidente</th>
                    <th>Vice do presidente</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        echo ($presidentes[0]["nome"] . "<br>");
                        echo ($presidentes[1]["nome"] . "<br>");
                        echo ($presidentes[2]["nome"] . "<br>");

                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($presidentes[0]["vice"] . "<br>");
                        echo ($presidentes[1]["vice"] . "<br>");
                        echo ($presidentes[2]["vice"] . "<br>");
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($presidentes[0]["ano"] . "<br>");
                        echo ($presidentes[1]["ano"] . "<br>");
                        echo ($presidentes[2]["ano"] . "<br>");
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</body>

</html>