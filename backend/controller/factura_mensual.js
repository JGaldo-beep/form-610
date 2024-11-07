const pool = require('../config/db');

// Función para insertar una nueva factura mensual
exports.insertarFacturaMensual = async (req, res) => {
    const {
        gestion,
        periodo,
        codigo_autorizacion,
        nro_factura,
        nit_proveedor,
        razon_social_proveedor,
        numero_dui_dim,
        fecha_factura,
        importe_total_compra,
        descuentos_rebajas_iva,
        importe_gift_card,
        importe_base_credito_fiscal,
        credito_fiscal,
        tipo_compra
    } = req.body;

    const query = `
        INSERT INTO facturas_mensuales (
            gestion, periodo, codigo_autorizacion, nro_factura, nit_proveedor,
            razon_social_proveedor, numero_dui_dim, fecha_factura, importe_total_compra,
            descuentos_rebajas_iva, importe_gift_card, importe_base_credito_fiscal,
            credito_fiscal, tipo_compra
        ) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14)
        RETURNING *;
    `;

    try {
        const result = await pool.query(query, [
            gestion,
            periodo,
            codigo_autorizacion,
            nro_factura,
            nit_proveedor,
            razon_social_proveedor,
            numero_dui_dim,
            fecha_factura,
            importe_total_compra,
            descuentos_rebajas_iva,
            importe_gift_card,
            importe_base_credito_fiscal,
            credito_fiscal,
            tipo_compra,
        ]);

        res.status(201).json({ mensaje: 'Factura mensual insertada correctamente', factura: result.rows[0] });
    } catch (error) {
        console.error('Error al insertar la factura mensual:', error);
        res.status(500).json({ error: 'Error al insertar la factura mensual' });
    }
};

// Función para obtener todas las facturas mensuales
exports.obtenerFacturasMensuales = async (req, res) => {
    const query = `SELECT * FROM facturas_mensuales;`;

    try {
        const result = await pool.query(query);
        res.status(200).json(result.rows);
    } catch (error) {
        console.error('Error al obtener las facturas mensuales:', error);
        res.status(500).json({ error: 'Error al obtener las facturas mensuales' });
    }
};
