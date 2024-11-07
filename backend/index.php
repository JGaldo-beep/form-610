<?php
// Incluir el archivo del modelo
require_once 'models/mensual.php';

// Configuración para mostrar errores (útil para depuración)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Instancia del modelo
$mensualModel = new Mensual();
$mensuales = $mensualModel->getAllMensual(); // Obtiene todos los registros
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Compras Mensuales</title>
</head>
<body>
    <h1>Listado de Compras Mensuales</h1>
    <a href="crear_mensual.php">Crear Nuevo Registro</a>
    <table >
        <thead>
            <tr>
                <th>NIT Proveedor</th>
                <th>Razón Social</th>
                <th>Código de Autorización</th>
                <th>Número Factura</th>
                <th>Número DUI/DIM</th>
                <th>Fecha Factura</th>
                <th>Importe Total Compra</th>
                <th>Descuentos</th>
                <th>Importe Gift Card</th>
                <th>Importe Base Crédito Fiscal</th>
                <th>Crédito Fiscal</th>
                <th>Tipo Compra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mensuales)): ?>
                <?php foreach ($mensuales as $mensual): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($mensual['nit_proveedor']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['razon_social_proveedor']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['codigo_autorizacion']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['numero_factura']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['numero_dui_dim']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['fecha_factura']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['importe_total_compra']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['descuentos']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['importe_gift_card']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['importe_base_credito_fiscal']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['credito_fiscal']); ?></td>
                        <td><?php echo htmlspecialchars($mensual['tipo_compra']); ?></td>
                        <td>
                            <a href="ver_mensual.php?id=<?php echo $mensual['id']; ?>">Ver</a> |
                            <a href="editar_mensual.php?id=<?php echo $mensual['id']; ?>">Editar</a> |
                            <a href="eliminar_mensual.php?id=<?php echo $mensual['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="13">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
