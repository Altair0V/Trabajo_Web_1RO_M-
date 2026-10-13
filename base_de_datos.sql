CREATE DATABASE IF NOT EXISTS trabajo_web;
USE trabajo_web;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    precio DECIMAL(10,2),
    imagen VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100),
    contrasena VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100),
    producto VARCHAR(100),
    cantidad INT,
    direccion VARCHAR(255)
);

INSERT INTO productos (nombre, precio, imagen) VALUES 
('Bombon de Chocolate', 15.00, 'choc1.jpeg'),
('Chocolate con Almendras', 20.00, 'choc2.jpeg'),
('Chocolate Amargo 70%', 18.00, 'choc3.jpeg'),
('Caja de Chocolatis', 50.00, 'choc4.jpeg'),
('Trufas de Cacao', 25.00, 'choc5.jpeg'),
('Chocolate Blanco', 12.00, 'choc6.jpeg');

INSERT INTO usuario (correo, contrasena) VALUES 
('harold', '1234'),
('alex', '2345'),
('maria', '3456');