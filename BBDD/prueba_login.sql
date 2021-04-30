
-- Volcando estructura de base de datos para prueba_login
CREATE DATABASE IF NOT EXISTS `prueba_login` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `prueba_login`;

-- Volcando estructura para tabla prueba_login.login
CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) NOT NULL,
  `nombre_usuario` varchar(60) NOT NULL,
  `clave` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo` varchar(70) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  UNIQUE KEY `correo` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla prueba_login
INSERT INTO `login` (`id_user`, `nombre_completo`, `nombre_usuario`, `clave`, `email`, `tipo`) VALUES
	(1, 'Sandor Luque Farfan', 'administrador', 'e10adc3949ba59abbe56e057f20f883e', 'administrador@administrador.com', 'admin'),
	(10, 'Pedro Buitrago', 'pedrito', 'e10adc3949ba59abbe56e057f20f883e', 'pedrito@pedrito.com', 'user');
