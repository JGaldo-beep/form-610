<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaración Jurada</title>
    <link rel="stylesheet" href="../css/style_declaracion.css">
</head>
<body>

    <div class="container">
        
        <div class="header">
            <h2>Datos de la Declaración Jurada</h2>
        </div>
        <div class="form-section">
            <div class="form-group">
                <label>Nit:</label>
                <input type="text" value="6666" readonly>
            </div>
            <div class="form-group">
                <label>Razón Social:</label>
                <input type="text" value="Alan Brito" readonly>
            </div>
            <div class="form-group">
                <label>Formulario:</label>
                <input type="text" value="200" readonly>
            </div>
            <div class="form-group">
                <label>Periodo de Declaración:</label>
                <input type="text" value="10/2024" readonly>
            </div>
            <div class="form-group">
                <label>Fecha Vencimiento:</label>
                <input type="text" value="14/11/2024" readonly>
            </div>
            <div class="form-group">
                <label>Monto a Pagar en (Bs.):</label>
                <input type="text" value="0" readonly>
            </div>
        </div>

        <div class="header">
            <h2>Declaración Jurada Sugerida</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Cod. casilla</th>
                    <th>Descripcion</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>13</td>
                    <td>Ventas de bienes y/o servicios gravados en el mercado interno, excepto ventas gravadas con Tasa Cero</td>
                    <td><input type="text" value="350" ></td>
                </tr>
                <tr>
                    <td>505</td>
                    <td>Ventas no gravadas y operaciones que no son objeto del IVA</td>
                    <td><input type="text" value="0" ></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Devoluciones y rescisiones efectuadas en el período</td>
                    <td><input type="text" value="0" ></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Total compras correspondientes a actividades gravadas y/o no gravadas</td>
                    <td><input type="text" value="821" ></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Compra directamente vinculadas a actividad gravadas</td>
                    <td><input type="text" value="634" ></td>
                </tr>
            <tr>
                <td>27</td>
                <td>Devoluciones y rescisiones recibidas en el período</td>
                <td><input type="text" value="0" ></td>
            </tr>
            <tr>
                <td>635</td>
                <td>Saldo de Crédito Fiscal del período anterior a compensar (C592 del Formulario del período anterior)</td>
                <td><input type="text" value="796" ></td>
            </tr>
            <tr>
                <td>622</td>
                <td>Pagos a Cuenta realizados en DD.JJ. y/o Boletas de Pago correspondientes al período que se declara</td>
                <td><input type="text" value="0" ></td>
            </tr>
            </tbody>
            
        </table>
        
        <div class="action-buttons">
            <button onclick="window.history.back()" class="back-button">Volver</button>
            <a href="recaudaciones.php">
                <button onclick="declare()" class="declare-button">Declarar</button>
            </a>
        </div>
        
    </div>
    

</body>
</html>
