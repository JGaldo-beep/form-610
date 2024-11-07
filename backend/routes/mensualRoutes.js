const express = require('express');
const router = express.Router();
const facturaController = require('../controllers/factura_mensual');

// Ruta para insertar una nueva factura mensual
router.post('/mensual', facturaController.insertarFacturaMensual);

// Ruta para obtener todas las facturas mensuales
router.get('/mensuales', facturaController.obtenerFacturasMensuales);

module.exports = router;
