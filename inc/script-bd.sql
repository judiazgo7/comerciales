CREATE DATABASE IF NOT EXISTS comerciales;

USE comerciales;

CREATE TABLE Usuario(
NumUsuario int (255) AUTO_INCREMENT NOT NULL,
NombreUsuario varchar(50),
Correo varchar (150),
Contrasena varchar(50),
PRIMARY KEY(NumUsuario)
) ENGINE=innodb;

CREATE TABLE CenComercial(
NumCenCom int (255) AUTO_INCREMENT NOT NULL,
Nombre varchar (150),
Direccion varchar (150),
Link varchar (500),
PRIMARY KEY (NumCenCom)
) ENGINE=innodb;

CREATE TABLE Comentarios (
NumUsuario int (255),
NumCenCom int (255),
comentario varchar (500),
puntaje int (6),
FOREIGN KEY(NumUsuario) REFERENCES Usuario(NumUsuario),
FOREIGN KEY(NumCenCom) REFERENCES CenComercial (NumCenCom)
ON DELETE CASCADE ON UPDATE CASCADE        
) ENGINE=innodb;

INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('MULTIPLAZA', 'Avenida Boyacá #13', 'https://www.multiplaza.com/bogota');
INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('PLAZA DE LAS AMERICAS', 'Cra. 71d #6 - 94 Sur', 'https://plazadelasamericas.com.co/');
INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('GRAN ESTACION', 'Av. Calle 26 #62 - 47', 'https://www.granestacion.com.co/');
INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('HAYUELOS', 'Cl. 20 #82 - 52', 'https://www.hayueloscc.com/');
INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('PLAZA CENTRAL', 'Cra. 65 #11 - 50', 'https://ccplazacentral.com/');
INSERT INTO CenComercial (Nombre, Direccion, Link) VALUES ('MALLPLAZA', 'Avenida Carrera 30 #19', 'https://www.mallplaza.com/');
