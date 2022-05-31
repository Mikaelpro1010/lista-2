<?php
    $input = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    if (isset($input)) {
        $total_de_vendas = $input['total_de_vendas'];
        $salario_fixo = $input['salario_fixo'];
        $qntd_vendidos = $input['quantidade_vendidos'];
        $valor_recebido = $input['valor_recebido'];
        $valor_total = $qntd_vendidos * $valor_recebido;
        $salario_final = $valor_total + $salario_fixo + $total_de_vendas;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Valor final ao consumidor</title>
</head>
<body>
    <?php
        echo("O salário final do vendedor é: ".$salario_final."<br>");
    ?>
    
</body>
</html>