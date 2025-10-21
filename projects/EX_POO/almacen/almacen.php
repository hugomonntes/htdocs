<?php
class Almacen {
    private $estanterias;
    private $filas;
    private $columnas;

    public function __construct($filas = 3, $columnas = 3) {
        $this->filas = $filas;
        $this->columnas = $columnas;
        $this->estanterias = array_fill(0, $filas, array_fill(0, $columnas, null));
    }

    public function agregarProducto($bebida) {

        foreach ($this->estanterias as $fila) {
            foreach ($fila as $item) {
                if ($item !== null && $item->getId() == $bebida->getId()) {
                    echo "Ya existe una bebida con ID {$bebida->getId()}<br>";
                    return;
                }
            }
        }


        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                if ($this->estanterias[$i][$j] === null) {
                    $this->estanterias[$i][$j] = $bebida;
                    echo "Bebida ID {$bebida->getId()} agregada en posición [$i][$j]<br>";
                    return;
                }
            }
        }
        echo "No hay espacio disponible en el almacén.<br>";
    }

    public function eliminarProducto($id) {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                if ($this->estanterias[$i][$j] !== null && $this->estanterias[$i][$j]->getId() == $id) {
                    $this->estanterias[$i][$j] = null;
                    echo "Producto con ID $id eliminado.<br>";
                    return;
                }
            }
        }
        echo "No se encontró producto con ID $id.<br>";
    }

    public function calcularPrecioTotal() {
        $total = 0;
        foreach ($this->estanterias as $fila) {
            foreach ($fila as $bebida) {
                if ($bebida !== null) {
                    $total += $bebida->calcularPrecio();
                }
            }
        }
        return $total;
    }

    public function calcularPrecioMarca($marca) {
        $total = 0;
        foreach ($this->estanterias as $fila) {
            foreach ($fila as $bebida) {
                if ($bebida !== null && $bebida->getMarca() == $marca) {
                    $total += $bebida->calcularPrecio();
                }
            }
        }
        return $total;
    }

    public function calcularPrecioEstanteria($columna) {
        $total = 0;
        if ($columna >= 0 && $columna < $this->columnas) {
            for ($i = 0; $i < $this->filas; $i++) {
                $bebida = $this->estanterias[$i][$columna];
                if ($bebida !== null) {
                    $total += $bebida->calcularPrecio();
                }
            }
        }
        return $total;
    }

    public function mostrarInformacion() {
        echo "<h3>Información del almacén:</h3>";
        foreach ($this->estanterias as $fila) {
            foreach ($fila as $bebida) {
                if ($bebida !== null) {
                    $bebida->mostrarDatos();
                    echo "<br>";
                }
            }
        }
    }

    public function mostrarMatriz() {
        
    }
}
?>
