require('dotenv').config();
const express = require('express');
const pool = require('./config/db'); // Importamos la conexión para probarla

const app = express();
app.use(express.json());

// Probar la conexión a la base de datos
pool.connect((err) => {
    if (err) {
        console.error('Error al conectar a la base de datos:', err);
    } else {
        console.log('Conectado a la base de datos de PostgreSQL');
    }
});

// Rutas de la API
app.use('/api/facturas', require('./routes/mensualRoutes'));

// Iniciar el servidor
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Servidor corriendo en el puerto ${PORT}`));
