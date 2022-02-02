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

insert into actividades(nombre,descripcion,plazas_disponibles) values
("zumba","dale a tu cuerpo lo que se merece con nuestro profesor de zumba el doctor zumbao ","20"),
("Spining","es como hacer ciclismo pero sin moverte. Que puede salir mal?","30"),
("Prama","no se lo que es pero suena a algo sano que seguramente te venga bien","10"),
("pilates","Eres un padre tinerfenyo, divorciado, miope? Entonces esta actividad es para ti","25"),
("Body combat","body combat","16");
-- nombre, id, dias, plazas disponibles....

create table complementos(
id int primary key not null auto_increment,
nombre varchar(30) not null,
tipo varchar(30) not null,
precio decimal not null,
stock int,
descripcion varchar(100)
);

insert into complementos(nombre, precio,descripcion, stock,  tipo) values
("proteinas","35","proteinas","11","chocolate"),
("proteinas","35","proteinas","11","vainilla"),
("proteinas","35","proteinas","11","oreo"),
("barritas","1.5","barritas","11","chocolate"),
("barritas","1.5","barritas","11","caramelo"),
("barritas","1.5","barritas","11","cereales"),
("bebida energetica","2","bebidas energeticas","11","mango"),
("bebida energetica","2","bebidas energeticas","11","red bull"),
("bebida energetica","2","bebidas energeticas","11","lima"),
("BCA's","15","BCA's","11","cereza"),
("BCA's","15","BCA's","11","neutro"),
("BCA's","15","BCA's","11","pinya"),
("Aminoacidos","20","Aminoacidos","11","frutas del bosque"),
("Aminoacidos","20","Aminoacidos","11","manzana"),
("Aminoacidos","20","Aminoacidos","11","mango"),
("Creatina ","25","Creatina ", "11", "cereza"),
("Creatina ","25","Creatina ", "11", "neutra"),
("Creatina ","25","Creatina ", "11", "lima");
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
