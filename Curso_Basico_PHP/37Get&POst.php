<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <br>
        <label for="asignaturas">Asignaturas</label>
        <select name="asignatura" id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
            Manzana
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="asignaturas">Asignaturas</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
            Manzana
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Pera" id="opcion-2" name="frutas[]">
            Pera
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Uvas" id="opcion-3" name="frutas[]">
            Uvas
        </label>
        <label for="opcion-4">
            <input type="checkbox" value="Sandia" id="opcion-4" name="frutas[]">
            Sandia
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>