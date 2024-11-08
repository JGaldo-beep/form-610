<?php
session_start();

// Configuración de las credenciales de Ciudadanía Digital
$client_id = 'zU0ZCJm6ZNsSQlBbHM25B'; // Reemplaza con tu Client ID real
$client_secret = 'rUoFLzWerhBxohfz7vDo92oz-od-7B7K6-VPegzGYBuOMVWuaeWhDIG6NvybhATlFL7RcFx01nmDdqBu6C-wNg';    // Reemplaza con tu Client Secret real
$redirect_uri = 'http://localhost/form-610/frontend/views/registro_compras.php'; // URL de redirección registrada

// Paso 1: Capturar el código de autorización y solicitar el token de acceso
if (isset($_GET['code'])) {
    $authorization_code = $_GET['code'];
    $token_url = 'https://proveedor.ciudadania.demo.agetic.gob.bo/token';

    // Datos para la solicitud de token
    $data = [
        'grant_type' => 'authorization_code',
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'code' => $authorization_code,
    ];

    // Configuración de la solicitud POST
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($token_url, false, $context);
    $token_data = json_decode($response, true);

    // Verifica si se obtuvo el token de acceso
    if (isset($token_data['access_token'])) {
        $_SESSION['access_token'] = $token_data['access_token'];

        // Paso 2: Obtener datos del usuario usando el token de acceso
        $access_token = $_SESSION['access_token'];
        $user_info_url = 'https://proveedor.ciudadania.demo.agetic.gob.bo/userinfo';

        // Configuración de la solicitud GET
        $options = [
            'http' => [
                'header' => "Authorization: Bearer $access_token\r\n",
                'method' => 'GET',
            ],
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($user_info_url, false, $context);
        $user_data = json_decode($response, true);

        // Guarda los datos del usuario en la sesión y redirige a registro_compras.php
        if ($user_data) {
            $_SESSION['user_name'] = $user_data['name'];
            $_SESSION['user_email'] = $user_data['email'];
            $_SESSION['user_ci'] = $user_data['ci'];
            header("Location: registro_compras.php");
            exit;
        } else {
            echo "Error al obtener los datos del usuario.";
        }
    } else {
        echo "Error al obtener el token de acceso.";
    }
} else {
    // URL de autorización de Ciudadanía Digital
    $auth_url = "https://proveedor.ciudadania.demo.agetic.gob.bo/auth?response_type=code&client_id=$client_id&redirect_uri=$redirect_uri&scope=openid%20profile%20offline_access";
}

?>

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
                    <!-- Botón para iniciar sesión con Ciudadanía Digital -->
                    <button type="button" class="login-button secondary" onclick="window.location.href='<?php echo $auth_url; ?>'">
                        CIUDADANIA DIGITAL
                    </button>
                </form>
                
                <a href="#" class="forgot-password">Olvide mi contraseña</a>
                <a href="#" class="auth-info">Autenticarse SIAT En Línea v1</a>
            </div>
        </div>
    </div>
</body>
</html>
