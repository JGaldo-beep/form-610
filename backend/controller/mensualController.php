<?php
require_once(__DIR__ . '/DB.php');

class Mensual {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Obtener todas las facturas mensuales
    public function getAllMensual() {
        $result = $this->db->query("SELECT * FROM mensual ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Guardar una nueva factura mensual
    public function saveMensual(
        $nit_proveedor, 
        $razon_social_proveedor, 
        $codigo_autorizacion, 
        $numero_factura, 
        $numero_dui_dim, 
        $fecha_factura, 
        $importe_total_compra, 
        $descuentos, 
        $importe_gift_card, 
        $importe_base_credito_fiscal, 
        $credito_fiscal, 
        $tipo_compra
    ) {
        $stmt = $this->db->prepare("INSERT INTO mensual (nit_proveedor, razon_social_proveedor, codigo_autorizacion, numero_factura, numero_dui_dim, fecha_factura, importe_total_compra, descuentos, importe_gift_card, importe_base_credito_fiscal, credito_fiscal, tipo_compra) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssdssdds", $nit_proveedor, $razon_social_proveedor, $codigo_autorizacion, $numero_factura, $numero_dui_dim, $fecha_factura, $importe_total_compra, $descuentos, $importe_gift_card, $importe_base_credito_fiscal, $credito_fiscal, $tipo_compra);
        return $stmt->execute();
    }

    // Actualizar una factura mensual existente
    public function updateMensual(
        $id,
        $nit_proveedor, 
        $razon_social_proveedor, 
        $codigo_autorizacion, 
        $numero_factura, 
        $numero_dui_dim, 
        $fecha_factura, 
        $importe_total_compra, 
        $descuentos, 
        $importe_gift_card, 
        $importe_base_credito_fiscal, 
        $credito_fiscal, 
        $tipo_compra
    ) {
        $stmt = $this->db->prepare("UPDATE mensual SET nit_proveedor = ?, razon_social_proveedor = ?, codigo_autorizacion = ?, numero_factura = ?, numero_dui_dim = ?, fecha_factura = ?, importe_total_compra = ?, descuentos = ?, importe_gift_card = ?, importe_base_credito_fiscal = ?, credito_fiscal = ?, tipo_compra = ? WHERE id = ?");
        $stmt->bind_param("ssssssdssddsi", $nit_proveedor, $razon_social_proveedor, $codigo_autorizacion, $numero_factura, $numero_dui_dim, $fecha_factura, $importe_total_compra, $descuentos, $importe_gift_card, $importe_base_credito_fiscal, $credito_fiscal, $tipo_compra, $id);
        return $stmt->execute();
    }

    // Eliminar una factura mensual
    public function deleteMensual($id) {
        $stmt = $this->db->prepare("DELETE FROM mensual WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
