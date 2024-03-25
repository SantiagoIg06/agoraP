create database agora2;
use agora2;



create table usuario (id int primary key auto_increment, nombre varchar(45) not null, apellido varchar (45) not null, correo varchar (100) not null, contraseña varchar (10) not null, fecha_nacimiento date);
create table rol (id int (11) primary key auto_increment, rol varchar (10),IdUsuario int, constraint fk_Usuario foreign key (idUsuario) references usuario (id) );
create table pais (id int primary key auto_increment, nombre_pais char (3)not null);
create table direccion (id int primary key auto_increment, codigo_postal int not null, idPais int,constraint fk_Pais foreign key (idPais) references Pais (id));
create table labores (id int primary key auto_increment, nombre_labores varchar (45)not null);
create table nivel_academico (id int primary key auto_increment, nivel varchar (45)not null);
create table nivel_estudios (id int primary key auto_increment, titulo varchar (50)not null, estado varchar (11) not null, idNivel_academico int, constraint fk_Nivel_academico foreign key (idNivel_academico) references Nivel_academico (id));
create table num_movil (id int primary key auto_increment, num_movil int not null);
create table empresa (id int primary key auto_increment,nom_empresa varchar (45)not null,idRol int,idDireccion int,idNumMovilEmp int, constraint fk_Direccion foreign key (idDireccion) references Direccion (id),constraint fk_rolEmp foreign key (idRol) references rol (id),constraint fk_numMovEmp foreign key (idNumMovilEmp) references num_movil (id));
create table postulacion (id int primary key auto_increment, informacion varchar (100) not null, xp char (1) not null,idNivel_estudios int,idRol int (11),idNumMovilUsu int, constraint fk_Nivel_estudios foreign key (idNivel_estudios) references Nivel_estudios (id),constraint fk_rolUsu foreign key (idRol) references rol (id),constraint fk_numMovUsu foreign key (idNumMovilUsu) references num_movil (id));
create table xp_laboral (id int primary key auto_increment,anos_experiencia int not null, idPostulacion int, idLabores int, constraint fk_Postulacion foreign key (idPostulacion) references Postulacion (id), constraint fk_Labores foreign key (idLabores) references Labores (id));


-- Llenar tabla 'usuario'
INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento) VALUES
('Juan', 'Pérez', 'juan@example.com', 'password1', '1990-05-15'),
('María', 'García', 'maria@example.com', 'password2', '1988-10-25'),
('Pedro', 'López', 'pedro@example.com', 'password3', '1995-03-08'),
('Andres', 'Hernandez', 'andres@example.com', 'password4', '1996-03-08'),
('Carlos', 'Jimenez', 'carlos@example.com', 'password5', '1986-05-04');

-- Llenar tabla 'rol'
INSERT INTO rol (rol, IdUsuario) VALUES
('User', 1),
('Emp', 2),
('Emp', 3),
('User', 4),
('User', 5);

-- Llenar tabla 'pais'
INSERT INTO pais (nombre_pais) VALUES
('USA'),
('UK'),
('GER'),
('FRA');

-- Llenar tabla 'direccion'
INSERT INTO direccion (codigo_postal, idPais) VALUES
(12345, 1),
(54321, 2),
(98765, 3),
(67890, 4);

-- Llenar tabla 'labores'
INSERT INTO labores (nombre_labores) VALUES
('Desarrollador'),
('Diseñador'),
('Gerente de Proyectos'),
('Analista de Datos');

-- Llenar tabla 'nivel_academico'
INSERT INTO nivel_academico (nivel) VALUES
('Bachillerato'),
('Tecnico'),
('Tecnologo'),
('Univesidad');

-- llenar tabla'nivel_estudios'
insert into nivel_estudios (titulo, estado,idNivel_academico) values
('Ingeniería Informática','cursando','4'),
('Programación Avanzada','completado','3'),
('Administración de Empresas','cursando','4');

-- Llenar tabla 'num_movil'
INSERT INTO num_movil (num_movil) VALUES
(1234567890),
(9876543210),
(5555555555),
(9816373237),
(7612638273);


-- Llenar tabla 'empresa'
INSERT INTO empresa (nom_empresa, idRol, idDireccion,idNumMovilEmp) VALUES
('Tech Solutions', 2, 1, 1),
('Creative Design', 3, 2, 2);

-- Llenar tabla 'postulacion'
INSERT INTO postulacion (informacion, xp, idNivel_estudios, idRol,IdNumMovilUsu) VALUES
('Experiencia en desarrollo web.', 'S', 1, 1,3),
('Experiencia en diseño gráfico.', 'S', 2, 4,4),
('Conocimiento en gestión de proyectos.', 'N', 3, 5, 5);


