<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulário 01</title>
</head>
<body>
    <form action="processa.php" method="post" accept-charset="utf-8">
        <input type="hidden" name="segredo" value="?">
        Nome:<input type="text" name="nome"><br>
        Sexo:<input type="radio" name="sexo" value="f">Feminino<br>
        <input type="radio" name="sexo" value="m">Masculino<br>
        Curso:
        <select name="curso">
            <option value="agro">Agronomia</option>
            <option value="info">Informática</option>
            <option value="info">Engenharia</option>
        </select>
        <br>
        <input type="submit" name="botao" value="Enviar">
    </form>
    
</body>
</html>