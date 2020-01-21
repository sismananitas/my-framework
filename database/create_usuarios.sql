
-- TABLA USUARIOS
CREATE TABLE usuarios (
    `id`       INT(255) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(200) NOT NULL UNIQUE,
    `password` VARCHAR(200) NOT NULL,
    `email`    VARCHAR(200) NULL UNIQUE,
    `status`   VARCHAR(100) NOT NULL DEFAULT 'inactivo',
    `rol`      VARCHAR(100) NOT NULL DEFAULT 'invitado',
    `date`     DATE NOT NULL,
    CONSTRAINT `pk_usuario` PRIMARY KEY(`id`)
) Engine=InnoDB;