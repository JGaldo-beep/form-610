<?php
// Incluir el archivo del modelo
require_once __DIR__ . '/../../backend/models/compras.php';

// Configuración para mostrar errores (útil para depuración)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Instancia del modelo
$mensualModel = new Mensual();

// Verificar si se ha enviado un tipo de compra desde el formulario
$tipo_compra = isset($_POST['tipo_compra']) ? $_POST['tipo_compra'] : 'todos';
$mensuales = $mensualModel->getAllMensualTipoCompra($tipo_compra); // Obtiene registros según el tipo de compra
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
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
            <h1>REGISTRO DE COMPRAS</h1>
            <div class="user-info">
                <span>fridel@gmail.com</span>
            </div>
        </header>

        <section class="search-section">
            <h2>COMPRAS REGISTRADAS</h2>
            <form method="POST" action="registro_compras.php">
                <label for="gestion">Gestión:</label>
                <select id="gestion" name="gestion">
                    <option value="2024">2024</option>
                </select>

                <label for="tipo_compra">Tipo de Compra:</label>
                <select id="tipo_compra" name="tipo_compra">
                    <option value="todos" <?php echo $tipo_compra == 'todos' ? 'selected' : ''; ?>>Todos</option>
                    <option value="consumo" <?php echo $tipo_compra == 'consumo' ? 'selected' : ''; ?>>Consumo</option>
                    <option value="alimento" <?php echo $tipo_compra == 'alimento' ? 'selected' : ''; ?>>Alimento</option>
                    <option value="maquinaria" <?php echo $tipo_compra == 'maquinaria' ? 'selected' : ''; ?>>Maquinaria</option>
                </select>

                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="table-section">
            <h3>PERIODO SELECCIONADO 10 - 2024</h3>
            <div class="tabs">
                <button onclick="mostrarTab('compras')">COMPRAS REGISTRADAS</button>
                <button onclick="mostrarTab('confirmacion')">CONFIRMACIÓN DE COMPRAS</button>
            </div>
            <div id="compras-registradas">
                <table>
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
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="13">No hay registros disponibles.</td>
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
        document.getElementById("compras-registradas").style.display = tab === 'compras' ? 'block' : 'none';
        document.getElementById("confirmacion-compras").style.display = tab === 'confirmacion' ? 'block' : 'none';
    }
</script>

</body>
</html>
