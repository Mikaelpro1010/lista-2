<?php
    $input= filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($input)) {
        $valor_1= $input['primeiro_valor'];
        $valor_2= $input['segundo_valor'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    echo("O primeiro valor é: ".$valor_1."<br>");
    echo("O segundo valor é: ".$valor_2."<br>");
    if($valor_1>$valor_2){
        echo("O maior valor é: ".$valor_1);
    } else{
        echo("O maior valor é: ".$valor_2);
    }
    ?>
</body>
</html>