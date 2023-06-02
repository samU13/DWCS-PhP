-- Active: 1683200696239@@127.0.0.1@3306@concesionario
/*
1. Modificar la comision de los vendedores y ponerla al 0.5% cuando gana mas de 5000€ y al 1% cuando gana menos de 5000€.
*/
UPDATE vendedores SET comision = 0.5 WHERE sueldo > 5000;

/*
2. Incrementar el precio de los coches en un dos por ciento.
*/
UPDATE coches SET precio = precio * 1.02;

/*
3. Sacar todos los vendedores cuya fecha de alta sea posterior al 1 de Julio de 2018
*/
SELECT * FROM vendedores WHERE fecha > '2018-07-01';

/*
4. Mostrar todos los vendedores con su nombre y el numero de dias que llevan en el concesionario.
*/
SELECT nombre, DATEDIFF(CURDATE(), fecha) AS dias FROM vendedores;

/*
5. Visualizar el nombre y los apellidos de los vendedores en una misma columna, su fecha de registro y el dia de la semana en la que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS nombre_completo, fecha, DAYNAME(fecha) AS dia_semana FROM vendedores;

/*
6. Mostrar el nombre y el salario de los vendedores con cargo de 'Ayudante de tienda' o 'Vendedor de recambios'
*/
SELECT nombre, sueldo FROM vendedores WHERE cargo = 'Ayudante en tienda' OR cargo = 'Vendedor de recambios';

/*
7. Visualizar todos los coches en cuya marca exista la letra "A" y cuyo modelo empiece por "F" 
*/
SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';

/*
8. Mostrar todos los vendedores del grupo numero 2, ordenados por salario de mayor a menor
*/
SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;

/*
9. Visualizar los apellidos de los vendedores, su fecha y su numero de grupo, ordenado por fecha descendente, mostrar los 4 ultimos registros
*/
SELECT apellidos, fecha, grupo_id FROM vendedores ORDER BY fecha DESC LIMIT 4;

/*
10. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo
*/
SELECT cargo, COUNT(*) AS numero_vendedores FROM vendedores GROUP BY cargo;

/*
11. Conseguir la masa salarial de concesionario (anual)
*/
SELECT SUM(sueldo) AS masa_salarial FROM vendedores;

/*
12. Sacar la media de sueldos entre todos los vendedores por grupo
*/
SELECT grupo_id, AVG(sueldo) AS media_sueldos FROM vendedores GROUP BY grupo_id;

/*
13. Visualizar las unidades totales vendidas de cada coche a cada cliente, mostrando el nombre del producto, numero de cliente y la suma de unidades.
*/
SELECT modelo, nombre, SUM(e.cantidad) AS unidades_vendidas FROM encargos e INNER JOIN coches c ON e.coche_id = c.id INNER JOIN clientes cl ON e.cliente_id = cl.id GROUP BY modelo, nombre;

/*
14. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron
*/
SELECT c.nombre, COUNT(e.id) FROM encargos e INNER JOIN clientes c ON c.id = e.cliente_id GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

/*
15. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
*/
SELECT c.nombre FROM clientes c INNER JOIN vendedores v ON c.vendedor_id = v.id WHERE v.nombre = 'Juan' AND v.apellidos = 'Lopez';

/*
16. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonio Inc'
*/
SELECT c.nombre, coches.modelo, e.cantidad FROM clientes c INNER JOIN encargos e ON c.id = e.cliente_id INNER JOIN coches ON e.coche_id = coches.id WHERE c.nombre = 'Fruteria Antonio Inc';
/*
17. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
*/
SELECT c.nombre FROM clientes c INNER JOIN encargos e ON c.id = e.cliente_id INNER JOIN coches ON e.coche_id = coches.id WHERE coches.modelo = 'Mercedes Ranchera';

/*
18.Obtener los vendedores con 2 o mas clientes.
*/
SELECT v.nombre, COUNT(c.id) AS numero_clientes FROM vendedores v INNER JOIN clientes c ON v.id = c.vendedor_id GROUP BY v.nombre HAVING COUNT(c.id) >= 2;

/*
19.Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo.
*/
SELECT * FROM grupos g INNER JOIN vendedores v ON g.id = v.grupo_id ORDER BY v.sueldo DESC LIMIT 1;

/*
20.Obtener los nombres y ciudades de los clientes con encargos
*/
SELECT c.nombre, c.ciudad FROM clientes c INNER JOIN encargos e ON c.id = e.cliente_id;

/*
21.Mostrar listado de clientes (numero de cliente y el nombre) mostrar tambien el numero de vendedor y su nombre.
*/
SELECT c.id, c.nombre, v.id, v.nombre FROM clientes c INNER JOIN vendedores v ON c.vendedor_id = v.id;

/*
22. Listar todos los encargos realizados con la marca del coche y el nombre del cliente.
*/
SELECT coches.marca, clientes.nombre FROM encargos INNER JOIN coches ON encargos.coche_id = coches.id INNER JOIN clientes ON encargos.cliente_id = clientes.id;

/*
23. Listar los encargos con el coche, el nombre del cliente y el nombre de la ciudad, pero unicamente cuando sean de 'Barcelona'
*/
SELECT coches.modelo, clientes.nombre, clientes.ciudad FROM encargos INNER JOIN coches ON encargos.coche_id = coches.id INNER JOIN clientes ON encargos.cliente_id = clientes.id WHERE clientes.ciudad = 'Barcelona';

/*
24. Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados  y el nombre del vendedor que los atiende.
*/
SELECT clientes.nombre, SUM(encargos.cantidad * coches.precio) AS importe, vendedores.nombre FROM encargos INNER JOIN coches ON encargos.coche_id = coches.id INNER JOIN clientes ON encargos.cliente_id = clientes.id INNER JOIN vendedores ON clientes.vendedor_id = vendedores.id GROUP BY clientes.nombre;

/*
25. Sacar los vendedores que tienen jefe y sacar el nombre del jefe
*/
SELECT v.nombre AS empleado , j.nombre AS jefe FROM vendedores v INNER JOIN vendedores j ON v.jefe = j.id;

/*
26. Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendo los que no hayan realizado ningun encargo.
*/
SELECT clientes.nombre, COUNT(encargos.id) AS numero_encargos FROM clientes LEFT JOIN encargos ON clientes.id = encargos.cliente_id GROUP BY clientes.nombre;

/*
27. Mostrar todos los vendedores y el numero de clientes. Se deben mostrtar tengan o no clientes.
*/
SELECT CONCAT(vendedores.nombre, ' ', vendedores.apellidos) AS nombre_completo, COUNT(clientes.id) AS numero_clientes FROM vendedores LEFT JOIN clientes ON vendedores.id = clientes.vendedor_id GROUP BY vendedores.nombre;

/*
28. Crear una vista llamada vendedoresA que incluira todos los vendedores del grupo que se llame 'Vendedores A'
*/
CREATE VIEW vendedoresA AS SELECT * FROM vendedores WHERE grupo_id = 1;
show tables;
select * from vendedoresA;

/*
29. Mostrar los datos del vendedor con mas antiguedad en el concesionario.
*/
SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*
30. Obtener los coches con mas unidades vendidas.
*/
SELECT * FROM coches where id in (select coche_id from encargos where cantidad in (select max(cantidad) from encargos));