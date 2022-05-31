<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="row g-3" action="salario_final.php" method="GET">
        <div class="row col-2 g-3 mx-auto">
        <label for="quantidade_vendidos" class="form-label">Informe o numero de carros vendidos:</label>
        <input type="number" name="quantidade_vendidos" id="quantidade_vendidos" class="form-control">

        <label for="total_de_vendas" class="form-label">Informe o valor total de suas vendas:</label>
        <input type="number" name="total_de_vendas" id="total_de_vendas" class="form-control">

        <label for="salario_fixo" class="form-label">Informe o salario fixo:</label>
        <input type="number" name="salario_fixo" id="salario_fixo" class="form-control">

        <label for="valor_recebido" class="form-label">Informe o valor recebido por carros vendidos:</label>
        <input type="number" name="valor_recebido" id="valor_recebido" class="form-control">
        <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>