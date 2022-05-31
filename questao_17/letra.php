<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="alunos.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
        <label for="letra" class="form-label">Informe a letra desejada:</label>
        <input type="text" name="letra" id="letra" class="form-control">
        <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>