-- Llenar tabla 'xp_laboral'
INSERT INTO xp_laboral (anos_experiencia, idPostulacion, idLabores) VALUES
(5, 1, 1),
(3, 2, 2);


select * from usuario;
select * from rol;
select * from pais;
select * from direccion;
select * from labores;
select * from nivel_academico;
select * from nivel_estudios;
select * from empresa;
select * from postulacion;
select * from num_movil;
select * from xp_laboral;


-- VISTAS Y PROCEDIMIENTOS

/*Esta vista mostrará los detalles de los usuarios que son empresas, 
junto con los detalles de la empresa a la que están asociados*/

CREATE VIEW detalles_empresa AS
SELECT u.id, u.nombre AS nombre_usuario, u.apellido AS apellido_usuario, u.correo AS correo_usuario, u.fecha_nacimiento AS fecha_nacimiento_usuario,
       e.nom_empresa, e.idRol AS id_rol_empresa, e.idDireccion AS id_direccion_empresa, e.idNumMovilEmp AS id_num_movil_empresa
FROM usuario u
JOIN empresa e ON u.id = e.id;

select * from detalles_empresa;

/*Esta vista mostrará la experiencia laboral de los usuarios en base a sus postulaciones, 
incluyendo detalles de la experiencia y la labor asociada*/

CREATE VIEW experiencia_laboral_usuarios AS
SELECT xp.id, xp.anos_experiencia, xp.idPostulacion, xp.idLabores,
       p.informacion AS informacion_postulacion, p.xp AS experiencia_postulacion,
       l.nombre_labores
FROM xp_laboral xp
JOIN postulacion p ON xp.idPostulacion = p.id
JOIN labores l ON xp.idLabores = l.id;

select * from experiencia_laboral_usuarios;

/*Esta vista mostrará los detalles de los usuarios, 
incluyendo el país de su dirección y el nivel académico que poseen*/

CREATE VIEW detalles_usuario_pais_nivel AS
SELECT u.id, u.nombre, u.apellido, u.correo, u.fecha_nacimiento, p.nombre_pais AS pais, na.nivel AS nivel_academico
FROM usuario u
JOIN direccion d ON u.id = d.id
JOIN pais p ON d.idPais = p.id
JOIN nivel_estudios ne ON u.id = ne.id
JOIN nivel_academico na ON ne.idNivel_academico = na.id;

select * from detalles_usuario_pais_nivel;


/*Este procedimiento almacenado se encargará de insertar un nuevo usuario en la base de datos*/

DELIMITER //

CREATE PROCEDURE InsertarUsuario(
    IN p_nombre VARCHAR(45),
    IN p_apellido VARCHAR(45),
    IN p_correo VARCHAR(100),
    IN p_contraseña VARCHAR(100),
    IN p_fecha_nacimiento DATE
)
BEGIN
    INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento)
    VALUES (p_nombre, p_apellido, p_correo, p_contraseña, p_fecha_nacimiento);
END //

DELIMITER ;
CALL InsertarUsuario('carlos', 'Rincon', 'Rincon@example.com', 'password46533', '1999-01-01');

/*Este procedimiento permitirá insertar una nueva empresa en la base de datos*/
DELIMITER //

CREATE PROCEDURE InsertarEmpresa(
    IN p_nom_empresa VARCHAR(45),
    IN p_id_rol INT,
    IN p_id_direccion INT,
    IN p_id_num_movil INT
)
BEGIN
    INSERT INTO empresa (nom_empresa, idRol, idDireccion, idNumMovilEmp)
    VALUES (p_nom_empresa, p_id_rol, p_id_direccion, p_id_num_movil);
END //

DELIMITER ;
CALL InsertarEmpresa('Nueva Empresa', 2, 3, 4);


/*Este procedimiento permitirá actualizar la contraseña de un usuario específico dado su ID*/

DELIMITER //

CREATE PROCEDURE ActualizarContraseñaUsuario(
    IN p_id INT,
    IN p_nueva_contraseña VARCHAR(10)
)
BEGIN
    UPDATE usuario
    SET contraseña = p_nueva_contraseña
    WHERE id = p_id;
END //

DELIMITER ;

CALL ActualizarContraseñaUsuario(1, 'nuevacontraseña123');

-- FUNCIONES Y CONSULTAS

/*Esta función devuelve el nombre completo de un usuario dado su ID*/

DELIMITER //

