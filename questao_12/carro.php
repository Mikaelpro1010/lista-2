<?php
    $input = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    if (isset($input)) {
        $porcentagem = 28;
        $impostos = 45;
        $custo_carro = $input['custo_fabrica']+$porcentagem+$impostos;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Valor final ao consumidor</title>
</head>
<body>
    <?php
        echo("O custo de fabrica informado foi: ".$input['custo_fabrica']."<br>");
        echo("O custo final ao consumidor é igual a: ".$custo_carro."<br>");
    ?>
    
</body>
</html>
