<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" href="../css/style_doc.css">
</head>
<body>

    <!-- Encabezado de la Página -->
    <header class="header">
        <div class="header-content">
            <h1>DOCUMENTOS</h1>
            <div class="user-info">
                <span>alanbrito.com</span>
                <img src="../images/userlogo.png" alt="Usuario">
            </div>
            <li style="text-align: left; list-style: none;">
                <a href="index.php" style="color: white; text-decoration: none; font-size: 30px;">Inicio</a>
            </li>
        </div>
    </header>

    <!-- Contenedor Principal -->
    <main class="main-content">
        <section class="documents-section">
            <h2>Mis Documentos</h2>
            <div class="documents-list">
                <div class="document-item">
                    <h3>Carnet de Identidad</h3>
                    <button class="btn view" onclick="showDocument('carnet')">Ver Documento</button>
                </div>
                <div class="document-item">
                    <h3>Certificado de Nacimiento</h3>
                    <button class="btn view" onclick="showDocument('nacimiento')">Ver Documento</button>
                </div>
                <div class="document-item">
                    <h3>Licencia de Conducir</h3>
                    <button class="btn view" onclick="showDocument('licencia')">Ver Documento</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal para mostrar la imagen del documento -->
    <div class="modal" id="documentModal" onclick="closeModal()">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="documentImage" src="" alt="Documento">
        </div>
    </div>

    <script>
        function showDocument(type) {
            const modal = document.getElementById('documentModal');
            const image = document.getElementById('documentImage');
            
            // Cambia la ruta de la imagen según el tipo de documento
            if (type === 'carnet') {
                image.src = '../images/carnet-de-identidad-png-favpng-tWwEMLur76cU5G8AQRCviRFy4.jpg';
            } else if (type === 'nacimiento') {
                image.src = '../images/14098698.png';
            } else if (type === 'licencia') {
                image.src = '../images/1581919.png';
            }

            modal.style.display = 'flex'; // Muestra el modal
        }

        function closeModal() {
            document.getElementById('documentModal').style.display = 'none';
        }
    </script>

</body>
</html>
