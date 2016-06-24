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

insert into usuario values(null,'1','admi','administrador','123456');
insert into usuario values(null,'2','d','diego','123456');

create table post(

	id int not null auto_increment,
	idUsuario int,
	titulo varchar(23),
	texto text,
	fecha date,
    calificacion int,
	constraint pkPost primary key(id),
	constraint fkUserPost foreign key(idUsuario) references usuario(id)
);

insert into post values(null,'1','binvenidos','hola a todos con este post damos inicio al foro','2016-06-18','5');