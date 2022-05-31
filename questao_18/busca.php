<?php
    $input = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    if(isset($input)){
        $array_palavras = ['Exemplo_1', 'Exemplo_2', 'Exemplo_3', 'Exemplo_4'];
        $var_palavra = $input['palavra'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Número convertido</title>
</head>
<body>
    <?php
        foreach($array_palavras as $key => $value_palavra){
            if($var_palavra==$value_palavra){
                echo $key."-".$value_palavra;
            }
        }
    ?>
    
</body>
</html>