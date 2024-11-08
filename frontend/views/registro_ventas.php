<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ventas</title>
    <link rel="stylesheet" href="../css/style_rc.css">
</head>
<body>

<main class="content">
        <header class="header">
            <h1>REGISTRO DE VENTAS</h1>
            <div class="user-info">
                <span>fridel@gmail.com</span>
            </div>
        </header>

        <section class="search-section">
            <h2>VENTAS REGISTRADAS</h2>
            <form>
                <label for="gestion">Gestión:</label>
                <select id="gestion">
                    <option value="2024">2024</option>
                </select>

                <label for="periodo">Periodo:</label>
                <select id="periodo">
                    <option value="OCTUBRE">OCTUBRE</option>
                </select>

                <label for="fecha-emision">Fecha Emision:</label>
                <input type="date" id="fecha-emision">

                <label for="codigo-autorizacion">Codigo de Autorizacion:</label>
                <input type="text" id="codigo-autorizacion">

                <label for="nro-factura">Nro. Factura:</label>
                <input type="text" id="nro-factura">

                <label for="nro-cliente">Nro. Documento Cliente:</label>
                <input type="text" id="nro-cliente">

                <label for="estadoConsolidacion">Estado Uso Consolidacion:</label>
                <select id="estadoConsolidacion">
                    <option value="Seleccionar">Seleccionar</option>
                </select>

                <button type="button">Buscar</button>
            </form>
        </section>

        <section class="table-section">
            <h3>PERIODO SELECCIONADO 10 - 2024</h3>
            <div class="tabs">
            <button onclick="mostrarTab('ventas')">ESTANDAR</button>
            </div>
            <div class="table-controls">
                <button class="btn-new">Nuevo Registro</button>
                <button class="btn-download">Descargar Consulta CSV</button>
                <button class="btn-download">Descargar Consulta XLSX</button>
            </div>
            
            <div id="compras-registradas">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Fecha de la Factura</th>
                            <th>N° de la Factura</th>
                            <th>Código de Autorización</th>
                            <th>NIT / CI Cliente</th>
                            <th>Complemento</th>
                            <th>Nombre o Razón Social</th>
                            <th>Importe Total de la Venta</th>
                            <th>Descuentos, Bonificaciones y Rebajas Sujetas al IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Para Débito Fiscal</th>
                            <th>Débito Fiscal</th>
                            <th>Estado</th>
                            <th>Código de Control</th>
                            <th>Tipo de Venta</th>
                            <th>Estado Consolidación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
            
            <div id="confirmacion-compras" style="display: none;">
                <!-- Contenido de la pestaña de Confirmación de Compras -->
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Fecha de la Factura</th>
                            <th>N° de la Factura</th>
                            <th>Código de Autorización</th>
                            <th>NIT / CI Cliente</th>
                            <th>Complemento</th>
                            <th>Nombre o Razón Social</th>
                            <th>Importe Total de la Venta</th>
                            <th>Descuentos, Bonificaciones y Rebajas Sujetas al IVA</th>
                            <th>Importe Gift Card</th>
                            <th>Importe Base Para Débito Fiscal</th>
                            <th>Débito Fiscal</th>
                            <th>Estado</th>
                            <th>Código de Control</th>
                            <th>Tipo de Venta</th>
                            <th>Estado Consolidación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
            </div>

            
        </section>
    </main>

</body>
</html>
