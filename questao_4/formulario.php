<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="binario.php" method="POST">
        <div class="row col-2 g-3 mx-auto">
        <label for="num_decimal" class="form-label">Informe o numero binário desejado:</label>
        <input type="number" name="num_decimal" id="num_decimal" class="form-control">
        <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>