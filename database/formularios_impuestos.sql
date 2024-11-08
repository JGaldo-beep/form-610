-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2024 a las 14:17:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularios_impuestos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensual`
--

CREATE TABLE `mensual` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nit_proveedor` varchar(15) NOT NULL,
  `razon_social_proveedor` varchar(100) DEFAULT NULL,
  `codigo_autorizacion` varchar(100) DEFAULT NULL,
  `numero_factura` varchar(20) DEFAULT NULL,
  `numero_dui_dim` varchar(20) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `importe_total_compra` decimal(10,2) DEFAULT NULL,
  `descuentos` decimal(10,2) DEFAULT NULL,
  `importe_gift_card` decimal(10,2) DEFAULT NULL,
  `importe_base_credito_fiscal` decimal(10,2) DEFAULT NULL,
  `credito_fiscal` decimal(10,2) DEFAULT NULL,
  `tipo_compra` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensual`
--

INSERT INTO `mensual` (`id`, `nit_proveedor`, `razon_social_proveedor`, `codigo_autorizacion`, `numero_factura`, `numero_dui_dim`, `fecha_factura`, `importe_total_compra`, `descuentos`, `importe_gift_card`, `importe_base_credito_fiscal`, `credito_fiscal`, `tipo_compra`) VALUES
(1, '123456789', 'Proveedor Consumo 1', 'A12345', '1001', '12345', '2024-10-01', 1500.00, 50.00, 0.00, 1450.00, 290.00, 'consumo'),
(2, '987654321', 'Proveedor Consumo 2', 'B12345', '1002', '12346', '2024-10-02', 2000.00, 100.00, 0.00, 1900.00, 380.00, 'consumo'),
(3, '112233445', 'Proveedor Alimento 1', 'C12345', '2001', '12347', '2024-10-03', 500.00, 25.00, 0.00, 475.00, 95.00, 'alimento'),
(4, '556677889', 'Proveedor Alimento 2', 'D12345', '2002', '12348', '2024-10-04', 800.00, 40.00, 0.00, 760.00, 152.00, 'alimento'),
(5, '223344556', 'Proveedor Maquinaria 1', 'E12345', '3001', '12349', '2024-10-05', 10000.00, 500.00, 0.00, 9500.00, 1900.00, 'maquinaria'),
(6, '998877665', 'Proveedor Maquinaria 2', 'F12345', '3002', '12350', '2024-10-06', 15000.00, 750.00, 0.00, 14250.00, 2850.00, 'maquinaria'),
(7, '123456780', 'Proveedor Consumo 3', 'G12345', '1003', '12351', '2024-10-07', 1200.00, 60.00, 0.00, 1140.00, 228.00, 'consumo'),
(8, '987654320', 'Proveedor Consumo 4', 'H12345', '1004', '12352', '2024-10-08', 1800.00, 90.00, 0.00, 1710.00, 342.00, 'consumo'),
(9, '111111111', 'Proveedor Consumo 5', 'I12345', '1005', '12353', '2024-10-09', 2500.00, 125.00, 0.00, 2375.00, 475.00, 'consumo'),
(10, '222222222', 'Proveedor Consumo 6', 'J12345', '1006', '12354', '2024-10-10', 3000.00, 150.00, 0.00, 2850.00, 570.00, 'consumo'),
(11, '333333333', 'Proveedor Alimento 3', 'K12345', '2003', '12355', '2024-10-11', 600.00, 30.00, 0.00, 570.00, 114.00, 'alimento'),
(12, '444444444', 'Proveedor Alimento 4', 'L12345', '2004', '12356', '2024-10-12', 950.00, 47.50, 0.00, 902.50, 180.50, 'alimento'),
(13, '555555555', 'Proveedor Alimento 5', 'M12345', '2005', '12357', '2024-10-13', 700.00, 35.00, 0.00, 665.00, 133.00, 'alimento'),
(14, '666666666', 'Proveedor Alimento 6', 'N12345', '2006', '12358', '2024-10-14', 1000.00, 50.00, 0.00, 950.00, 190.00, 'alimento'),
(15, '777777777', 'Proveedor Maquinaria 3', 'O12345', '3003', '12359', '2024-10-15', 12000.00, 600.00, 0.00, 11400.00, 2280.00, 'maquinaria'),
(16, '888888888', 'Proveedor Maquinaria 4', 'P12345', '3004', '12360', '2024-10-16', 17000.00, 850.00, 0.00, 16150.00, 3230.00, 'maquinaria'),
(17, '999999999', 'Proveedor Maquinaria 5', 'Q12345', '3005', '12361', '2024-10-17', 22000.00, 1100.00, 0.00, 20900.00, 4180.00, 'maquinaria'),
(18, '101010101', 'Proveedor Maquinaria 6', 'R12345', '3006', '12362', '2024-10-18', 25000.00, 1250.00, 0.00, 23750.00, 4750.00, 'maquinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nit` varchar(20) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha_factura` date NOT NULL,
  `numero_factura` varchar(20) NOT NULL,
  `codigo_autorizacion` varchar(50) NOT NULL,
  `nit_ci_cliente` varchar(20) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `razon_social_cliente` varchar(100) DEFAULT NULL,
  `importe_total_venta` decimal(10,2) NOT NULL,
  `descuentos` decimal(10,2) DEFAULT NULL,
  `importe_gift_card` decimal(10,2) DEFAULT NULL,
  `importe_base_debito_fiscal` decimal(10,2) DEFAULT NULL,
  `debito_fiscal` decimal(10,2) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `codigo_control` varchar(50) DEFAULT NULL,
  `tipo_venta` varchar(50) DEFAULT NULL,
  `estado_consolidacion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha_factura`, `numero_factura`, `codigo_autorizacion`, `nit_ci_cliente`, `complemento`, `razon_social_cliente`, `importe_total_venta`, `descuentos`, `importe_gift_card`, `importe_base_debito_fiscal`, `debito_fiscal`, `estado`, `codigo_control`, `tipo_venta`, `estado_consolidacion`) VALUES
(1, '2023-11-01', '123456', 'ABC123XYZ456LMN', '10293847', '', 'Cliente 1', 500.75, 10.00, 5.00, 485.75, 45.00, 'Vigente', 'ABC123DEF456', 'Venta Nacional', 'Consolidado'),
(2, '2023-10-15', '234567', 'DEF456QWE789POI', '20394857', '01', 'Cliente 2', 750.60, 15.50, 10.00, 725.10, 60.25, 'Vigente', 'GHI789JKL012', 'Exportación', 'Pendiente'),
(3, '2023-09-10', '345678', 'GHI789ASD012JKL', '30495876', '', 'Cliente 3', 480.00, 5.00, 0.00, 475.00, 42.50, 'Vencida', 'JKL012MNO345', 'Importación', 'Consolidado'),
(4, '2023-08-25', '456789', 'JKL012ZXC345VBN', '40596785', '', 'Cliente 4', 625.30, 12.25, 7.50, 605.55, 55.30, 'Anulada', 'MNO345PQR678', 'Venta Nacional', 'Pendiente'),
(5, '2023-07-05', '567890', 'MNO345RTY678GHJ', '50697854', '02', 'Cliente 5', 900.00, 20.00, 15.00, 865.00, 75.00, 'Vigente', 'PQR678STU901', 'Exportación', 'Consolidado'),
(6, '2023-06-15', '678901', 'PQR678UJI901MKL', '60789745', '', 'Cliente 6', 300.40, 8.00, 0.00, 292.40, 27.00, 'Vigente', 'STU901VWX234', 'Importación', 'Pendiente'),
(7, '2023-05-12', '789012', 'STU901LMN234QAZ', '70890856', '', 'Cliente 7', 450.25, 6.25, 3.00, 441.00, 40.00, 'Vencida', 'VWX234YZA567', 'Venta Nacional', 'Consolidado'),
(8, '2023-04-20', '890123', 'VWX234ASD567RTY', '80901967', '', 'Cliente 8', 825.00, 18.00, 5.00, 802.00, 70.00, 'Anulada', 'YZA567BCD890', 'Exportación', 'Pendiente'),
(9, '2023-03-10', '901234', 'YZA567QWE890OPI', '91012098', '', 'Cliente 9', 600.60, 10.50, 8.00, 582.10, 55.00, 'Vigente', 'BCD890EFG123', 'Importación', 'Consolidado'),
(10, '2023-02-28', '012345', 'BCD890XCV123ZAS', '01123109', '03', 'Cliente 10', 725.90, 14.75, 10.25, 701.15, 65.00, 'Vigente', 'EFG123HIJ456', 'Venta Nacional', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensual`
--
ALTER TABLE `mensual`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gmail` (`gmail`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensual`
--
ALTER TABLE `mensual`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
