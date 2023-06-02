# EMS MySQL Manager Pro 2.8.7.3
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : bd_axenda


SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `prol_axenda`;

USE `prol_axenda`;

CREATE TABLE `axenda` (
  `id` int(11) NOT NULL auto_increment,
  `nome` char(50) NOT NULL default '',
  `telefono` char(9) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `axenda` (`id`, `nome`, `telefono`) VALUES 
  (1,'LUIS RODRÍGUEZ','982241236'),
  (2,'ANGELES LÓPEZ','981348900'),
  (3,'MANUEL DIAZ','982217856'),
  (4,'FELIX MENDEZ','982252525'),
  (5,'LUIS FERNANDEZ','122334434');


/* concesión de permisos ao usuario dam coa contrasinal dambd08 dende localhost sobre a base de datos prol_videoteca
Se o usuario non existe, créao*/
GRANT SELECT, INSERT, UPDATE, DELETE ON prol_axenda.* TO 'dam'@'localhost' IDENTIFIED BY 'dambd08'; 

