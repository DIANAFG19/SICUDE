/*
creación 26/03/18 Luis Ivan Herrera Equihua
edición 29/03/18 LIHE añadir password a usuario alumno y coordinador


*/

use database sicudex1_sistema;

--Creación de tablas según DER
--Campos con autoincremento no tienen PK natural, es necesario asignarselas

create table alumno(
	no_cuenta varchar(9) primary key,
	correo varchar(60),
	telefono_casa varchar(10),
	telefono_cel varchar(10),
	fecha_nacimmiento date,
	nombre varchar(30),
	a_paterno varchar(30),
	a_materno varchar(30),
	id_horario varchar(10),
	id_doc integer,
	status_cta varchar(8),
	password varchar(30));

create table documentos(
	id_doc integer primary key not null auto_increment,
	no_cuenta integer varchar(9),
	id_credencial integer,
	id_horario integer,
	id_cert_medico integer,
	vigencia date,
	status_doc varchar(8)
	)

create table coordinador(
	no_cuenta integer(9) primary key not null,
	correo varchar(60),
	telefono_casa varchar(10),
	telefono_cel varchar(10),
	nombre varchar(30),
	a_paterno varchar(30),
	a_materno varchar(30),
	status_cta varchar(8),
	password varchar(30));

create table inscripciones(
	id_inscripcion integer primary key not null auto_increment,
	actividad integer,
	alumno varchar(9)
	);

create table actividad(
	id_actividad integer primary key not null auto_increment,
	nombre varchar(60),
	tipo varchar(10),
	coordinador integer(9),
	profesor varchar(9));

create table profesor(
	no_cuenta varchar(9) primary key not null,
	telefono_casa varchar(10),
	telefono_cel varchar(10),
	nombre varchar(30),
	a_paterno varchar(30),
	a_materno varchar(30),
	status_cta varchar(8));

create table clase(
	id_clase integer primary key not null auto_increment,
	actividad integer,
	salon varchar(5),
	hora_ini time,
	hora_fin time,
	dia varchar(8),
	fecha date);

create table salon(
	id_salon varchar(5) primary key not null,
	numero varchar(3),
	nivel varchar(1),
	edificio char(1));

create table asistencia(
	id_asistencia integer primary key not null auto_increment,
	clase integer,
	alumno varchar(9),
	retardo boolean,
	falta boolean);

/*
FKs son creadas en constraints 
para que las tablas puedan crearse sin
problemas.

La nomenglatura de los constraints es 
	constraint [tipo y numero de referencia entre tablas]_[tabla que referencía]_[tabla referenciada]

*/

alter table asistencia
	add constraint fk1_asistencia_clase
	foreign key (clase)
	references clase(id_clase);

alter table asistencia
	add constraint fk1_asistencia_alumno
	foreign key (alumno)
	references alumno(no_cuenta);

alter table clase
	add constraint fk1_clase_actividad
	foreign key (actividad)
	references actividad(id_actividad);

alter table clase
	add constraint fk1_clase_salon
	foreign key (salon)
	references salon(id_salon);

alter table actividad
	add constraint fk1_actividad_coordinador
	foreign key (coordinador)
	references coordinador(no_cuenta);

alter table actividad
	add constraint fk1_actividad_profesor
	foreign key (profesor)
	references profesor(no_cuenta);


alter table inscripciones
	add constraint fk1_inscripciones_alumno
	foreign key (alumno)
	references alumno(no_cuenta);

alter table actividad
	add constraint fk1_inscripciones_actividad
	foreign key (actividad)
	references actividad(id_actividad);

alter table alumno 
	add constraint fk1_alumno_doc
	foreign key (id_doc)
	references documentos(id_doc);

alter table documentos
	add constraint fk1_doc_alumno
	foreign key (no_cuenta)
	references documentos (no_cuenta);

