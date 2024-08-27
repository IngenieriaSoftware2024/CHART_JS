CREATE TABLE productos(
    producto_id INT AUTO_INCREMENT PRIMARY KEY,
    producto_nombre VARCHAR(200),
    producto_precio DECIMAL(10, 2),
    producto_situacion SMALLINT DEFAULT 1
);

CREATE TABLE clientes(
    cliente_id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_nombre VARCHAR(50),
    cliente_situacion SMALLINT DEFAULT 1
);

create table ventas (
    venta_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    venta_fecha DATETIME NOT NULL,
    venta_cliente INTEGER,
    venta_situacion SMALLINT DEFAULT 1 NOT NULL,
    FOREIGN KEY (venta_cliente) REFERENCES clientes(cliente_id)
);

create table detalle_ventas(
    detalle_id INT AUTO_INCREMENT PRIMARY KEY,
    detalle_venta INTEGER,
    detalle_producto INTEGER,
    detalle_cantidad INTEGER,
    detalle_situacion SMALLINT DEFAULT 1 NOT NULL,
    FOREIGN KEY (detalle_venta) REFERENCES ventas (venta_id),
    FOREIGN KEY (detalle_producto) REFERENCES productos (producto_id)
);

-- INSERTS

INSERT INTO productos (producto_nombre, producto_precio) VALUES 
('MANZANAS', 10.00),
('PERAS', 15.50),
('FRESAS', 7.25),
('UVA', 22.00);

INSERT INTO clientes (cliente_nombre) VALUES 
('ARMANDO PEREZ'),
('SERGIO CARCAMO'),
('DIEGO SOLARES');

INSERT INTO ventas (venta_fecha, venta_cliente, venta_situacion) VALUES 
('2024-08-01 10:00:00', 1, 1),
('2024-08-02 11:30:00', 2, 1),
('2024-08-03 14:45:00', 1, 1),
('2024-08-04 09:00:00', 3, 1),
('2024-08-05 16:15:00', 1, 1),
('2024-08-06 12:00:00', 2, 1);

INSERT INTO detalle_ventas (detalle_venta, detalle_producto, detalle_cantidad, detalle_situacion) VALUES 
(1, 1, 2, 1),
(1, 2, 1, 1),
(3, 2, 3, 1),
(3, 3, 1, 1),
(5, 1, 1, 1),
(5, 4, 2, 1),
(6, 1, 1, 1);

