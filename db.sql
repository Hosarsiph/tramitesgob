create database tramitesgeo;

use tramitesgeo;

create table registrobeca (

folio int auto_increment not null,
homoclave varchar(13) not null,
fechatramite date not null,
curp varchar (12) not null,
nombre varchar(40) not null,
appaterno varchar(40) not null,
apmaterno varchar(40) not null,
telefono int (12) not null,
extension int (4) not null,
telefonomovil int (10) not null,
email varchar (40) not null,
vialidad varchar (30) not null,
calle varchar (30) not null,
numeroexte int (4) not null,
numeinte int (4) not null,
codigopostal int (10) not null,
colonia varchar (30) not null,
municipio varchar (30) not null,
estado varchar (30) not null,
tipobeca varchar (30) not null,
cicloescolar  int (10) not null,
propedeutico varchar (20) not null,
especialidad varchar (20) not null,
maestria varchar (20) not null,
doctorado varchar (20)not null,
otrabeca varchar(2) not null,
otroingreso varchar(2) not null,
observaciones varchar(200)not null,
primary key (folio)
);


ArCh13#90
