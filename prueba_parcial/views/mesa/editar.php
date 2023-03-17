<!DOCTYPE html>
<html>
<head>
    <title>Editar Mesa</title>
</head>
<body>
    <h1>Editar Mesa</h1>
    <form action="index.php?action=editar" method="post">
        <input type="hidden" name="id" value="<?php echo $mesa["id"]; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $mesa["nombre"]; ?>" required><br><br>
        <label>Capacidad:</label>
        <input type="number" name="capacidad" value="<?php echo $mesa["capacidad"]; ?>" required><br><br>
        <label>Descripción:</label>
        <textarea name="descripcion"><?php echo $mesa["descripcion"]; ?></textarea><br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>