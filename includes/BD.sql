
CREATE DATABASE IS3_maldonado_jose;

CREATE TABLE usuario (
    usu_id SERIAL PRIMARY KEY,
    usu_nombre VARCHAR(50),
    usu_codigo INTEGER,
    usu_password VARCHAR(150),
    usu_situacion SMALLINT DEFAULT 1
);

CREATE TABLE aplicacion (
    app_id SERIAL PRIMARY KEY,
    app_nombre VARCHAR(75),
    app_situacion SMALLINT DEFAULT 1
);

CREATE TABLE rol (
    rol_id SERIAL PRIMARY KEY,
    rol_nombre VARCHAR(75),
    rol_nombre_ct VARCHAR(25),
    rol_app INTEGER,
    rol_situacion SMALLINT DEFAULT 1,
    FOREIGN KEY (rol_app) REFERENCES aplicacion(app_id)
);

CREATE TABLE permiso (
    permiso_id SERIAL PRIMARY KEY,
    permiso_usuario INTEGER,
    permiso_rol INTEGER,
    permiso_situacion SMALLINT DEFAULT 1,
    FOREIGN KEY (permiso_usuario) REFERENCES usuario(usu_id),
    FOREIGN KEY (permiso_rol) REFERENCES rol(rol_id)
);

CREATE TABLE lluvias (
    lluv_id SERIAL PRIMARY KEY,
    lluv_comando INTEGER,
    lluv_dependencia VARCHAR(150),
    lluv_departamento VARCHAR (150),
    lluv_critica VARCHAR(75),
    lluv_radio VARCHAR(75),
    lluv_fecha DATETIME YEAR TO SECOND,
    lluv_situacion VARCHAR(50),
    FOREIGN KEY (lluv_comando) REFERENCES usuario(usu_id)
);

INSERT INTO usuario (usu_nombre, usu_codigo, usu_password) VALUES 
('JOSE MALDONADO', 650061, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');
INSERT INTO usuario (usu_nombre, usu_codigo, usu_password) VALUES 
('RODRIGO MORALES', 650062, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');
INSERT INTO usuario (usu_nombre, usu_codigo, usu_password) VALUES 
('JUAN OCHAETA', 650063, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');
INSERT INTO usuario (usu_nombre, usu_codigo, usu_password) VALUES 
('ERNESTO CALDERON', 650064, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');
INSERT INTO usuario (usu_nombre, usu_codigo, usu_password) VALUES 
('RICARDO MAYO', 650065, '$2y$10$Nz6/ESQw7b7xW1Q2j.WEM.g5LQ/NSSmHnhZpfolFAH.ltD0GGRKGS');
SELECT * FROM usuario
INSERT INTO aplicacion (app_nombre) VALUES ('lluvias');

INSERT INTO rol (rol_nombre, rol_nombre_ct, rol_app) VALUES 
('USUARIO COMANDO', 'COMANDO', 1);
INSERT INTO rol (rol_nombre, rol_nombre_ct, rol_app) VALUES 
('USUARIO D5', 'D5', 1);
INSERT INTO rol (rol_nombre, rol_nombre_ct, rol_app) VALUES 
('USUARIO ADMINISTRADOR', 'ADMINISTRADOR', 1);

INSERT INTO permiso (permiso_usuario, permiso_rol) VALUES 
(1, 1);
INSERT INTO permiso (permiso_usuario, permiso_rol) VALUES 
(2, 2);
INSERT INTO permiso (permiso_usuario, permiso_rol) VALUES 
(3, 3);
INSERT INTO permiso (permiso_usuario, permiso_rol) VALUES 
(4, 1);
INSERT INTO permiso (permiso_usuario, permiso_rol) VALUES 
(5, 1);

CREATE TABLE lluvias (
    lluv_id SERIAL PRIMARY KEY,
    lluv_comando INTEGER,
    lluv_dependencia VARCHAR(150),
    lluv_departamento VARCHAR (150),
    lluv_critica VARCHAR(75),
    lluv_radio VARCHAR(75),
    lluv_fecha DATETIME YEAR TO SECOND,
    lluv_situacion VARCHAR(50),
    FOREIGN KEY (lluv_comando) REFERENCES usuario(usu_id)
);

INSERT INTO lluvias (lluv_comando, lluv_dependencia, lluv_departamento, lluv_critica, lluv_radio, lluv_fecha, lluv_situacion)
VALUES 
(1, 'COMANDO ALFA', 'PETEN', '16.9177, -89.8925', '16.9500, -89.8500', '2024-09-18 10:30:00', 'FINALIZADO');

INSERT INTO lluvias (lluv_comando, lluv_dependencia, lluv_departamento, lluv_critica, lluv_radio, lluv_fecha, lluv_situacion)
VALUES 
(4, 'COMANDO BRAVO', 'ALTA VERAPAZ', '15.4667, -90.3700', '15.4900, -90.3300', '2024-09-19 14:45:00', 'EN PROCESO');

INSERT INTO lluvias (lluv_comando, lluv_dependencia, lluv_departamento, lluv_critica, lluv_radio, lluv_fecha, lluv_situacion)
VALUES 
(5, 'COMANDO CHARLIE', 'QUETZALTENANGO', '14.8340, -91.5180', '14.8500, -91.5000', '2024-09-20 09:20:00', 'FINALIZADO');

SELECT usu_nombre, lluv_dependencia, lluv_departamento, lluv_critica, lluv_radio, lluv_fecha,
 lluv_situacion
FROM lluvias, usuario 
WHERE lluv_comando = usu_id;

SELECT usu_nombre, COUNT(lluv_comando) AS lluvias
                    FROM lluvias
                    INNER JOIN usuario ON usu_id = lluv_comando
                    GROUP BY usu_nombre
                    ORDER BY lluvias DESC;
                    
                    SELECT usu_nombre, COUNT(lluv_comando) AS lluvias
                    FROM lluvias
                    INNER JOIN usuario ON usu_id = lluv_comando
                    GROUP BY usu_nombre
                    ORDER BY lluvias DESC
                    
                    SELECT * FROM lluvias

-- USUARIO COMANDO:
-- 650061
-- 650064
-- 650065
-- USUARIO D5:
-- 650062
-- USUADIO ADMINISTRADOR:
-- 650063
-- CONTRASEÑA PARA TODOS:
-- 123456