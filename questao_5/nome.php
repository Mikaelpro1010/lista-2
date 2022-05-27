<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3">
        <div class="row col-2 g-3 mx-auto" action="nomecompleto.php" method="POST">
            <label for="nome" class="form-label">Informe o nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">

            <label for="sobrenome" class="form-label">Informe o sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" class="form-control">

            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>