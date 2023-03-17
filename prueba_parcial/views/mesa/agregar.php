<!DOCTYPE html>
<html>
<head>
    <title>Agregar Mesa</title>
</head>
<body>
    <h1>Agregar Mesa</h1>
    <form action="index.php?action=guardar" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        <label>Capacidad:</label>
        <input type="number" name="capacidad" required><br><br>
        <label>Descripción:</label>
        <textarea name="descripcion"></textarea><br><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
