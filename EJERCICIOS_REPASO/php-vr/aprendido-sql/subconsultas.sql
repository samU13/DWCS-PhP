INSERT INTO usuarios VALUES(NULL,'Admin','Admin','admin@admin.com','admin',CURDATE());
INSERT INTO entradas values(null, 1, 1, 'Review Warzone 2', 'Una puta mierda', CURDATE());
INSERT INTO categorias values(null, 'Estrategia');

#######################################################################
####SUBCONSULTAS########
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

#Sacar los usuariso que tengan alguna entrada en su titutlo que hable de COD#
SELECT nombre,apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%COD%');


#Sacara todas las entradas de la categoria accion#
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion');

#Mostrar las categorias con mas de 3 entradas#
SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING count(titulo) >= 3);

#Mostrar los usuarios que crearon una entrada el martes#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYNAME(fecha) = 'Thursday');


#Mostrar el nombre del usuario que tenga mas entradas#
SELECT nombre FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY count(titulo) DESC LIMIT 1);


#Mostrar las categorias sin entradas#
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);