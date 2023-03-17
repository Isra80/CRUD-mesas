<?php
require_once "mesaModel.php";

class MesaController {
    private $model;

    function __construct() {
        $this->model = new MesaModel();
    }

    function mostrar() {
        $mesas = $this->model->obtenerMesas();
        require_once "vistas/index.php";
    }

    function agregar() {
        if (isset($_POST["nombre"]) && isset($_POST["capacidad"]) && isset($_POST["descripcion"]));
    }
    function editar() {
        if (isset($_GET["id"])) {
            $mesa = $this->model->obtenerMesa($_GET["id"]);
            require_once "vistas/editar.php";
        } else if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["capacidad"]) && isset($_POST["descripcion"])) {
            $resultado = $this->model->editarMesa($_POST["id"], $_POST["nombre"], $_POST["capacidad"], $_POST["descripcion"]);
            if ($resultado) {
                header("Location: index.php");
            } else {
                echo "Error al editar la mesa";
            }
        } else {
            header("Location: index.php");
        }
    }
    
    function eliminar() {
        if (isset($_GET["id"])) {
            $resultado = $this->model->eliminarMesa($_GET["id"]);
            if ($resultado) {
                header("Location: index.php");
            } else {
                echo "Error al eliminar la mesa";
            }
        } else {
            header("Location: index.php");
        }
    }
}  