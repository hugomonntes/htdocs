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
    public function setEmpleado($nombre, $apellido, $telefono, $departamento)
    {
        $query = "INSERT INTO empleados(nombre,apellidos,telefono,departamento) VALUES '$nombre', '$apellido', '$telefono', '$departamento'";
        $queryResult = $this->db->query($query);
        $this->db = null;
        return $queryResult;
    }

    public function getEmpleado(){
        $sql = "SELECT * FROM empleados";
        $result=$this->db->query($sql);
        $this->empleado = $result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $this->empleado;
    }
}
?>