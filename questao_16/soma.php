<?php
    $input = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    if (isset($input)) {
    $primeiro_num = $input['num_1'];
    $segundo_num = $input['num_2'];
    $terceiro_num = $input['num_3'];
    $soma = $primeiro_num + $segundo_num + $terceiro_num;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Número convertido</title>
</head>
<body>
    <?php
        echo("A soma dos numeros escolhidos é igual a: ".$soma."<br>");
    ?>
    
</body>
</html>