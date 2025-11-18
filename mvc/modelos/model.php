<?php
class Empleado
{
    private $empleado;
    private $db;
    public function __construct()
    {
        $this->empleado = [];
        $this->db = new PDO("mysql:host=localhost;dbname=ejemplo_mvc;charset=utf8", "root", "");
    }
    public function setEmpleado($nombre, $apellidos, $telefono, $departamento, $imagen){
        $sql = "INSERT INTO empleados(nombre,apellidos,telefono,departamento) VALUES('$nombre','$apellidos','$telefono','$departamento','$imagen')"; //devuelve true si se ejecuta bien
        $result = $this->db->query($sql);
        $this->db = null;
        return $result;
    }

    public function getEmpleado(){
        $sql = "SELECT * FROM empleados";
        $result = $this->db->query($sql);
        $this->empleado = $result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $this->empleado;
    }

    public function editar($id){
        $sql = "SELECT nombre,apellidos,telefono,departamento,imagen FROM empleados WHERE id = {$id}";
        $result = $this->db->query($sql);
        $dato=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $dato;
    }

    public function borrar($id){
        $sql = "DELETE FROM empleados WHERE id = {$id} LIMIT 1";
        $result = $this->db->query($sql);
        $dato = $result;
        $this->db = null;
        return $dato;
    }
}
?>