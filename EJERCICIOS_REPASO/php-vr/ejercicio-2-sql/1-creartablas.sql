-- Active: 1683200696239@@127.0.0.1@3306@concesionario
/*
1.Crear la base de datos de un concesionario.
*/

CREATE DATABASE IF NOT EXISTS concesionario;

/*
2.Crear las tablas de dicho concesionario, con sus correspondientes claves primarias y
foráneas si fuese necesario.
*/

USE concesionario;

CREATE TABLE coches(
    id INT(10) AUTO_INCREMENT not null,
    marca VARCHAR(50),
    modelo VARCHAR(50) NOT NULL,
    precio int(20) NOT NULL,
    stock int(255) NOT NULL,
    constraint pk_coche primary key (id)
)engine=innodb;

create table grupos(
    id int(10) auto_increment not null,
    nombre varchar(100) not null,
    ciudad varchar(100),
    constraint pk_grupos primary key (id)
)engine=innodb;

create table vendedores(
    id int (10) auto_increment not null,
    grupo_id int(10) not null,
    jefe int(10),
    nombre varchar(100) not null,
    apellidos varchar(100),
    cargo varchar(50),
    fecha date,
    sueldo float(20,2),
    comision float(10,2),
    constraint pk_vendedores primary key (id),
    constraint fk_vendedores_grupos foreign key (grupo_id) references grupos(id),
    constraint fk_vendedores_vendedores foreign key (jefe) references vendedores(id)
)engine=innodb;

create table clientes(
    id int(10) auto_increment not null,
    vendedor_id int(10),
    nombre varchar(100) not null,
    ciudad varchar(100),
    gastado float(50,2),
    fecha date,
    constraint fk_clientes_vendedores foreign key (vendedor_id) references vendedores(id),
    constraint pk_clientes primary key (id)
    )engine=innodb;

create table encargos(
    id int(10) auto_increment not null,
    cliente_id int(10) not null,
    coche_id int(10) not null,
    cantidad int(100),
    fecha date,
    constraint pk_encargos primary key (id),
    constraint fk_encargos_clientes foreign key (cliente_id) references clientes(id),
    constraint fk_encargos_coche foreign key (coche_id) references coches(id)
)engine=innodb;