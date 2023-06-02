DROP DATABASE IF EXISTS blog;
CREATE DATABASE blog;
USE blog;

CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(255) NOT NULL,
    fecha date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)engine=InnoDB default charset=utf8mb4;

CREATE TABLE categorias(
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  CONSTRAINT pk_categorias PRIMARY KEY(id)
)engine=InnoDB default charset=utf8mb4;;

CREATE TABLE entradas(
  id INT(11) NOT NULL AUTO_INCREMENT,
  usuario_id INT(11) NOT NULL,
  categoria_id INT(11) NOT NULL,
  titulo VARCHAR(255) NOT NULL,
  descripcion MEDIUMTEXT,
  fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)engine=InnoDB default charset=utf8mb4;;