create database SanAgustinPrueba;
use SanAgustinPrueba;

create table payment(
id int(4) not null AUTO_INCREMENT primary key,
datePayment int(10) not null,
statusPayment int(1) not null
);

create table student(
cedula int(8) not null primary key, --* ID
firstName varchar(30) not null,
secondName varchar(30),
firstSurname varchar(30) not null,
secondSurname varchar(50),
gender int(1) not null,
birthdate varchar(10) not null,
adress varchar(50) not null,
phone int(50)
);

create table parent(
cedula int(8) not null primary key,
firstName varchar(30) not null,
secondName varchar(30) not null,
firstSurname varchar(30) not null,
secondSurname varchar(30) not null,
gender int(1) not null,
birthdate varchar(10) not null,
phone varchar(11) not null,
student int(4)not null,
FOREIGN KEY (student) REFERENCES student(cedula)
);


create table course(
id int(4) not null AUTO_INCREMENT primary key,
nameCourse varchar(20) not null,
descripton varchar(512),
creationDate varchar(10) not null,
cost int(6) not null,
place varchar(20) not null
);

create table levelCourse(
id int(4) not null AUTO_INCREMENT primary key,
levelCourse int(4) not null,
approbation int(1) not null,
course int(4)not null,
courseBefore int(4)not null,
FOREIGN KEY (course) REFERENCES course(id),
FOREIGN KEY (courseBefore) REFERENCES levelCourse(id)
);

create table teacher(
cedula int(8) not null primary key,
firstName varchar(30) not null,
secondName varchar(30),
firstSurname varchar(30) not null,
secondSurname varchar(30),
gender int(1) not null,
birthdate varchar(10) not null,
phone varchar(11),
adress varchar(50) not null,
levelCourse int(4)not null,
FOREIGN KEY (levelCourse) REFERENCES levelCourse(id)
);


create table signup(
id int(4) not null AUTO_INCREMENT primary key,
dateSignup int(10) not null,
course int(4)not null,
student int(4)not null,
payment int(4)not null,
FOREIGN KEY (course) REFERENCES course(id),
FOREIGN KEY (student) REFERENCES student(cedula),
FOREIGN KEY (payment) REFERENCES payment(id)
);

insert into student (cedula, firstName, secondName, firstSurname, secondSurname, gender, birthdate, adress, phone) 
values (28563229, 'geferson', 'leonaiker', 'moreno', 'palacions', 1, '04/04/2001', 'caracas', 41);
--* ALL IS OK!












































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







