<?php
    $input = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    if(isset($input)){
        $alunos = ['Mikael', 'Morgana', 'Renata', 'Maria', 'Marcos', 'Victor'];
        $var_letra = $input['letra'];
        $ordem_alfa = arsort($alunos);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Número convertido</title>
</head>
<body>
    <?php
        foreach($ordem_alfa as $value){
            if($var_letra==$value){
                echo $value;
            } elseif($var_letra!=$value) {
                echo("Não há alunos com a letra informada");
            } else{
                echo("É necessário informar a letra");
            }
        }
    ?>
    
</body>
</html>