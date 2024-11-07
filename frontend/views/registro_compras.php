<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <link rel="stylesheet" href="../css/style_rc.css">
    <script>
        function mostrarTab(tab) {
            document.getElementById("compras-registradas").style.display = tab === 'compras' ? 'block' : 'none';
            document.getElementById("confirmacion-compras").style.display = tab === 'confirmacion' ? 'block' : 'none';
        }
    </script>
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
                <button onclick="mostrarTab('compras')">COMPRAS REGISTRADAS</button>
                <button onclick="mostrarTab('confirmacion')">CONFIRMACIÓN DE COMPRAS</button>
            </div>
            
            <div id="compras-registradas">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Ver Factura Electrónica</th>
                            <th>NIT Proveedor</th>
                            <th>Razón Social Proveedor</th>
                            <th>Código de Autorización</th>
                            <th>Número Factura</th>
                            <th>Número DUI/DIM</th>
                            <th>Fecha de Factura/DUI/DIM</th>
                            <th>Importe Total Compra</th>
                            <th>Descuentos, Bonificaciones y Rebajas Sujestas a IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Credito Fiscal</th>
                            <th>Crédito Fiscal</th>
                            <th>Tipo Compra</th>
                            <th>Codigo de Control</th>
                            <th>Estado Consolidado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#">👁️</a></td>
                            <td>182298027</td>
                            <td>SOINTA SRL</td>
                            <td>C792CA0359E8CFD00BD...</td>
                            <td>737571</td>
                            <td>31/10/2024</td>
                            <td>64.96</td>
                            <td>5.91</td>
                            <td>5.91</td>
                            <td>5.91</td>
                            <td>5.91</td>
                            <td>5.91</td>
                            <td>
                                <select>
                                    <option>Seleccionar</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div id="confirmacion-compras" style="display: none;">
                <!-- Contenido de la pestaña de Confirmación de Compras -->
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NIT Proveedor</th>
                            <th>Razon Social Proveedor</th>
                            <th>Código de Autorización</th>
                            <th>Número Factura</th>
                            <th>Número DUI/DIM</th>
                            <th>Fecha de Factura/DUI/DIM</th>
                            <th>Importe Total Compra</th>
                            <th>Descuentos, Bonificaciones y Rebajas Sujestas a IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Credito Fiscal</th>
                            <th>Crédito Fiscal</th>
                            <th>Tipo Compra</th>
                        </tr>
                    </thead>
                    <tbody>
            </div>
        </section>
    </main>

</body>
</html>

