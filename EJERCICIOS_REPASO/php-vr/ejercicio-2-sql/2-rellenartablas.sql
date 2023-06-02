#RELLENAR LA BASE DE DATOS CON INSERTS#

#COCHES#

INSERT INTO coches VALUES (NULL, 'Audi', 'A3', 20000, 13);
INSERT INTO coches VALUES (NULL, 'Renault', 'Renault Clio', 25000, 80);
INSERT INTO coches VALUES (NULL, 'Mercedes Benz', 'Mercedes Ranchera', 30000, 24);
INSERT INTO coches VALUES (NULL, 'Porche', 'Porche Cayene', 35000, 5);
INSERT INTO coches VALUES (NULL, 'Lambo', 'Lamborgini', 40000, 11);
INSERT INTO coches VALUES (NULL, 'Ferrari', 'Ferrari Spider', 45000, 2);
INSERT INTO coches VALUES (NULL, 'Nissan', 'N3', 50000, 5);
INSERT INTO coches VALUES (NULL, 'Volkswagen', 'Buzz GTX', 55000, 10);

#GRUPOS#
insert into grupos values(null,'Vendedores A','Madrid');
insert into grupos values(null,'Vendedores B','Madrid');
insert into grupos values(null,'Directores mecanicos','Madrid');
insert into grupos values(null,'Vendedores A','Barcelona');
insert into grupos values(null,'Vendedores B','Barcelona');
insert into grupos values(null,'Vendedores C','Valencia');
insert into grupos values(null,'Vendedores A','Bilbao');
insert into grupos values(null,'Vendedores B','Pamplona');
insert into grupos values(null,'Vendedores C','Santiago de Compostela');

#VENDEDORES#

insert into vendedores values(null,1,null,'Juan','Lopez','Responsable de tienda',CURDATE(),3000,4);
insert into vendedores values(null,1,1,'Fran','Martinez','Ayudante en tienda',CURDATE(),2300,2);
insert into vendedores values(null,2,null,'Nelson','Sanchez','Responsable de tienda',CURDATE(),3800,6);
insert into vendedores values(null,2,3,'Jesus','Perez','Ayudante de tienda',CURDATE(),1200,3);
insert into vendedores values(null,3,null,'David','Lopez','Mecanico jefe',CURDATE(),50000,8);
insert into vendedores values(null,4,null,'Victor','Lopez','Vendedor de recambios',CURDATE(),3000,4);
insert into vendedores values(null,5,null,'Antonio','Lopez','Vendedor experto',CURDATE(),6000,2);
insert into vendedores values(null,6,null,'Salvador','Perez','Ejecutivo de cuentas',CURDATE(),80000,25);
insert into vendedores values(null,6,8,'Luis','Perez','Ayudante en tienda',CURDATE(),1000,10);

#CLIENTES#

insert into clientes values(null,1,'Construcciuones Diaz Inc','Alcobendas',24000, CURDATE());
insert into clientes values(null,1,'Fruteria Antonio Inc','Fuenlabrada',24000, CURDATE());
insert into clientes values(null,1,'Imprenta Martinez Inc','Barcelona',24000, CURDATE());
insert into clientes values(null,1,'Jesus Colchones Inc','El PRat',24000, CURDATE());
insert into clientes values(null,1,'Bar Manolo Inc','Valencia',24000, CURDATE());
insert into clientes values(null,1,'PcTienda Inc','Murcia',24000, CURDATE());
insert into clientes values(null,3,'PcBox Inc','Ourense',242000, CURDATE());
insert into clientes values(null,2,'Patacas Pereiro Inc','Lugo',334000, CURDATE());
insert into clientes values(null,5,'Peps Inc','Tenerife',14000, CURDATE());


#ENCARGOS#

insert into encargos values(null,1,1,2,CURDATE());
insert into encargos values(null,2,2,4,CURDATE());
insert into encargos values(null,3,3,1,CURDATE());
insert into encargos values(null,4,3,3,CURDATE());
insert into encargos values(null,5,5,1,CURDATE());
insert into encargos values(null,6,6,1,CURDATE());
insert into encargos values(null,4,4,3,CURDATE());