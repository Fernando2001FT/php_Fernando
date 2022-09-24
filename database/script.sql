CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE Tareas(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  descripcion TEXT,
  fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE Tareas;
