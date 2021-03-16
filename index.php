<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
    <h1>Intro PHP</h1>
    <form action="Insert.php" method="post">
        <label for="nombre">Nombre de la tarea</label>
        <input type="text" name="nombre">
        <br>

        <label for="descripcion">descripcion de la tarea</label>
        <input type="text" name="descripcion">
        <br>

        <label for="prioridad">Prioridad de la tarea</label>
        <select name="prioridad">
            <option value=none disabled="disabled" selected>--Seleccione--</option>
            <option value="A">Prioridad Alta</option>
            <option value="M">Prioridad Media</option>
            <option value="B">Prioridad Baja</option>
        </select>
        <br>

        <input type="checkbox" name="urgente" value="T">
        <label for="urgente">¿La tarea es urgente?</label>
        <br>

        <input type="radio" name="tipo" value="Escuela">
        <label for="tipo">Escuela</label>

        <input type="radio" name="tipo" value="Trabajo">
        <label for="tipo">Trabajo</label>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>