CREATE FUNCTION ObtenerNombreCompletoUsuario(
    p_id INT
)
RETURNS VARCHAR(90)
BEGIN
    DECLARE nombre_completo VARCHAR(90);
    SELECT CONCAT(nombre, ' ', apellido) INTO nombre_completo
    FROM usuario
    WHERE id = p_id;
    RETURN nombre_completo;
END //
DELIMITER ;
SELECT id, ObtenerNombreCompletoUsuario(id) AS nombre_completo
FROM usuario;


/*Esta función verifica si un usuario tiene estudios universitarios basados en su nivel académico*/
DELIMITER //

CREATE FUNCTION UsuarioTieneEstudiosUniversitarios(
    p_id_usuario INT
)
RETURNS CHAR(1)
BEGIN
    DECLARE tiene_estudios CHAR(1);
    SELECT CASE
        WHEN EXISTS (SELECT 1 FROM nivel_estudios WHERE idNivel_academico = 4 AND id = p_id_usuario) THEN 'S'
        ELSE 'N'
    END INTO tiene_estudios;
    
    RETURN tiene_estudios;
END //

DELIMITER ;
SELECT id, UsuarioTieneEstudiosUniversitarios(id) AS tiene_estudios_universitarios
FROM usuario;

/*Esta función calcula el promedio de años de experiencia laboral de todos los usuarios*/
DELIMITER //

create function CalcularPromedioExperienciaLaboral()
returns decimal(10, 2)
begin
    declare promedio DECIMAL(10, 2);
    
    select avg(xp.anos_experiencia) INTO promedio
    from xp_laboral xp;
    
    return promedio;
end //

DELIMITER ;
SELECT CalcularPromedioExperienciaLaboral() AS promedio_experiencia_laboral;


select * from usuario
where id between 3 and 5;


select id, nom_empresa from empresa
where id  not between 1 and 2;

select nombre, fecha_nacimiento
from usuario;

-- DISPARADORES

DROP TABLE clave_anterior;

CREATE TABLE clave_anterior(Id INT PRIMARY KEY AUTO_INCREMENT, nombre VARCHAR(45) NOT NULL,
 apellido VARCHAR (45) NOT NULL, correo VARCHAR (50) NOT NULL,
 contraseña VARCHAR (10) NOT NULL);


DROP TRIGGER before_claves_update;


DELIMITER //
CREATE TRIGGER before_claves_update BEFORE UPDATE ON usuario FOR EACH ROW 
BEGIN
INSERT INTO clave_anterior(nombre, apellido, correo, contraseña) 
VALUES (OLD.nombre, OLD.apellido, OLD.correo, OLD.contraseña);
END //
DELIMITER ;


UPDATE usuario SET contraseña = '125lsi' WHERE Id = 2;


SELECT * FROM clave_anterior;

SELECT * FROM usuario;

-- actualizar  actualiza la fecha de nacimiento cada vez que se realiza una actualización en la tabla de usuario
CREATE TABLE fechaNacimiento_anterior(Id INT PRIMARY KEY AUTO_INCREMENT, nombre VARCHAR(45) NOT NULL,
 apellido VARCHAR (45) NOT NULL, correo VARCHAR (50) NOT NULL,
 fecha_nacimiento date NOT NULL);
 
 DELIMITER //
CREATE TRIGGER before_fechaNacimiento_update BEFORE UPDATE ON usuario FOR EACH ROW 
BEGIN
INSERT INTO fechaNacimiento_anterior(nombre, apellido, correo, fecha_nacimiento) 
VALUES (OLD.nombre, OLD.apellido, OLD.correo, OLD.fecha_nacimiento);
END //
DELIMITER ;

UPDATE usuario SET fecha_nacimiento = '1990-04-15' WHERE Id = 2;


SELECT * FROM fechaNacimiento_anterior;

SELECT * FROM usuario;


--
CREATE TABLE IF NOT EXISTS contrasena_logs (
Id INT PRIMARY KEY AUTO_INCREMENT, IdUsuario INT,
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP, mensaje VARCHAR(255)
);

DELIMITER //
CREATE TRIGGER after_insert_usuario
AFTER INSERT ON usuario
FOR EACH ROW
BEGIN
IF CHAR_LENGTH(NEW.contraseña) < 6 THEN
INSERT INTO contrasena_logs (IdUsuario, mensaje)
VALUES (NEW.Id, 'La contraseña debe tener al menos 6 caracteres');
END IF;
END;
//
DELIMITER ;


INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento) 
VALUES ('Jose', 'Gomez', 'joseG@email.com', '123ac', '1999-04-04');

SELECT * FROM contrasena_logs;

SELECT * FROM usuario;
