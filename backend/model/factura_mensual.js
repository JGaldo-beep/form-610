const { DataTypes } = require('sequelize');
const { sequelize } = require('../config/db');

const FacturaMensual = sequelize.define('FacturaMensual', {
    gestion: {
        type: DataTypes.INTEGER,
        allowNull: false,
    },
    periodo: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    codigo_autorizacion: {
        type: DataTypes.STRING(100),
        allowNull: false,
    },
    nro_factura: {
        type: DataTypes.INTEGER,
        allowNull: false,
    },
    nit_proveedor: {
        type: DataTypes.STRING(20),
        allowNull: false,
    },
    razon_social_proveedor: {
        type: DataTypes.STRING(100),
        allowNull: false,
    },
    numero_dui_dim: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    fecha_factura: {
        type: DataTypes.DATE,
        allowNull: false,
    },
    importe_total_compra: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: false,
    },
    descuentos_rebajas_iva: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: true,
    },
    importe_gift_card: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: true,
    },
    importe_base_credito_fiscal: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: false,
    },
    credito_fiscal: {
        type: DataTypes.DECIMAL(10, 2),
        allowNull: false,
    },
    tipo_compra: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
}, {
    tableName: 'facturas_mensuales',
    timestamps: false,
});

module.exports = FacturaMensual;
