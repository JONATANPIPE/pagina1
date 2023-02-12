-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 01:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `totalsecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'celador');

-- --------------------------------------------------------

--
-- Table structure for table `eliminados`
--

CREATE TABLE `eliminados` (
  `DOCUMENTO` int(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `APARTAMENTO` varchar(10) NOT NULL,
  `CODIGO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eliminados`
--

INSERT INTO `eliminados` (`DOCUMENTO`, `NOMBRE`, `TELEFONO`, `CORREO`, `APARTAMENTO`, `CODIGO`) VALUES
(1005851198, 'victor manuel lopez mendez', '3148386026', 'vl491249@gmail.com', '207', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `HORA` varchar(20) NOT NULL,
  `FECHA` varchar(20) NOT NULL,
  `DOCUMENTO` int(30) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `APARTAMENTO` varchar(15) NOT NULL,
  `CODIGO` int(20) NOT NULL,
  `INGRESO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`HORA`, `FECHA`, `DOCUMENTO`, `NOMBRE`, `TELEFONO`, `CORREO`, `APARTAMENTO`, `CODIGO`, `INGRESO`) VALUES
('09:59 pm', '05-11-22', 1005851198, 'victo manuel lopez mendez', '2218386026', 'vl491249@gmail.com', '307', 3224, 'Masculino'),
('11:00 pm', '05-11-22', 1005851198, 'victo manuel lopez mendez', '2218386026', 'vl491249@gmail.com', '307', 3224, 'Salida'),
('10:02 pm', '09-11-22', 1005851198, 'victor manuel lopez mendez', '2218386026', 'vl491249@gmail.com', '207', 24311, 'Ingreso');

-- --------------------------------------------------------

--
-- Table structure for table `residentes`
--

CREATE TABLE `residentes` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CORREO` varchar(30) NOT NULL,
  `APARTAMENTO` varchar(10) NOT NULL,
  `CODIGO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residentes`
--

INSERT INTO `residentes` (`DOCUMENTO`, `NOMBRE`, `TELEFONO`, `CORREO`, `APARTAMENTO`, `CODIGO`) VALUES
(1005851198, 'victor manuel lopez mendez', '2218386026', 'vl491249@gmail.com', '207', 24311),
(1006120157, 'MARIA PAULA CASTRO', '3168861368', 'mapacaro9@gmail.com', '202', 152468);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `contrasena`, `id_cargo`) VALUES
(1, 'Paula ', 'pacaro', 'Mapa891620', 1),
(2, 'Paula', 'pacaro1', 'Mapa891620', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `DOCUMENTO` int(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `USUARIO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`DOCUMENTO`, `NOMBRE`, `TELEFONO`, `CORREO`, `USUARIO`) VALUES
(65741650, 'Glora Marina Rodriguez', '3204263481', 'mapacaro9@gmail.com', 'Administrador ');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_eliminados`
--

CREATE TABLE `usuarios_eliminados` (
  `DOCUMENTO` int(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `USUARIO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitante`
--

CREATE TABLE `visitante` (
  `DOCUMENTO` int(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APARTAMENTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitante`
--

INSERT INTO `visitante` (`DOCUMENTO`, `NOMBRE`, `APARTAMENTO`) VALUES
(2276478, 'jajajajajaja', '204');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eliminados`
--
ALTER TABLE `eliminados`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indexes for table `residentes`
--
ALTER TABLE `residentes`
  ADD PRIMARY KEY (`DOCUMENTO`,`CODIGO`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indexes for table `usuarios_eliminados`
--
ALTER TABLE `usuarios_eliminados`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
