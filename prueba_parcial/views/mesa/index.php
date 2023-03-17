<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mesas</title>
</head>
<body>
    <h1>Lista de Mesas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?php echo $mesa["id"]; ?></td>
                <td><?php echo $mesa["nombre"]; ?></td>
                <td><?php echo $mesa["capacidad"]; ?></td>
                <td><?php echo $mesa["descripcion"]; ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?php echo $mesa["id"]; ?>">Editar</a>
                    <a href="index.php?action=eliminar&id=<?php echo $mesa["id"]; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?action=agregar">Agregar Mesa</a>
</body>
</html>

<?php
require_once "modelos/Mesa.php";
require_once "controladores/MesaController.php";

$controller = new MesaController();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if ($action == "index" || $action == "agregar" || $action == "guardar" || $action == "editar" || $action == "eliminar") {
        call_user_func(array($controller, $action));
    } else {
        echo "Acción inválida";
    }
} else {
    $controller->index();
}
?>

