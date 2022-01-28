-- cuando se vaya a actualizar primero se ejecuta el drop
drop database if exists GYMED;

-- esto es el grueso
create database GYMED;

use GYMED;

create table usuarios(
id int primary key not null auto_increment,
correo varchar(50) unique,
nombre varchar(20) not null,
apellidos varchar(40) ,
hash_pwd varchar(200),
dni varchar(9) unique
);
-- los usuarios de prueba sera admin y usuario, sus pass son igual que sus nombres
insert into usuarios (correo,nombre, apellidos, hash_pwd,dni) values
("admin@admin.com","admin","","21232f297a57a5a743894a0e4a801fc3","99999999Y"), 
("usuario@usuario.com","usuario","usuario","f8032d5cae3de20fcec887f395ec9a6a","11111111Y");

	-- nombre,actividades, apellido, id, dni, hash...
create table actividades(
id int primary key not null auto_increment,
nombre varchar(30) not null,
descripcion varchar(100),
plazas_disponibles int not null
);

-- nombre, id, dias, plazas disponibles....

create table complementos(
id int primary key not null auto_increment,
nombre varchar(30) not null,
precio decimal not null,
stock int,
descripcion varchar(100)
);

-- nombre, id , precio, stock(unidades), descripcion...


create table servicios(
id int primary key not null auto_increment,
nombre varchar(30) not null,
descripcion varchar(100),
estado boolean not null -- false no esta disponible, true esta disponible
);

-- nombre, estado, descripcion, id...
create table reservas(
id int primary key not null auto_increment,
dia_hora timestamp not null,
comentario varchar(100),
actividad_id int,
usuario_id int,  
constraint fk_usuario_reserva foreign key (usuario_id) references usuarios(id) on delete cascade,
constraint fk_actividad_reserva foreign key (actividad_id) references actividades(id) on delete cascade
);
-- usuario,id, diayhora, comentario...
