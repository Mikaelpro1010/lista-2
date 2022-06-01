<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_DEFAULT);
$pontos = filter_input(INPUT_GET, 'pontos', FILTER_DEFAULT);

$times = [
    'Atletico PR' => '30',
    'Botafogo' => '29',
    'Corinthians' => '26',
    'Cruzeiro' => '31',
    'Gremio' => '31'
];

if (isset($nome) || isset($pontos)) {

    if ($nome == 'Cima') {
        krsort($times);
    } elseif ($nome == 'Baixo') {
        ksort($times);
    }

    if ($pontos == 'Cima_pontos') {
        arsort($times);
    } elseif ($pontos == 'Baixo_pontos') {
        asort($times);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Classificação</title>
</head>

<body class= "container">
    <div class="row g-3 mx-auto">
        <label><a class="btn btn-primary form-label col-sm" href="http://localhost/lista%202/questao_20/times.php?nome=Cima">Cima/times</a></label>
        <label><a class="btn btn-primary form-label col-sm" href="http://localhost/lista%202/questao_20/times.php?nome=Baixo">Baixo/times</a></label>

        <label><a class="btn btn-primary form-label col-sm" href="http://localhost/lista%202/questao_20/times.php?pontos=Cima_pontos">Cima/pontos</a></label>
        <label><a class="btn btn-primary form-label col-sm" href="http://localhost/lista%202/questao_20/times.php?pontos=Baixo_pontos">Baixo/pontos</a></label>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Pontos</th>
                </tr>
            <tbody>

                <?php foreach ($times as $time => $ponto) :  ?>
                    <tr>
                        <td>
                            <?= $time ?>
                        </td>
                        <td>
                            <?= $ponto ?>
                        </td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
            </thead>
        </table>

</body>

</html>