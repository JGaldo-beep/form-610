// Configuración de la conexión a la base de datos PostgreSQL usando variables de entorno
const pool = new Pool({
    user: '610_user',
    host: 'localhost',
    database: 'form-610',
    password: 'mortadela1',
    port: 5432,  // Puerto por defecto de PostgreSQL
});

// Prueba de conexión
pool.connect((err, client, release) => {
    if (err) {
        return console.error('Error al conectar a la base de datos:', err.stack);
    }
    console.log('Conexión exitosa a la base de datos');
    release();
});

module.exports = pool;