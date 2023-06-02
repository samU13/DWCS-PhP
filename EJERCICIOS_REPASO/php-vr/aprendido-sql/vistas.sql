################################################################
################################################################
#VISTAS MYSQL#
CREATE VIEW entradas_con_nombres AS SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;

show tables;

SELECT * FROM entradas_con_nombres;
SELECT * FROM entradas_con_nombres WHERE Autor = 'Pedro';

drop view entradas_con_nombres;
