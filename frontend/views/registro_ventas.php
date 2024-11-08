<?php
// Incluir el archivo del modelo
require_once __DIR__ . '/../../backend/models/ventas.php';

// Configuración para mostrar errores (útil para depuración)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Instancia del modelo
$ventasModel = new Ventas();

// Verificar si se ha enviado un tipo de venta desde el formulario
$tipo_venta = isset($_POST['tipo_venta']) ? $_POST['tipo_venta'] : 'todos';
$ventas = $ventasModel->getAllVentasTipoVenta($tipo_venta); // Obtiene registros según el tipo de venta
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ventas</title>
    <link rel="stylesheet" href="../css/style_rc.css">
</head>
<body>

<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Menú</h3>
        <ul>
            <li><a href="registro_compras.php">Registro de Compras</a></li>
            <li><a href="registro_ventas.php">Registro de Ventas</a></li>
            <li><a href="index.php">Inicio</a></li>
        </ul>
    </aside>

    <!-- Contenido principal -->
    <main class="content">
        <header class="header">
            <h1>REGISTRO DE VENTAS</h1>
            <div class="user-info">
                <span>fridel@gmail.com</span>
            </div>
        </header>

        <section class="search-section">
            <h2>VENTAS REGISTRADAS</h2>
            <form method="POST" action="registro_ventas.php">
                <label for="gestion">Gestión:</label>
                <select id="gestion" name="gestion">
                    <option value="2024">2024</option>
                </select>

                <label for="tipo_venta">Tipo de Venta:</label>
                <select id="tipo_venta" name="tipo_venta">
                    <option value="todos" <?php echo $tipo_venta == 'todos' ? 'selected' : ''; ?>>Todos</option>
                    <option value="Venta Nacional" <?php echo $tipo_venta == 'Venta Nacional' ? 'selected' : ''; ?>>Venta Nacional</option>
                    <option value="Exportación" <?php echo $tipo_venta == 'Exportación' ? 'selected' : ''; ?>>Exportación</option>
                    <option value="Importación" <?php echo $tipo_venta == 'Importación' ? 'Importación' : ''; ?>>Importación</option>

                </select>

                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="table-section">
            <h3>PERIODO SELECCIONADO 10 - 2024</h3>
            <div class="tabs">
                <button onclick="mostrarTab('ventas')">VENTAS REGISTRADAS</button>
                <button onclick="mostrarTab('confirmacion')">CONFIRMACIÓN DE VENTAS</button>
            </div>
            <div id="ventas-registradas">
                <table>
                    <thead>
                        <tr>
                            <th>Fecha Factura</th>
                            <th>Número Factura</th>
                            <th>Código de Autorización</th>
                            <th>NIT / CI Cliente</th>
                            <th>Complemento</th>
                            <th>Nombre o Razón Social</th>
                            <th>Importe Total Venta</th>
                            <th>Descuentos</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Débito Fiscal</th>
                            <th>Débito Fiscal</th>
                            <th>Estado</th>
                            <th>Código de Control</th>
                            <th>Tipo de Venta</th>
                            <th>Estado Consolidación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($ventas)): ?>
                            <?php foreach ($ventas as $venta): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($venta['fecha_factura']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['numero_factura']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['codigo_autorizacion']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['nit_ci_cliente']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['complemento']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['razon_social_cliente']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['importe_total_venta']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['descuentos']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['importe_gift_card']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['importe_base_debito_fiscal']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['debito_fiscal']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['estado']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['codigo_control']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['tipo_venta']); ?></td>
                                    <td><?php echo htmlspecialchars($venta['estado_consolidacion']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="15">No hay registros disponibles.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<script>
    function mostrarTab(tab) {
        document.getElementById("ventas-registradas").style.display = tab === 'ventas' ? 'block' : 'none';
        document.getElementById("confirmacion-ventas").style.display = tab === 'confirmacion' ? 'block' : 'none';
    }
</script>

</body>
</html>
