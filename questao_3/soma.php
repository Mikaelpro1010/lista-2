<?php
$input = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (isset($input)) {
    $soma =  $input['num_1']  + $input['num_2'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    echo ('O primeiro número é: '.$input['num_1']."<br>");
    echo ('O segundo número é: '.$input['num_2']."<br>");
    echo ('O valor da soma dos números é: '.$soma);
    ?>
</body>

</html>