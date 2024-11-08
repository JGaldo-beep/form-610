<?php
require_once(__DIR__ . '/DB.php');

class Mensual {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Obtener todas las categorías
    public function getAllMensual() {
        $result = $this->db->query("SELECT * FROM mensual ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllMensualTipoCompra($tipo_compra) {
        if ($tipo_compra === 'todos') {
            // Consulta sin filtro para obtener todos los registros
            $stmt = $this->db->query("SELECT * FROM mensual ORDER BY id ASC");
        } else {
            // Consulta con filtro según el tipo de compra
            $stmt = $this->db->prepare("SELECT * FROM mensual WHERE tipo_compra = ? ORDER BY id ASC");
            $stmt->bind_param("s", $tipo_compra);
            $stmt->execute();
            $stmt = $stmt->get_result();
        }
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }
    


    // Agregar categoría
    public function saveMensual($name) {
        $stmt = $this->db->prepare("INSERT INTO mensual (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        return $stmt->execute();
    }

    // Editar categoría
    public function updateMensual($id, $name) {
        $stmt = $this->db->prepare("UPDATE mensual SET name = ? WHERE id = ?");
        $stmt->bind_param("si", $name, $id);
        return $stmt->execute();
    }

    // Eliminar categoría
    public function deletemensual($id) {
        $stmt = $this->db->prepare("DELETE FROM mensual WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>