
create database SanAgustinPrueba;
use SanAgustinPrueba;

create table student(
cedula int(5) not null primary key,
firstName varchar(50) not null,
secondName int(6) not null,
firstSurname varchar(20) not null,
secondSurname varchar(50) not null,
gender varchar(50) not null,
birthdate varchar(50) not null,
phone varchar(50) not null,
-- FOREIGN KEY (codproducto) REFERENCES producto(codproducto)
);

create table student(
cedula int(5) not null primary key,
firstName varchar(50) not null,
secondName int(6) not null,
firstSurname varchar(20) not null,
secondSurname varchar(50) not null,
gender varchar(50) not null,
birthdate varchar(50) not null,
phone varchar(50) not null,
adress varchar(50) not null
);

create table teacher(
cedula int(5) not null primary key,
firstName varchar(50) not null,
secondName int(6) not null,
firstSurname varchar(20) not null,
secondSurname varchar(50) not null,
gender varchar(50) not null,
birthdate varchar(50) not null,
phone varchar(50) not null,
adress varchar(50) not null
-- FOREIGN KEY (codproducto) REFERENCES producto(codproducto)
);

create table course(
id int(4) not null AUTO_INCREMENT primary key,
nameCourse int(20),
descripton int(6) not null,
creationDate varchar(20) not null
-- FOREIGN KEY (codproducto) REFERENCES producto(codproducto)
);


-- 4) Crear trigger triggermodifproducto
DELIMITER $$
CREATE TRIGGER triggermodifproducto
AFTER UPDATE ON producto
FOR EACH ROW

-- Momento de la ejecución: AFTER
BEGIN

-- Evento a ejecutar: UPDATE
insert into modifproducto (
codproducto,
precio_anterior,
fechaultima,
usuario,
fechacambio
) 
-- Cada vez que se modifique el precio del producto, el trigger debe insertar
values (
-- una fila en la tabla modifproducto, esta guardara el codigo del producto viejo,
old.codproducto, 
-- el precio del producto viejo
old.precio,
-- fechaultmoficacion_anterior
old.fechaActualizada,
-- el usuario que esta realizando la modificacion
current_user(),
-- y la fecha de la modificación
fechacambio = CURDATE()
);
-- finalzar con el trigger
END; $$
delimiter ;

-- Sobre la tabla: producto
-- 5) Mostrar los datos de las 2 tablas creadas previamente. Explique que sucede

select * from producto;
select * from modifproducto;

-- 6) Agragar 5 registros en tabla producto
-- arroz
insert into producto (codproducto, nomproducto, precio, fechaActualizada, stock) 
values (100, 'Arroz Mary', 25, '12-12-2022', 1000);

-- aceite
insert into producto (codproducto, nomproducto, precio, fechaActualizada, stock) 
values (200, 'aceite mazeite', 110, '10-12-2022', 500);

-- azucar
insert into producto (codproducto, nomproducto, precio, fechaActualizada, stock) 
values (300, 'Azucar', 35, '29-12-2022', 15000);

-- caraotas
insert into producto (codproducto, nomproducto, precio, fechaActualizada, stock) 
values (400, 'caraotas', 50, '12-01-2023', 1100);

-- pasta
insert into producto (codproducto, nomproducto, precio, fechaActualizada, stock) 
values (500, 'pasta italiana', 55, '30-11-2022', 500);


 -- +-------------+----------------+--------+--------------------+-------------+
 -- | codproducto | nomproducto    | precio | fechaultmoficacion |  existencia |
 -- +-------------+----------------+--------+--------------------+-------------+
 -- |         100 | Arroz Mary     | 25     | 12-12-2022         |  1000       |
 -- |         200 | Aceite Mazeite | 110    | 10-12-2022         |  500        |
 -- |         300 | Azucar         | 35     | 29-12-2022         |  15000      |
 -- |         400 | Caraotas       | 50     | 12-01-2023         |  1100       |
 -- |         500 | Pasta Italiana | 55     | 30-11-2022         |  500        |
 -- +-------------+----------------+--------+--------------------+-------------+

-- 7) Modificar el precio del producto
-- 7.1) codigo 300 con el valor 35
update producto
set precio = 100
where codproducto = 300;

-- 7.2) codigo 200 con el valor 100  
update producto
set precio = 100
where codproducto = 200;

-- 8) Mostrar los datos de las 2 tablas creadas previamente. Explique que sucede
select * from producto;
select * from modifproducto;

-- explicacion: el producto esta actualizando su precio y en ese mismo momento el trigger se dispara para agarrar esa informacion que se va a eliminar, es decir el precio anterior, lo agarra y lo inserta en la tabla modifproducto







