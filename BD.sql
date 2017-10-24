create table docentes
(
	id bigserial not null,
	nombre text not null,
	paterno text not null,
	materno text,
	PRIMARY KEY(id)
);

﻿create table celulares
(
	id bigserial not null,
	nombre text not null,
	color text not null,
	tipo text not null,
	tamano text not null,
	peso text not null,
	descripcion text,
	created_at timestamp(0), 
	updated_at timestamp(0),
	PRIMARY KEY(id)
);
