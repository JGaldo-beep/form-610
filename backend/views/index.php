<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanía Digital Bolivia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Barra de Navegación -->
    <header class="navbar">
        <div class="navbar-logo">
            <img src="images/logo_ciudadania.png" alt="Ciudadanía Digital Bolivia">
            <span>Ciudadanía Digital Bolivia</span>
        </div>
        
        <div class="navbar-menu">
            <!-- Campo de Búsqueda -->
            <div class="search-bar">
                <input type="text" placeholder="Buscar formularios..." id="searchInput">
            </div>
            <div class="navbar-user">
                <span>admin@gmail.com</span>
                <img src="images/icon_user.png" alt="User Icon">
            </div>
        </div>
    </header>

    <!-- Contenedor de las Tarjetas -->
    <main class="cards-container">
        <div class="card">
            <img src="images/facturacion_icon.png" alt="Facturación Icono">
            <h3>FACTURACIÓN</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="card">
            <img src="images/documentos_icon.png" alt="Documentos Icono">
            <h3>DOCUMENTOS</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="card">
            <img src="images/procesos_icon.png" alt="Procesos Icono">
            <h3>PROCESOS</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="card">
            <img src="images/multas_icon.png" alt="Multas Icono">
            <h3>MULTAS</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </main>

    <script>
        // Filtrar el contenido del menú desplegable según la búsqueda
        function filterDropdown() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toUpperCase();
            const dropdown = document.querySelector(".dropdown-content");
            const links = dropdown.getElementsByTagName("a");

            for (let i = 0; i < links.length; i++) {
                const txtValue = links[i].textContent || links[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    links[i].style.display = "";
                } else {
                    links[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
