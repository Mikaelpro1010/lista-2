<?php
    $input= filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($input)){
        $prim_reta= $input['primeira_reta']."<br>";
        $seg_reta= $input['segunda_reta']."<br>";
        $ter_reta= $input['terceira_reta']."<br>";
        $quar_reta= $input['quarta_reta']."<br>";
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    echo("O valor da primeira reta é: ".$prim_reta."<br>");    
    echo("O valor da terceira reta é: ".$ter_reta."<br>");
    echo("O valor da quarta reta é: ".$quar_reta."<br>");

    if(($prim_reta==$seg_reta)&&($prim_reta==$ter_reta)&&($prim_reta==$quar_reta)&&($seg_reta==$ter_reta)&&($seg_reta==$quar_reta)&&($ter_reta==$quar_reta)){
        echo("O quadrilatero informado é um quadrado");
    } elseif(($prim_reta==$ter_reta)&&($seg_reta==$quar_reta)){
        echo("O quadrilatero informado é um retângulo");
    } elseif(($prim_reta!=$seg_reta)&&($prim_reta!=$ter_reta)&&($prim_reta!=$quar_reta)&&($seg_reta!=$ter_reta)&&($seg_reta!=$quar_reta)&&($ter_reta!=$quar_reta)){
        echo("O quadrilatero informado é um trapezio");
    }
    ?>
</body>
</html>