-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 21:35:01
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `biografia` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `apellido`, `fecha`, `biografia`) VALUES
(1, ' Jon', 'Krakauer', '1954', ' https://es.wikipedia.org/wiki/Jon_Krakauer'),
(2, 'Horacio', 'Quiroga', '1878-1937', ' https://es.wikipedia.org/wiki/Horacio_Quiroga'),
(3, 'Jane', 'Austen', '1775-1817', ' '),
(4, ' Stieg', 'Larsson', '1954-2004', ' '),
(5, ' Agatha', 'Christie', '1870-1976', ' https://es.wikipedia.org/wiki/Agatha_Christie'),
(6, ' Edgar Allan', 'Poe', '1809-1849', ' '),
(7, ' Louisa May', 'Alcott', '1832-1888', ' https://es.wikipedia.org/wiki/Louisa_May_Alcott');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `valoracion` int(5) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_libro`, `id_usuario`, `valoracion`, `comentario`) VALUES
(1, 1, 1, 4, 'comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `anio` varchar(12) DEFAULT NULL,
  `genero` varchar(30) NOT NULL,
  `resenia` varchar(480) DEFAULT NULL,
  `valoracion` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `id_autor`, `anio`, `genero`, `resenia`, `valoracion`) VALUES
(1, 'Little Women', 7, ' ', 'Novela', 'cambie la reseña', 5),
(2, ' Little Men', 7, ' 1871', 'Literatura Juvenil', 'Cuenta la historia de Jo Bhaer (Jo March cuando era soltera), protagonista de Mujercitas; y de los niños de Plumfield, una escuela y guardería dirigida por ella y su marido. El libro fue inspirado por la muerte del cuñado de Alcott, lo que se revela en uno de los últimos capítulos, cuando un personaje querido de Mujercitas fallece.', 2),
(3, ' Asesinato en el Orient Express', 5, ' 1934', ' Policial', 'El detective privado Hércules Poirot recibe un telegrama en el que se le pide que cancele sus compromisos y regrese a Inglaterra lo antes posible, por lo que decide viajar en el Orient Express que parte esa noche. Durante el viaje, Poirot conoce a un norteamericano llamado Ratchett, al que vio en el Tokatlian. Ratchett cree que su vida está en peligro y quiere contratar a Poirot, pero éste se niega diciendo a Ratchett que \"no le gusta su cara\". ', 3),
(4, ' Hacia Rutas Salvajes', 1, '1996', ' Aventura', 'Christopher McCandless, un joven proveniente de una acomodada familia, en 1990 y luego de haberse graduado de la Universidad Emory de Atlanta, decidió emprender un viaje sin decirle a nadie su lugar de destino ni cuales eran sus intenciones. Dos años más tarde sería encontrado muerto en el interior de Alaska. ', 5),
(5, ' Cuentos de amor de locura y de muerte', 2, ' 1917', ' Antologia', 'La obra trata principalmente de la muerte, aunque toca otros temas como la humanización de los animales, siendo estos quienes junto a un pensamiento enteramente racional dirigen las respectivas historias. Pero aunque los animales portan raciocinio, este acaba con la fuerza bruta del hombre. Otro tema abordado es el de la deshumanización del hombre que cede su voluntad a los instintos más primitivos.', 3),
(6, ' Cuentos de la selva', 2, ' 1918', 'Literatura Infantil', 'La selva es el escenario y personaje omnipresente de estos cuentos. Por ese entonces, Quiroga decide abandonar la comodidad del ambiente urbano para instalarse en la selva misionera. Esta, con su violencia natural incontenible, frente al hombre, aliado a veces, destructor las más, de esa naturaleza salvaje. Quiroga quiso inventar un lenguaje selvático de América, en contraposición de la tendencia del común de los escritores a imitar las modas literarias de Europa.', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `fecha_nac` varchar(30) DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `pass`, `nombre`, `fecha_nac`, `mail`, `admin`) VALUES
(1, 'cla', '$2y$10$W08bqR7Dk0FrtXvAVMo26.ozKOaT9wZRckVC93vDgCOW2vO8oyT2C', 'clara', '28/01', 'clara@algo.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`,`id_autor`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
