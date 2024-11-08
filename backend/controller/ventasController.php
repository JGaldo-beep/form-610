<?php
require_once(__DIR__ . '/DB.php');

class Ventas {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Obtener todas las facturas de ventas
    public function getAllVentas() {
        $result = $this->db->query("SELECT * FROM ventas ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Guardar una nueva factura de venta
    public function saveVenta(
        $fecha_factura, 
        $numero_factura, 
        $codigo_autorizacion, 
        $nit_ci_cliente, 
        $complemento, 
        $nombre_razon_social, 
        $importe_total_venta, 
        $descuentos, 
        $importe_gift_card, 
        $importe_base_debito_fiscal, 
        $debito_fiscal, 
        $estado, 
        $codigo_control, 
        $tipo_venta, 
        $estado_consolidacion
    ) {
        $stmt = $this->db->prepare("INSERT INTO ventas (fecha_factura, numero_factura, codigo_autorizacion, nit_ci_cliente, complemento, nombre_razon_social, importe_total_venta, descuentos, importe_gift_card, importe_base_debito_fiscal, debito_fiscal, estado, codigo_control, tipo_venta, estado_consolidacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssddddsssss", $fecha_factura, $numero_factura, $codigo_autorizacion, $nit_ci_cliente, $complemento, $nombre_razon_social, $importe_total_venta, $descuentos, $importe_gift_card, $importe_base_debito_fiscal, $debito_fiscal, $estado, $codigo_control, $tipo_venta, $estado_consolidacion);
        return $stmt->execute();
    }

    // Actualizar una factura de venta existente
    public function updateVenta(
        $id,
        $fecha_factura, 
        $numero_factura, 
        $codigo_autorizacion, 
        $nit_ci_cliente, 
        $complemento, 
        $nombre_razon_social, 
        $importe_total_venta, 
        $descuentos, 
        $importe_gift_card, 
        $importe_base_debito_fiscal, 
        $debito_fiscal, 
        $estado, 
        $codigo_control, 
        $tipo_venta, 
        $estado_consolidacion
    ) {
        $stmt = $this->db->prepare("UPDATE ventas SET fecha_factura = ?, numero_factura = ?, codigo_autorizacion = ?, nit_ci_cliente = ?, complemento = ?, nombre_razon_social = ?, importe_total_venta = ?, descuentos = ?, importe_gift_card = ?, importe_base_debito_fiscal = ?, debito_fiscal = ?, estado = ?, codigo_control = ?, tipo_venta = ?, estado_consolidacion = ? WHERE id = ?");
        $stmt->bind_param("ssssssddddsssssi", $fecha_factura, $numero_factura, $codigo_autorizacion, $nit_ci_cliente, $complemento, $nombre_razon_social, $importe_total_venta, $descuentos, $importe_gift_card, $importe_base_debito_fiscal, $debito_fiscal, $estado, $codigo_control, $tipo_venta, $estado_consolidacion, $id);
        return $stmt->execute();
    }

    // Eliminar una factura de venta
    public function deleteVenta($id) {
        $stmt = $this->db->prepare("DELETE FROM ventas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
