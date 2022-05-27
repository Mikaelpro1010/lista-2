<?php
    $recebe= filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($recebe)) {
        $prim_valor= $recebe['prim_valor'];
        $seg_valor= $recebe['seg_valor'];
        $ter_valor= $recebe['ter_valor'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
    echo("O primeiro valor é: ".$prim_valor."<br>");
    echo("O segundo valor é: ".$seg_valor."<br>");
    echo("O terceiro valor é: ".$ter_valor."<br>");

    if(($prim_valor<$seg_valor)&&($prim_valor<$ter_valor)){
        echo("O menor valor é: ".$prim_valor);
    }elseif(($seg_valor<$prim_valor)&&($seg_valor<$ter_valor)){
        echo("O menor valor é: ".$seg_valor);
    }elseif(($ter_valor<$prim_valor)&&($ter_valor<$seg_valor)){
        echo("O menor valor é: ".$ter_valor);
    }
    ?>
    
</body>
</html>