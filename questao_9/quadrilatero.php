<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form class="row g-3" action="classificacao_quadrilatero.php" method="POST">
        <div class="row col-2 g-3 mx-auto">
            <label for="primeira_reta" class="form-label">Informe o valor da primeira reta:</label>
            <input type="number" name="primeira_reta" id="primeira_reta" class="form-control">
            
            <label for="segunda_reta" class="form-label">Informe o valor da segunda reta:</label>
            <input type="number" name="segunda_reta" id="segunda_reta" class="form-control">

            <label for="terceira_reta" class="form-label">Informe o valor da terceira reta:</label>
            <input type="number" name="terceira_reta" id="terceira_reta" class="form-control">

            <label for="quarta_reta" class="form-label">Informe o valor da quarta reta:</label>
            <input type="number" name="quarta_reta" id="quarta_reta" class="form-control">
            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>