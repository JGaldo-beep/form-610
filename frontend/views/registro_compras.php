<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <link rel="stylesheet" href="../css/style_rc.css">
</head>
<body>

    <!-- Menú lateral -->
    <aside class="sidebar">
        <h3>Menú principal</h3>
        <ul>
            <li>REGISTRO COMPRAS, VENTAS
                <ul>
                    <li><a href="#">Registro de Compras</a></li>
                    <li><a href="#">Registro Masivo</a></li>
                </ul>
            </li>
            <li><a href="#">VENTAS</a></li>
            <li><a href="#">CONSOLIDACIÓN</a></li>
            <li><a href="#">CONSULTAS</a></li>
            <li><a href="#">RECTIFICACIÓN RVC</a></li>
            <li><a href="#">RECTIFICACIÓN PERIODOS ANTERIORES LCV</a></li>
            <li><a href="#">GESTIÓN DUPLICADOS</a></li>
            <li><a href="#">CORRECCIÓN Y PAGO DE FACTURAS OBSERVADAS</a></li>
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
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de filas -->
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
                    <!-- Añadir más filas según sea necesario -->
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
