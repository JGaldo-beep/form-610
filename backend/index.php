<?php
// Incluir el archivo del modelo
require_once  'models/mensual.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <link rel="stylesheet" href="css/style_rc.css">
</head>
<body>

    <!-- Contenido principal -->
    <main class="content">
        <header class="header">
            <h1>REGISTRO DE COMPRAS</h1>
            <div class="user-info">
                <span>fridel@gmail.com</span>
            </div>
        </header>

        <section class="search-section">
            <h2>COMPRAS REGISTRADAS</h2>
            <form>
                <label for="gestion">Gestión:</label>
                <select id="gestion">
                    <option value="2024">2024</option>
                </select>

                <label for="codigo-autorizacion">Código de Autorización:</label>
                <input type="text" id="codigo-autorizacion">

                <label for="periodo">Periodo:</label>
                <select id="periodo">
                    <option value="OCTUBRE">OCTUBRE</option>
                </select>

                <label for="nro.factura">Nro. Factura:</label>
                <input type="text" id="nro.factura">

                <label for="nitProveedor">Nit Proveedor:</label>
                <input type="text" id="nitProveedor">

                <label for="estadoConsolidacion">Estado Uso Consolidacion:</label>
                <select id="estadoConsolidacion">
                    <option value="Pendiente">Pendiente</option>
                </select>

                <button type="button">Buscar</button>
            </form>
        </section>

        <section class="table-section">
            <h3>PERIODO SELECCIONADO 10 - 2024</h3>
            <div class="tabs">
                <button>COMPRAS REGISTRADAS</button>
                <button>CONFIRMACIÓN DE COMPRAS</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>NIT Proveedor</th>
                        <th>Razón Social Proveedor</th>
                        <th>Código de Autorización</th>
                        <th>Número Factura</th>
                        <th>Número DUI/DIM</th>
                        <th>Fecha de Factura/DUI/DIM</th>
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
                        <?php foreach ($mensuales as $index => $mensual): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
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
                            <td colspan="14">No hay registros disponibles.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
