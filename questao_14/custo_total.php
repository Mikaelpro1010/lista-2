<?php
    $input = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($input)) {
        $quantidade_macas = $input['macas_compradas'];
        if($quantidade_macas<12){
            $custo = 1.30;
        } else{
            $custo = 1.00;
        }
        $custo_total = $quantidade_macas * $custo;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Número convertido</title>
</head>
<body>
    <?php
        echo("A quantidade de maçãs é igual a: ".$quantidade_macas."<br>");
        echo("O custo total de maçãs será de: ".$custo_total."<br>");
    ?>
    
</body>
</html>