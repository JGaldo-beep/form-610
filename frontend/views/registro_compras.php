<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <!-- Sidebar Menu -->
    <aside class="sidebar">
        <h3>Menú principal</h3>
        <ul>
            <li onclick="toggleSubmenu('comprasSubmenu')">REGISTRO COMPRAS, VENTAS</li>
            <ul id="comprasSubmenu" class="submenu">
                <li onclick="toggleSubmenu('comprasOptions')">COMPRAS</li>
                <ul id="comprasOptions" class="submenu">
                    <li><a href="#">Registro de Compras</a></li>
                    <li><a href="#">Registro Masivo</a></li>
                </ul>
                <li><a href="#">VENTAS</a></li>
            </ul>
            <li><a href="#">CONSOLIDACIÓN</a></li>
            <li><a href="#">CONSULTAS</a></li>
            <li><a href="#">RECTIFICACIÓN RVC</a></li>
            <li><a href="#">RECTIFICACIÓN PERIODOS ANTERIORES LCV</a></li>
            <li><a href="#">GESTIÓN DUPLICADOS</a></li>
            <li><a href="#">CORRECCIÓN Y PAGO DE FACTURAS OBSERVADAS</a></li>
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main class="content">
        <header>
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

                <label for="periodo">Periodo:</label>
                <select id="periodo">
                    <option value="OCTUBRE">OCTUBRE</option>
                </select>

                <label for="codigo-autorizacion">Código de Autorización:</label>
                <input type="text" id="codigo-autorizacion">

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
                        <th>Fecha de Factura</th>
                        <th>Importe Total Compra</th>
                        <th>Crédito Fiscal</th>
                        <th>Tipo Compra</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example rows -->
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
                        <td>
                            <select>
                                <option>Seleccionar</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
