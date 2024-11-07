CREATE TABLE mensual (
    id SERIAL PRIMARY KEY,
    gestion INT,                           -- Año de la gestión
    periodo VARCHAR(20),                   -- Mes o periodo
    codigo_autorizacion VARCHAR(100),      -- Código de autorización de la factura
    nro_factura INT,                       -- Número de la factura
    nit_proveedor VARCHAR(20),             -- NIT del proveedor
    razon_social_proveedor VARCHAR(100),   -- Razón social del proveedor
    numero_dui_dim INT,                    -- Número DUI/DIM (si aplica)
    fecha_factura DATE,                    -- Fecha de la factura
    importe_total_compra DECIMAL(10, 2),   -- Importe total de la compra
    descuentos_rebajas_iva DECIMAL(10, 2), -- Descuentos, bonificaciones, rebajas sujetas a IVA
    importe_gift_card DECIMAL(10, 2),      -- Importe de gift card (si aplica)
    importe_base_credito_fiscal DECIMAL(10, 2), -- Importe base crédito fiscal
    credito_fiscal DECIMAL(10, 2),         -- Crédito fiscal
    tipo_compra VARCHAR(50)                -- Tipo de compra
);
