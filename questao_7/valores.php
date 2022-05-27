<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="menor_valor.php" method="POST">
        <div class="row col-2 g-3 mx-auto">
            <label for="prim_valor" class="form-label">Informe o primeiro valor desejado:</label>
            <input type="number" name="prim_valor" id="prim_valor" class="form-control">

            <label for="seg_valor" class="form-label">Informe o segundo valor desejado:</label>
            <input type="number" name="seg_valor" id="seg_valor" class="form-control">
            
            <label for="ter_valor" class="form-label">Informe o terceiro valor desejado:</label>
            <input type="number" name="ter_valor" id="ter_valor" class="form-control">
            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>