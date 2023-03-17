<?php
class MesaModel {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function agregarMesa($nombre, $capacidad, $descripcion) {
        $sql = "INSERT INTO mesas (nombre, capacidad, descripcion) VALUES ('$nombre', $capacidad, '$descripcion')";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function obtenerMesas() {
        $sql = "SELECT * FROM mesas";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function obtenerMesa($id) {
        $sql = "SELECT * FROM mesas WHERE id=$id";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    function editarMesa($id, $nombre, $capacidad, $descripcion) {
        $sql = "UPDATE mesas SET nombre='$nombre', capacidad=$capacidad, descripcion='$descripcion' WHERE id=$id";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function eliminarMesa($id) {
        $sql = "DELETE FROM mesas WHERE id=$id";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>
