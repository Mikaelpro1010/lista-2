<?php
$input = filter_input(INPUT_GET, 'ordem', FILTER_DEFAULT);
$capitanias = ['Ceara', 'Itamaraca', 'Maranhao', 'Pernambuco', 'Rio Grande'];
if (isset($input)) {
    if ($input == 'Cima') {
        rsort($capitanias);
    } else {
        sort($capitanias);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="row col-2 g-3 mx-auto">
        <a class="btn btn-primary" href="http://localhost/lista%202/questao_19/capitania.php?ordem=Cima">Cima</a>
        <a class="btn btn-primary" href="http://localhost/lista%202/questao_19/capitania.php?ordem=Baixo">Baixo</a>
    </div>

    <?php

    foreach($capitanias as $value){
        echo($value."<br>");

    }

    ?>

</body>

</html>