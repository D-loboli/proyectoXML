create database dbBlog;
use dbBlog;

create table rol(

	id tinyint not null auto_increment,
	nombre varchar(20),
	constraint pkRol primary key(id)
);

insert into rol values(null, 'Administrador');
insert into rol values(null, 'Usuario Comun');

create table tipoError(

	id tinyint not null auto_increment,
	nombre varchar(30),
	constraint pkTipoError primary key(id)
);

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

create table error(
	id int not null auto_increment,
	idTipo tinyint,
	mensaje varchar(100),
	fecha date,
	constraint pkError primary key(id),
	constraint fkTipoError foreign key(idTipo) references tipoError(id)
);

DELIMITER //

create function getPrivilegio(nick varchar(20), clave varchar(50)) returns tinyint

begin 

	declare retorno tinyint;
	declare cantidadUsuarios int;

	set cantidadUsuarios = (select count(id) from usuario where usuario.nick = nick and usuario.clave = clave);

	if cantidadUsuarios > 0 then
		set retorno = (select idRol from usuario where usuario.nick = nick);
	
	else
		set retorno = 0;

	end if;
	
	return retorno;
end
