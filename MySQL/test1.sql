CREATE TABLE marca	(
	idMarca INT PRIMARY KEY AUTO_INCREMENT,
	marca VARCHAR(20),
    modelo VARCHAR(50)
);
CREATE TABLE desktop(
	precioUnitario FLOAT,
    preciOferta FLOAT,
    imagenIp VARCHAR(20),
    imagenO VARCHAR(20)
);
CREATE TABLE notebook(
	precioUnitario FLOAT,
    preciOferta FLOAT,
    imagenIp VARCHAR(20),
    imagenO VARCHAR(20),
    stock SMALLINT
);
CREATE TABLE impresora(
	precioUnitario FLOAT,
    preciOferta FLOAT,
    imagenIp VARCHAR(20),
    imagenO VARCHAR(20),
    stock SMALLINT
);
ALTER TABLE desktop  ADD stock SMALLINT;

CREATE TABLE descuento(
	iDescuento INT PRIMARY KEY AUTO_INCREMENT,
    descripcion varchar(500),
    monto INT NOT NULL
);

CREATE TABLE condicion_iva(
	idCondicionIva int,
    condicion varchar(50)
);

CREATE TABLE formas_pago(
	idFormaPago INT auto_increment primary key,
    formaPago VARCHAR(50),
    descripcion VARCHAR(50)
);
ALTER TABLE condicion_iva modify idCondicionIva int auto_increment primary key;

CREATE TABLE formas_envio(
	idFormaEnvio INT AUTO_INCREMENT PRIMARY KEY,
    formaEnvio VARCHAR(25),
    descripcion VARCHAR(50),
    costo FLOAT NOT NULL
);

CREATE TABLE administrador(
	idAdmin INT AUTO_INCREMENT PRIMARY KEY,
    nombreAdmin VARCHAR(15),
    password VARCHAR(15) 
);

CREATE TABLE producto(
	idProducto INT AUTO_INCREMENT PRIMARY KEY,
    idMarca INT,
    marca VARCHAR(20),
    modelo VARCHAR(50),
    FOREIGN KEY (idMarca) REFERENCES marca(idMarca)
);

CREATE TABLE usuario(
	idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nombreUsuario VARCHAR(15) NOT NULL,
    password VARCHAR(15) NOT NULL,
    sexo VARCHAR(20),
    email VARCHAR(30),
    telefono INT,
    pais VARCHAR(30),
    provincia VARCHAR(30),
    localidad VARCHAR(30),
    barrio VARCHAR(30),
    direccion VARCHAR(50)
);

CREATE TABLE cliente(
	idCliente INT AUTO_INCREMENT PRIMARY KEY,
    idCondicionIva INT,
    idVenta INT,
    nombres VARCHAR(30),
    apellidos VARCHAR(40),
    nroDni MEDIUMINT,
    condicionIva VARCHAR(20)
);

CREATE TABLE venta(
	idVenta INT AUTO_INCREMENT PRIMARY KEY,
    idProducto INT,
    iDescuento INT,
    idCliente INT,
    descripcion VARCHAR(50),
    FOREIGN KEY (idProducto) REFERENCES producto(idProducto),
    FOREIGN KEY (iDescuento) REFERENCES descuento(iDescuento),
    FOREIGN KEY (idCliente) REFERENCES cliente(idCliente)
);

ALTER TABLE cliente ADD FOREIGN KEY (idVenta) REFERENCES venta(idVenta);

CREATE TABLE factura(
	idFactura INT AUTO_INCREMENT PRIMARY KEY,
    idCliente INT,
    idVenta INT,
    idFormaPago INT,
    idFormaEnvio INT,
    fecha DATETIME,
    FOREIGN KEY (idCliente) REFERENCES cliente(idCliente),
    FOREIGN KEY (idVenta) REFERENCES venta(idVenta),
    FOREIGN KEY (idFormaPago) REFERENCES formas_pago(idFormaPago),
    FOREIGN KEY (idFormaEnvio) REFERENCES formas_envio(idFormaEnvio)
);

CREATE TABLE detalles_factura(
	iDetalleFactura INT AUTO_INCREMENT PRIMARY KEY,
    idFactura INT,
    idProducto INT,
    idVenta INT,
    precio FLOAT,
    cantidad INT,
    FOREIGN KEY (idFactura) REFERENCES factura(idFactura),
    FOREIGN KEY (idProducto) REFERENCES producto(idProducto),
    FOREIGN KEY (idVenta) REFERENCES venta(idVenta)
);

ALTER TABLE cliente ADD FOREIGN KEY (idCondicionIva) REFERENCEs condicion_iva(idCondicionIva);

