<?php
require_once(__DIR__ . '/DB.php');

class Ventas {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Obtener todas las categorías
    public function getAllVentas() {
        $result = $this->db->query("SELECT * FROM ventas ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

public function getAllVentasTipoVenta($tipo_venta) {
    if ($tipo_venta === 'todos') {
        // Consulta sin filtro para obtener todos los registros
        $stmt = $this->db->query("SELECT * FROM ventas ORDER BY id ASC");
    } else {
        // Consulta con filtro según el tipo de compra
        $stmt = $this->db->prepare("SELECT * FROM ventas WHERE tipo_venta = ? ORDER BY id ASC");
        $stmt->bind_param("s", $tipo_venta);
        $stmt->execute();
        $stmt = $stmt->get_result();
    }
    return $stmt->fetch_all(MYSQLI_ASSOC);
}

}
?>