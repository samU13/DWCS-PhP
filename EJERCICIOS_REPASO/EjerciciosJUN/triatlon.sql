DROP TABLE IF EXISTS `licenza`;
CREATE TABLE IF NOT EXISTS `licenza` (
  `dni` varchar(9) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `apelidos` varchar(50) DEFAULT NULL,
  `enderezo` varchar(80) DEFAULT NULL,
  `poboacion` varchar(30) DEFAULT NULL,
  `provincia` varchar(30) DEFAULT NULL,
  `cp` varchar(30) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `mail` varchar(60) DEFAULT NULL,
    `data_nasc` DATE DEFAULT NULL, -- No puede ser mucho mayor
  `sexo` varchar(30) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL, -- IPv6 no puede tener mas de 45 caracteres
  `ingreso` TINYINT DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;