<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Entrada dos dois numeros</title>
</head>

<body>
    <form class="container" action="soma.php" method="post">
        <div class="row col-2 g-3 mx-auto">
            <label for="num_1" class="form-label">
                Primeiro numero:
            </label>
                <input id="num_1" type="text" name="num_1" class="form-control col-6"><br>
            <label for="num_2" class="form-label">
                Segundo numero:
            </label>
                <input id="num_2" type="text" name="num_2" class="form-control col-6"><br>
            <button type="submit" class="btn btn-success btn-sm">Enviar</button>
        </div>
    </form>

</body>

</html>