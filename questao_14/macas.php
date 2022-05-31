<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="custo_total.php" method="POST">
        <div class="row col-2 g-3 mx-auto">
        <label for="macas_compradas" class="form-label">Informe o numero de maçãs compradas:</label>
        <input type="number" name="macas_compradas" id="macas_compradas" class="form-control">
        <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>