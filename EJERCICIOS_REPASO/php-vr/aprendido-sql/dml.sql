#INSERTAR NUEVOS REGISTROS#
insert into usuarios VALUES(null, 'Victor', 'Robles', 'victor@gmail.com', '1234', '2019-05-01');
insert into usuarios VALUES(null, 'Pedro', 'Lopez', 'pedro@gmail.com', '1234', '2019-06-02');
insert into usuarios VALUES(null, 'Silvia', 'Lopez', 'silvia@gmail.com', '1234', '2019-04-03');
insert into usuarios VALUES(null, 'Pepe', 'Viyuela', 'pepe@gmail.com', '1234', '2019-07-04');

#INSERTAR REGISTROS EN COLUMNAS ESPECIFICAS#
insert into usuarios (nombre, apellidos, email, password, fecha) VALUES('Juan', 'Garcia', 'juan@yahoo.es', '1234', '2019-08-05');

########################################################################
########################################################################
#CONSULTAS DE SELECCION#
select * from usuarios;
select email,nombre,apellidos from usuarios;

#OPERADORES ARITMETICOS#
select id,email, (id*3) as multiplicar_id from usuarios order by id DESC;

#FUNCIONES MATEMATICAS#
select round(7.913, 1) as operacion from usuarios;
select round(7.913, 0) as operacion from usuarios;
select TRUNCATE(7.913, 0) as operacion from usuarios;

#FUNCIONES DE TEXTOS#
select CONCAT(nombre, ' ', apellidos) as nombre_completo from usuarios;
select CONCAT(nombre, ' ', apellidos) as nombre_completo from usuarios where id = 1;
select UPPER(CONCAT(nombre, ' ', apellidos)) as nombre_completo from usuarios where id = 1 or id = 2;
select LOWER(CONCAT(nombre, ' ', apellidos)) as nombre_completo from usuarios where id = 1 or id = 2;
select email,LENGTH(CONCAT(nombre, ' ', apellidos)) as nombre_completo_longitud from usuarios;
select trim(concat('     ',nombre, ' ', apellidos,'             ')) as nombre_completo from usuarios;

#FUNCIONES DE FECHAS#
select CURDATE() as fecha_actual;
select NOW() as fecha_actual;
select CURTIME() as hora_actual;
select DAY(NOW()) as dia_actual;
select MONTH(NOW()) as mes_actual;
select YEAR(NOW()) as año_actual;
select DAYNAME(NOW()) as dia_semana_actual;
select DATE(NOW()) as fecha_actual;
select DATE_FORMAT(NOW(), '%d/%m/%Y') as fecha_actual;

########################################################################
########################################################################
#CONSULTAS CON UNA CONDICION#

SELECT * FROM usuarios WHERE email = 'pedro@gmail.com';

#EJEMPLOPS#
#1.Nombre y apellidos que tienen una fecha de registro en el year 2019#
select nombre, apellidos from usuarios where year(fecha) = 2019;

#2.Nombre y apellidos que tienen una fecha de registro en el year 2019, NEGATIVO#
select nombre, apellidos from usuarios where year(fecha) != 2019 OR ISNULL(fecha);

#3.Mostrar el email de los usuarios cuyo apellido contenga la letra A y que la password sea 1234#
select email from usuarios where apellidos LIKE '%a%' and password = '1234';

#4.Sacar todos los registros de la tabla usuarios cuyo year sea PAR#
select * from usuarios where year(fecha) % 2 = 0;

#5.Sacar todos los registros de la tabla usuarios cuyo year sea IMPAR#
select * from usuarios where year(fecha) % 2 != 0;

#6.Sacar todos los registros de la tabla usuarios nombre tenga mas de 5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayusculas
select UPPER(nombre) as nombre from usuarios where LENGTH(nombre) > 5 and year(fecha) < 2020;


########################################################################
########################################################################
#MODIFICAR FILAS/ ACTUALIZAR DATOS#
update usuarios set fecha='2019-08-21', apellidos ='Admin' where id = 1;

#BORRAR REGISTROS#
delete from usuarios where email='adming@admin.com';


