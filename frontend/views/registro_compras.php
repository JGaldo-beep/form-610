<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <link rel="stylesheet" href="../css/style_rc.css">
    <script>
        function mostrarSeccion(seccion) {
            document.getElementById("compras-registradas").style.display = seccion === 'compras' ? 'block' : 'none';
            document.getElementById("confirmacion-compras").style.display = seccion === 'confirmacion' ? 'block' : 'none';
        }
    </script>
</head>
<body>

<div class="container">
    <!-- Barra lateral -->
    <div class="sidebar">
        <h3>Menú Principal</h3>
        <ul>
            <li><a href="registro_compras.php">Registro de Compras</a></li>
            <li><a href="registro_ventas.php">Registro de Ventas</a></li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
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
                <button onclick="mostrarSeccion('compras')">COMPRAS REGISTRADAS</button>
                <button onclick="mostrarSeccion('confirmacion')">CONFIRMACIÓN DE COMPRAS</button>
            </div>

            <!-- Tabla de Compras Registradas -->
            <div id="compras-registradas" style="display: block;">
                <table>
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Ver Factura Electronica</th>
                            <th>NIT Proveedor</th>
                            <th>Razón Social Proveedor</th>
                            <th>Código de Autorización</th>
                            <th>Número Factura</th>
                            <th>Número DUI/DIM</th>
                            <th>Fecha de Factura DUI/DIM</th>
                            <th>Importe Total Compra</th>
                            <th>Descuentos, Bonificaciones y Rebajas Sujetas a IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Crédito Fiscal</th>
                            <th>Crédito Fiscal</th>
                            <th>Tipo Compra</th>
                            <th>Codigo de Control</th>
                            <th>Estado Consolidacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="13">No hay registros disponibles.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tabla de Confirmación de Compras -->
            <div id="confirmacion-compras" style="display: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Ver Factura Electronica</th>
                            <th>NIT Proveedor</th>
                            <th>Razón Social Proveedor</th>
                            <th>Código de Autorización</th>
                            <th>Número Factura</th>
                            <th>Número DUI/DIM</th>
                            <th>Fecha de Factura DUI/DIM</th>
                            <th>Importe Total Compra</th>
                            <th>Descuentos, bonificaciones y Rebajas Sujetas a IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Crédito Fiscal</th>
                            <th>Crédito Fiscal</th>
                            <th>Tipo Compra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7">No hay registros disponibles en Confirmación de Compras.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

</body>
</html>






