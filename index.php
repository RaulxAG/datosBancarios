<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos bancarios</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="numero" id="numero" placeholder="Numero de la tarjeta bancaria" required>
        <input type="number" name="cseguridad" id="cseguridad" placeholder="CVV" required>
        <label for="fechaexp">Fecha exp.</label>
        <input type="date" name="fechaexp" id="fechaexp" required>
        <input type="text" name="titular" id="titular" placeholder="Nombre del titular" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>