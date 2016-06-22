drop database if exists dbBlog;

create database dbBlog;
use dbBlog;

create table rol(

	id tinyint not null auto_increment,
	nombre varchar(20),
	constraint pkRol primary key(id)
);

insert into rol values(null, 'Administrador');
insert into rol values(null, 'Usuario Comun');

create table usuario(

	id int not null auto_increment,
	idRol tinyint,
	nick varchar(20),
	nombre varchar(50),
	clave varchar(50),
	constraint pkUser primary key(id),
	constraint fkRolUser foreign key(idRol) references rol(id)
);

create table post(

	id int not null auto_increment,
	idUsuario int,
	titulo varchar(23),
	texto text,
	fecha date,
	constraint pkPost primary key(id),
	constraint fkUserPost foreign key(idUsuario) references usuario(id)
);

create table calificacion(

	id int not null auto_increment,
	idAdmin int,
	idPost int,
	calificacion tinyint,
	constraint pkCalif primary key(id),
	constraint fkAdminCalif foreign key(idAdmin) references usuario(id),
	constraint fkPostCalif foreign key(idPost) references post(id)
);

