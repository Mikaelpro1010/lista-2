<?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($dados)){
        $prim_lado= $dados['primeiro_lado'];
        $seg_lado= $dados['segundo_lado'];
        $ter_lado= $dados['terceiro_lado'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    echo("O valor  do primeiro lado é: ".$prim_lado."<br>");    
    echo("O valor  do segundo lado é: ".$seg_lado."<br>");
    echo("O valor  do terceiro lado é: ".$ter_lado."<br>");

    if(($prim_lado==$seg_lado)&&($prim_lado==$ter_lado)&&($seg_lado==$ter_lado)){
        echo("O triângulo é equilátero");
    } elseif(($prim_lado==$seg_lado)||($prim_lado==$ter_lado)||($ter_lado==$seg_lado)){
        echo("O triângulo é isóceles");
    } elseif(($prim_lado!=$seg_lado)&&($prim_lado!=$ter_lado)&&($ter_lado!=$seg_lado)){
        echo("O triângulo é escaleno");
    }
    ?>
</body>
</html>