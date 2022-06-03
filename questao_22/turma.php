<?php
$alunos[0]["nome"] = "Ana";
$alunos[0]["nota"] = "7.2";
$alunos[0]["sexo"] = "f";
$alunos[1]["nome"] = "Aninha";
$alunos[1]["nota"] = "5.5";
$alunos[1]["sexo"] = "f";
$alunos[2]["nome"] = "Zezinho";
$alunos[2]["nota"] = "4.8";
$alunos[2]["sexo"] = "m";
$alunos[3]["nome"] = "Paula";
$alunos[3]["nota"] = "4.5";
$alunos[3]["sexo"] = "f";
$alunos[4]["nome"] = "Joao";
$alunos[4]["nota"] = "9.8";
$alunos[4]["sexo"] = "m";


$soma = 0;
$quantidade = 0;
$soma_1 = 0;
$quantidade_1 = 0;
$soma_2 = 0;
$quantidade_2 = 0;
$soma_meninas = 0;
$quantidade_meninas = 0;
$quantidade_meninos = 0;
$soma_meninos = 0;
$quantidade_total = 0;
$menor_nota = 11;
$menor_nota_nome = "";

foreach ($alunos as $key => $aluno) {
    if ($menor_nota > $aluno["nota"]) {
        $menor_nota = $aluno["nota"];
        $menor_nota_nome = $aluno["nome"];
    }
    if ($aluno["nota"]) {
        $quantidade++;
        $nota = floatval($aluno["nota"]);
        $soma += $nota;
    }
    if ($aluno["nota"] > 7) {
        $quantidade_1++;
        $nota = floatval($aluno["nota"]);
        $soma_1 += $nota;
    }
    if ($aluno["nota"] < 4) {
        $quantidade_2++;
        $nota = floatval($aluno["nota"]);
        $soma_2 += $nota;
    }
    if ($aluno["sexo"] == "f") {
        $nota_1 = floatval($aluno["nota"]);
        $quantidade_meninas++;
        $soma_meninas += $nota_1;
    }
    if ($aluno["sexo"] == "m") {
        if ($aluno["nota"] > 5) {
            $nota_2 = floatval($aluno["nota"]);
            $quantidade_meninos++;
            $soma_meninos += $nota_2;
        }
    }
    if ($aluno["sexo"]) {
        $quantidade_total++;
    }
    if ($aluno["nome"]) {
        $lista_alunos = $aluno["nome"];
        echo ($lista_alunos . ",");
    }
    if ($aluno["nota"]) {
        if ($aluno["nome"]) {
        }
    }
}

$media = $soma / $quantidade;
echo ("<br>" . "A media da turma é: " . $media . "<br>");

$media = $soma_1 / $quantidade_1;
echo ("A media da turma que tirou mais que 7 é: " . $media . "<br>");

if ($quantidade_2 != 0) {
    $media = $soma_2 / $quantidade_2;
    echo ("A media da turma que tirou menos que 4 é: " . $media . "<br>");
} else {
    echo ("Não existe aluno com a nota menor que 4" . "<br>");
}

$media = $soma_meninas / $quantidade_meninas;
echo ("A média das meninas da turma é: " . $media . "<br>");

$media = $soma_meninos / $quantidade_meninos;
echo ("A média das meninos da turma com notas maiores ou igual a 5 é: " . $media . "<br>");

$meninos_e_meninas = $quantidade_total;
echo ("O numero total de meninos e meninas é igual a: " . $meninos_e_meninas."<br>");

echo("O aluno com a menor nota é: ".$menor_nota_nome)
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
    <table class="table table striped">
        <thead>
            <tr>
                <th>Nome dos alunos</th>
                <th>Nota</th>

            </tr>

        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) :
                $classe = "";
                if ($aluno["nota"] >= 7) {
                    $classe = "table-success";
                }
                if (($aluno["nota"] < 7) && ($aluno["nota"] >= 4)) {
                    $classe = "table-primary";
                }
                if ($aluno["nota"] < 4) {
                    $classe = "table-danger";
                }
            ?>
                <tr>
                    <td class="<?= $classe ?>">
                        <?= $aluno["nome"] ?>
                    </td>
                    <td class="<?= $classe ?>">
                        <?= $aluno["nota"] ?>
                    </td>
                </tr>
            <?php endforeach;  ?>
        </tbody>
    </table>

</body>

</html>