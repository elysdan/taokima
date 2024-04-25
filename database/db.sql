CREATE TABLE tbl_usuarios (
    id_usuario          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres             VARCHAR (100) NOT NULL,
    nivel               VARCHAR (50) NOT NULL, /*Master, Sensei, Instructor, Aprendiz*/
    email               VARCHAR (255) NOT NULL UNIQUE KEY,
    password            TEXT NOT NULL,
    created_at          DATETIME NULL,
    updated_at          DATETIME NULL,
    estado              VARCHAR (11)
)ENGINE=InnoDB;

INSERT INTO tbl_usuarios (nombres, nivel, email, password, created_at, estado)
VALUES ('Elys Daniel Martinez Zambrano', 'Aprendiz', 'emartinez229@gmail.com', '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a', '2024-04-23 17:11:15', 'activo');


CREATE TABLE tbl_roles (
    id_rol          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descripcion             VARCHAR (100) NOT NULL UNIQUE KEY,
    created_at          DATETIME NULL,
    updated_at          DATETIME NULL,
    estado              VARCHAR (11)
)ENGINE=InnoDB;

INSERT INTO tbl_roles (descripcion, created_at, estado)
VALUES ('ADMINISTRADOR', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado)
VALUES ('ALUMNO', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado)
VALUES ('CONSULTOR', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado)
VALUES ('MASTER', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado)
VALUES ('REPRESENTANTE', '2024-04-23 17:11:15', '1');