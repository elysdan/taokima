CREATE TABLE tbl_roles (
    id_rol          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descripcion             VARCHAR (100) NOT NULL UNIQUE KEY,
    created_at          DATETIME NULL,
    updated_at          DATETIME NULL,
    estado              VARCHAR (11)
)ENGINE=InnoDB;

INSERT INTO tbl_roles (descripcion, created_at, estado) VALUES ('ADMINISTRADOR', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado) VALUES ('ALUMNO', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado) VALUES ('CONSULTOR', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado) VALUES ('MASTER', '2024-04-23 17:11:15', '1');
INSERT INTO tbl_roles (descripcion, created_at, estado) VALUES ('REPRESENTANTE', '2024-04-23 17:11:15', '1');

CREATE TABLE tbl_usuarios (
    id_usuario          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres             VARCHAR (100) NOT NULL,
    nivel               VARCHAR (50) NOT NULL, /*Master, Sensei, Instructor, Aprendiz*/
    rol_id              INT (11) NOT NULL,
    email               VARCHAR (255) NOT NULL UNIQUE KEY,
    password            TEXT NOT NULL,
    created_at          DATETIME NULL,
    updated_at          DATETIME NULL,
    estado              VARCHAR (11),

FOREIGN KEY (rol_id) REFERENCES tbl_roles (id_rol) ON DELETE CASCADE ON UPDATE CASCADE

)ENGINE=InnoDB;

INSERT INTO tbl_usuarios (nombres, nivel, rol_id, email, password, created_at, estado)
VALUES ('Elys Daniel Martinez Zambrano', 'Aprendiz', 1, 'emartinez229@gmail.com', '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a', '2024-04-23 17:11:15', '1');
