use proyecto;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(30),
    contra VARCHAR(30),
    PRIMARY KEY (id)
);

Insert into usuarios(id,nombre,contra) values(1,'david','root');
Insert into usuarios(id,nombre,contra) values(2,'miguel','root');
Insert into usuarios(id,nombre,contra) values(3,'laura','root');
Insert into usuarios(id,nombre,contra) values(4,'alex','root');
Insert into usuarios(id,nombre,contra) values(5,'ernesto','root');