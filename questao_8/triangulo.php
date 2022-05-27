<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="classificacao_triangulo.php" method="POST">
        <div class="row col-2 g-3 mx-auto">
            <label for="primeiro_lado" class="form-label">Informe o valor do primeiro lado:</label>
            <input type="number" name="primeiro_lado" id="primeiro_lado" class="form-control">
            
            <label for="segundo_lado" class="form-label">Informe o valor do segundo lado:</label>
            <input type="number" name="segundo_lado" id="segundo_lado" class="form-control">

            <label for="terceiro_lado" class="form-label">Informe o valor do terceiro lado:</label>
            <input type="number" name="terceiro_lado" id="terceiro_lado" class="form-control">
            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>