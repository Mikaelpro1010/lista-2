<?php
    $input = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($input)) {
        $conversao = $input['num_decimal'];
        $num_binario = decbin($conversao);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Número convertido</title>
</head>
<body>
    <?php
        echo("O número decimal escolhido foi: ".$input['num_decimal']."<br>");
        echo("O número decimal convertido em binário é: ".$num_binario."<br>");
    ?>
    
</body>
</html>
