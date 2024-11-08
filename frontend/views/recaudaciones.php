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
                <span>alanbrito@gmail.com</span>
                <img src="../images/userlogo.png" alt="Usuario">
            </div>
            <li style="text-align: left; list-style: none;">
                <a href="index.php" style="color: white; text-decoration: none; font-size: 30px;">Inicio</a>
            </li>
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
                        <td colspan="9" class="sub-header">VIGENTES A DECLARAR (3 items)</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>IVA</td>
                        <td>200</td>
                        <td>10/2024</td>
                        <td>14/11/2024</td>
                        <td class="status presented">DDJJ DEL PERIODO PRESENTADA</td>
                        <td><button class="btn rectificar">Rectificar</button></td>
                        <td><button class="btn ver">Ver</button></td>
                        <td><button class="btn certificar">Certificar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IT</td>
                        <td>400</td>
                        <td>10/2024</td>
                        <td>14/11/2024</td>
                        <td class="status paid">PAGADO TOTALMENTE</td>
                        <td><button class="btn rectificar">Rectificar</button></td>
                        <td><button class="btn ver">Ver</button></td>
                        <td><button class="btn certificar">Certificar</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>IRC IVA</td>
                        <td>600</td>
                        <td>10/2024</td>
                        <td>14/11/2024</td>
                        <td class="status pending">PENDIENTE</td>
                        <td><button class="btn declarar" onclick="updateStatus(this)">Declarar</button></td>
                        
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <script>
        function updateStatus(button) {
            const statusCell = button.closest('tr').querySelector('.status');
            statusCell.textContent = 'Procesando...';

            setTimeout(() => {
                statusCell.textContent = 'HECHO';
                statusCell.classList.remove('pending');
                statusCell.classList.add('done');
                statusCell.style.color = 'green';  // Cambia el color a verde
                statusCell.style.textAlign = 'center';  // Centra el texto
                statusCell.style.fontWeight = 'bold';  // Opcional: negrita para resaltar más

                button.textContent = 'Rectificar';
                button.classList.remove('declarar');
                button.classList.add('rectificar');
                button.style.backgroundColor = 'orange';
                button.style.color = 'white';

                window.location.href = 'declaracion_jurada.php';

            }, 3000); // 3000 ms = 3 segundos
        }
    </script>

</body>
</html>
