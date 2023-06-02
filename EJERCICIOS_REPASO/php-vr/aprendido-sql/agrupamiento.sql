#INSERTS CATEGORIA#
INSERT INTO categorias values(null, 'Accion');
INSERT INTO categorias values(null, 'Aventura');
INSERT INTO categorias values(null, 'Plataformas');
INSERT INTO categorias values(null, 'Deportes');

#INSERTS ENTRADAS#
INSERT INTO entradas values(null, 1, 1, 'Review COD', 'Descripcion de la entrada de prueba', CURDATE());
INSERT INTO entradas values(null, 1, 2, 'Noticias Grim Fandango', 'Descripcion de la entrada de prueba 2', CURDATE());
INSERT INTO entradas values(null, 1, 3, 'Guia Super Mario', 'Descripcion de la entrada de prueba 3', CURDATE());
INSERT INTO entradas values(null, 1, 4, 'Vaya mierda el FIFA', 'Descripcion de la entrada de prueba 4', CURDATE());
INSERT INTO entradas values(null, 2, 1, 'Review DOOM', 'Descripcion de la entrada de prueba 5', CURDATE());
INSERT INTO entradas values(null, 2, 2, 'Analisis Monkey Island', 'Descripcion de la entrada de prueba 6', CURDATE());
INSERT INTO entradas values(null, 2, 3, 'Nuevo Sonic', 'Descripcion de la entrada de prueba 7', CURDATE());
INSERT INTO entradas values(null, 2, 4, 'El viejo PRO EVO', 'Descripcion de la entrada de prueba 8', CURDATE());
INSERT INTO entradas values(null, 3, 1, 'Trucos OW2', 'Descripcion de la entrada de prueba 9', CURDATE());
INSERT INTO entradas values(null, 3, 2, 'Analisis Amnesia', 'Descripcion de la entrada de prueba 10', CURDATE());
INSERT INTO entradas values(null, 3, 3, 'Nuevo Crash Bandicot', 'Descripcion de la entrada de prueba 11', CURDATE());
INSERT INTO entradas values(null, 3, 4, 'Lo nuevo de NFL', 'Descripcion de la entrada de prueba 12', CURDATE());
INSERT INTO entradas values(null, 4, 1, 'Review COD', 'Descripcion de la entrada de prueba 13', CURDATE());



#################################################################################
#################################################################################
#CONSULTAS DE AGRUPAMIENTO#
SELECT titulo from entradas GROUP BY categoria_id;
select count(titulo) as 'numero de entradas', categoria_id from entradas group by categoria_id;

#CONSULTAS DE AGRUPAMIENTO CON CONDICION#
select count(titulo) as 'numero de entradas', categoria_id from entradas group by categoria_id HAVING count(titulo) >= 3;

#FUINCIONES AGRUPAMIENTO#
SELECT AVG(id) as 'media de entradas' from entradas;
SELECT MAX(id) as 'maximo de entradas',titulo from entradas;
SELECT MIN(id) as 'minimo de entradas',titulo from entradas;
SELECT SUM(id) as 'suma de entradas',titulo from entradas;
