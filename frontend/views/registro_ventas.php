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
                <span>alanbrito@gmail.com</span>
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

                <label for="codigo-autorizacion">Código de Autorización:</label>
                <input type="text" id="codigo-autorizacion">

                <label for="nro-factura">Nro. Factura:</label>
                <input type="text" id="nro-factura">

                <label for="nro-cliente">Nro. Documento Cliente:</label>
                <input type="text" id="nro-cliente">

                <label for="estadoConsolidacion">Estado Uso Consolidación:</label>
                <select id="estadoConsolidacion">
                    <option value="Seleccionar">Seleccionar</option>
                </select>

                <button type="button">Buscar</button>
            </form>
        </section>

        <section class="table-section">
            <h3>PERIODO SELECCIONADO 10 - 2024</h3>
            <div class="tabs">
                <button onclick="mostrarTab('ventas')">ESTÁNDAR</button>
            </div>
            
            <div id="ventas-registradas">
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
                    <tbody>
                        <!-- Aquí irán los registros -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

</body>
</html>

