<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - SIAT</title>
    <link rel="stylesheet" href="../css/style_login.css">
</head>
<body>
    <div class="login-container">
        <!-- Panel Izquierdo -->
        <div class="login-left">
            <img src="../images/logo-siat-bolivia.png" alt="Logo SIAT" class="logo" >
            <p>Sistema Integrado de Administración Tributaria</p>
            <h2>SIAT</h2>
        </div>
        
        <!-- Panel Derecho - Formulario de Login -->
        <div class="login-right">
            <div class="login-box">
                <img src="../images/Impuestos_Nacionales.png" alt="Impuestos Nacionales" class="logo">
                <h2>¡Bienvenido/a!</h2>
                
                <form>
                    <div class="input-group">
                        <input type="text" placeholder="NIT/CUR/CI" required>
                        <span class="icon">🖊️</span>
                    </div>
                    
                    <div class="input-group">
                        <input type="email" placeholder="Correo" required>
                        <span class="icon">📧</span>
                    </div>
                    
                    <div class="input-group">
                        <input type="password" placeholder="Contraseña" required>
                        <span class="icon">🔒</span>
                    </div>
                    
                    <button type="submit" class="login-button">INGRESAR</button>

                    <a href="https://proveedor.ciudadania.demo.agetic.gob.bo/auth?response_type=code&client_id=zU0ZCJm6ZNsSQlBbHM25B&state=509ccc2713049e6efea071a9c34f6f45&nonce=231301a1afe20d88ca963ee84c3929c3&redirect_uri=http://localhost/form-610/frontend/views/registro_compras.php&scope=openid%20profile%20offline_access" class="login-button secondary" target="_blank">
                        CIUDADANIA DIGITAL
                    </a>



                    </form>
                
                <a href="#" class="forgot-password">Olvide mi contraseña</a>
                <a href="#" class="auth-info">Autenticarse SIAT En Línea v1</a>
            </div>
        </div>
    </div>
</body>
</html>
