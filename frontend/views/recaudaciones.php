<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recaudaciones</title>
    <link rel="stylesheet" href="../css/style_recaudacion.css">
</head>
<body>

    <!-- Encabezado de la Página -->
    <header class="header">
        <div class="header-content">
            <h1>RECAUDACIONES</h1>
            <div class="user-info">
                <span>fridel@gmail.com</span>
                <img src="path/to/userlogo.png" alt="Usuario">
            </div>
        </div>
    </header>

    <!-- Contenedor Principal -->
    <main class="main-content">
        <section class="declaration-section">
            <h2>Formularios Vigentes a Declarar</h2>
            <table class="declaration-table">
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Sigla</th>
                        <th>Formulario</th>
                        <th>Periodo</th>
                        <th>Fecha de Vencimiento</th>
                        <th>Estado DDJJ</th>
                        <th>Operación</th>
                        <th>Previsualizar</th>
                        <th>Certificación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="9" class="sub-header">VIGENTES A DECLARAR (2 items)</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>IVA</td>
                        <td>200</td>
                        <td>10/2024</td>
                        <td>14/11/2024</td>
                        <td class="status presented">DDJJ DEL PERIODO PRESENTADA</td>
                        <td><button class="btn rectificar"><img src="path/to/icon-rectificar.png" alt="Icono Rectificar"> Rectificar</button></td>
                        <td><button class="btn ver"><img src="path/to/icon-ver.png" alt="Icono Ver"> Ver</button></td>
                        <td><button class="btn certificar"><img src="path/to/icon-certificar.png" alt="Icono Certificar"> Certificar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IT</td>
                        <td>400</td>
                        <td>10/2024</td>
                        <td>14/11/2024</td>
                        <td class="status paid">PAGADO TOTALMENTE</td>
                        <td><button class="btn rectificar"><img src="path/to/icon-rectificar.png" alt="Icono Rectificar"> Rectificar</button></td>
                        <td><button class="btn ver"><img src="path/to/icon-ver.png" alt="Icono Ver"> Ver</button></td>
                        <td><button class="btn certificar"><img src="path/to/icon-certificar.png" alt="Icono Certificar"> Certificar</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
