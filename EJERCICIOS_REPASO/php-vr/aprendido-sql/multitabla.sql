##################################################################
#####CONSULTAS MULTITABLA#####
##################################################################

#CONSULTAS SIN JOIN (MAS LENTAS)#
#Mostrar las entradas con el nombre del autor y el nombre de la categoria#
SELECT e.titulo, u.nombre, c.nombre FROM entradas e, usuarios u, categorias c WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#Mostrar el nombre de las categorias y al lado cuantas entradas tienen#
SELECT c.nombre, count(e.titulo) as 'numero de entradas' FROM entradas e, categorias c WHERE e.categoria_id = c.id GROUP BY c.nombre;

#Mostrar el email de los usuarios y al lado cuantas entradas tienen#
SELECT u.email, count(e.titulo) as 'numero de entradas' FROM entradas e, usuarios u WHERE e.usuario_id = u.id GROUP BY u.email;


##################################################################
#CONSULTAS CON JOIN (MAS RAPIDAS)#
#Mostrar las entradas con el nombre del autor y el nombre de la categoria#
SELECT e.titulo, u.nombre, c.nombre FROM entradas e INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;

#Mostrar el nombre de las categorias y al lado cuantas entradas tienen#
SELECT c.nombre, count(e.titulo) FROM categorias c LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY c.nombre;
SELECT c.nombre, count(e.titulo) FROM entradas e RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY c.nombre;