<?php
class Equipo {
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=mvc_equipos", "root", "");
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function setEquipo($nombre, $anio, $titulos, $logo) {
        $sql = "INSERT INTO equipos (nombre, año_creacion, numero_titulos, logo) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $anio, $titulos, $logo]);
    }

    public function getEquipos() {
        $sql = "SELECT * FROM equipos";
        return $this->conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEquipoById($id) {
        $sql = "SELECT * FROM equipos WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarEquipo($id, $nombre, $anio, $titulos, $logo) {
        $sql = "UPDATE equipos SET nombre=?, año_creacion=?, numero_titulos=?, logo=? WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $anio, $titulos, $logo, $id]);
    }

    public function borrarEquipo($id) {
        $sql = "DELETE FROM equipos WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$id]);
    }
}
