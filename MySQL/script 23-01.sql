/* BORRANDO ADMIN */
/* ALTER TABLE roles MODIFY idAdmin ;

DROP TABLE IF EXISTS administradores;*/
ALTER TABLE `flashtore`.`roles` 
DROP FOREIGN KEY `roles_administradores`;
ALTER TABLE `flashtore`.`roles` 
CHANGE COLUMN `idAdmin` `idAdmin` INT(10) NULL DEFAULT NULL ,
DROP INDEX `roles_administradores` ;

ALTER TABLE `flashtore`.`roles` 
ADD CONSTRAINT `roles_administradores`
  FOREIGN KEY ()
  REFERENCES `flashtore`.`administradores` ();
  
/* BORRANDO CLIENTE */

ALTER TABLE `flashtore`.`detallesfactura` 
DROP FOREIGN KEY `detallesfactura_clientes`;
ALTER TABLE `flashtore`.`detallesfactura` 
CHANGE COLUMN `idCliente` `idCliente` INT(10) NULL DEFAULT NULL ,
DROP INDEX `detallesfactura_clientes` ;
;
ALTER TABLE `flashtore`.`detallesfactura` 
ADD CONSTRAINT `detallesfactura_clientes`
  FOREIGN KEY ()
  REFERENCES `flashtore`.`clientes` ();
  
ALTER TABLE `flashtore`.`roles` 
DROP FOREIGN KEY `roles_clientes`;
ALTER TABLE `flashtore`.`roles` 
DROP INDEX `roles_clientes` ;
;
ALTER TABLE `flashtore`.`roles` 
ADD CONSTRAINT `roles_clientes`
  FOREIGN KEY ()
  REFERENCES `flashtore`.`clientes` ();
  
DROP TABLE IF EXISTS clientes;

/* EDITANDO roles */
ALTER TABLE roles DROP nombreUsuario;
ALTER TABLE roles DROP nombreUsuario;
ALTER TABLE roles DROP nombreUsuario;
ALTER TABLE roles DROP nombreUsuario;
ALTER TABLE roles DROP nombreUsuario;
ALTER TABLE roles DROP nombreUsuario;

/* AGREGANDO IMAGENES*/
ALTER TABLE productos ADD imagenO VARCHAR(20) NULL;
ALTER TABLE productos ADD imagenP VARCHAR(20) NULL;
UPDATE productos 
	SET imagenP = "imp6.png",	
    imagenO = "imp6copia.png"
	WHERE idProducto = 1;
UPDATE productos 
	SET idCategoria = 2
	WHERE idProducto = 12;
ALTER TABLE productos ADD nombreModelo VARCHAR(100) NULL;
ALTER TABLE productos ADD modeloNumber VARCHAR(100) NULL;
ALTER TABLE productos MODIFY idFactura int unsigned null;
ALTER TABLE productos MODIFY imagenP VARCHAR(50) NULL;
ALTER TABLE productos MODIFY imagenO VARCHAR(50) NULL;
DELETE FROM productos WHERE idProducto = 94;

-- ********************************************************************
/* 13-02 */
-- ********************************************************************
create table tiposDoc(
idTipoDoc int auto_increment not null,
tipoDoc varchar(20) not null,
primary key (idTipoDoc)
);
-- --------------------------
create table estadosCivil(
idEstadoCivil int auto_increment not null,
estadoCivil varchar(25) not null,
primary key (idEstadoCivil)
);
-- --------------------------
create table localidades(
idLocalidad int auto_increment not null,
localidad varchar(30) not null,
primary key (idLocalidad)
);
-- --------------------------
create table nacionalidades(
idNacionalidad int auto_increment not null,
nacionalidad varchar(30) not null,
primary key (idNacionalidad)
);
-- --------------------------
create table imagenes(
idImagen int auto_increment not null,
imagen varchar(50) not null,
primary key (idImagen)
);
-- --------------------------
ALTER TABLE categorias DROP COLUMN idProducto;
-- --------------------------
create table modelos(
idModelo int auto_increment not null,
modelo varchar(30) not null,
primary key (idModelo)
);  
-- --------------------------
ALTER TABLE marcas DROP COLUMN modelo3;
ALTER TABLE marcas DROP COLUMN modelo2;
ALTER TABLE marcas DROP COLUMN modelo1;
ALTER TABLE `marcas` DROP FOREIGN KEY `marcas_categorias`;
ALTER TABLE marcas DROP COLUMN idCategoria;
-- --------------------------
INSERT INTO localidades VALUES ('1', 'all');
-- --------------------------
create table provincias(
idProvincia int auto_increment not null,
provincia varchar(30) not null,
idLocalidad int not null,
primary key (idProvincia),
CONSTRAINT provincias_localidades FOREIGN KEY (idLocalidad) references localidades (idLocalidad)
);
-- --------------------------
ALTER TABLE formasenvio DROP COLUMN fechaEnvio;
ALTER TABLE `formasenvio` DROP FOREIGN KEY `formasenvio_estados`;
ALTER TABLE formasenvio DROP COLUMN idEstado;
-- --------------------------
ALTER TABLE productos DROP FOREIGN KEY `productos_facturas`;
ALTER TABLE productos DROP COLUMN idFactura;
ALTER TABLE productos DROP COLUMN imagenO;
ALTER TABLE productos DROP COLUMN imagenP;
ALTER TABLE productos ADD borrar TINYINT;
ALTER TABLE productos ADD idModelo int null;
ALTER TABLE productos ADD CONSTRAINT productos_modelos FOREIGN KEY (idModelo) references modelos (idModelo);
ALTER TABLE productos ADD idImagen int null;
ALTER TABLE productos ADD CONSTRAINT productos_imagenes FOREIGN KEY (idImagen) references imagenes (idImagen);
-- --------------------------
ALTER TABLE detallesfactura DROP FOREIGN KEY `detallesfactura_formaspago`;
ALTER TABLE detallesfactura DROP COLUMN idFormaPago;
ALTER TABLE detallesfactura DROP FOREIGN KEY `detallesfactura_formasenvio`;
ALTER TABLE detallesfactura DROP COLUMN idFormaEnvio;
ALTER TABLE detallesfactura DROP FOREIGN KEY `detallesfactura_clientes`;
ALTER TABLE detallesfactura DROP COLUMN idCliente;
-- --------------------------

ALTER TABLE facturas MODIFY idCondicionIva int(10) unsigned not null;
-- no funciona
ALTER TABLE facturas ADD CONSTRAINT facturas_condicioniva FOREIGN KEY (idCondicionIva) references condicioniva (idCondicionIva);
-- 

ALTER TABLE facturas ADD idFormaPago int not null;

-- no funciona
ALTER TABLE facturas ADD CONSTRAINT facturas_formapago FOREIGN KEY (idFormaPago) references formaspago (idFormaPago);
-- 

ALTER TABLE facturas ADD idDescuento int not null;
ALTER TABLE facturas ADD idFormaEnvio int not null;


-- despues
ALTER TABLE facturas ADD idCliente int not null;
ALTER TABLE facturas ADD CONSTRAINT facturas_clientes FOREIGN KEY (idCliente) references clientes (idCliente);
ALTER TABLE facturas MODIFY iDetalleFactura int(10) unsigned NOT NULL;
ALTER TABLE facturas ADD CONSTRAINT `facturas_detallesfactura` FOREIGN KEY (`iDetalleFactura`) REFERENCES detallesfactura(iDetalleFactura);
ALTER TABLE facturas ADD `created_at` timestamp NULL DEFAULT NULL;
ALTER TABLE facturas ADD `updated_at` timestamp NULL DEFAULT NULL;
ALTER TABLE facturas ADD CONSTRAINT `facturas_condicioniva` FOREIGN KEY (`idCondicionIva`) REFERENCES condicioniva(idCondicionIva);
ALTER TABLE facturas MODIFY idFormaPago int(10) unsigned NOT NULL;
ALTER TABLE facturas ADD CONSTRAINT `facturas_formaspago` FOREIGN KEY (`idFormaPago`) REFERENCES formaspago(idFormaPago);
ALTER TABLE facturas MODIFY idDescuento int(10) unsigned NOT NULL;
ALTER TABLE facturas ADD CONSTRAINT `facturas_descuentos` FOREIGN KEY (`idDescuento`) REFERENCES descuentos(iDescuento);
ALTER TABLE facturas MODIFY `idFormaEnvio` int(10) unsigned NOT NULL;
ALTER TABLE facturas ADD CONSTRAINT `facturas_formasenvio` FOREIGN KEY (`idFormaEnvio`) REFERENCES formasenvio(idFormaEnvio);



-- // ADD CLIENTES // --
ALTER TABLE clientes ADD CONSTRAINT `clientes_users` FOREIGN KEY (`idUser`) REFERENCES users(id);
ALTER TABLE clientes ADD COLUMN idTipoDoc int(10) DEFAULT NULL after apellidos;
ALTER TABLE clientes ADD CONSTRAINT `clientes_tiposdoc` FOREIGN KEY (`idTipoDoc`) REFERENCES `tiposdoc` (`idTipoDoc`);
ALTER TABLE clientes ADD COLUMN idEstadoCivil int(10) DEFAULT NULL after nroDoc;
ALTER TABLE clientes ADD CONSTRAINT `clientes_estadoscivil` FOREIGN KEY (`idEstadoCivil`) REFERENCES estadoscivil(idEstadoCivil);
ALTER TABLE clientes ADD COLUMN idNacionalidad int(10) DEFAULT NULL after idEstadoCivil;
ALTER TABLE clientes ADD CONSTRAINT `clientes_nacionalidades` FOREIGN KEY (`idNacionalidad`) REFERENCES nacionalidades(idNacionalidad);
ALTER TABLE clientes ADD COLUMN idSexo int(10) DEFAULT NULL after idNacionalidad;
ALTER TABLE clientes ADD CONSTRAINT `clientes_sexos` FOREIGN KEY (`idSexo`) REFERENCES sexos(idSexo);
ALTER TABLE clientes ADD COLUMN idPais int(10) DEFAULT NULL after idSexo;
ALTER TABLE clientes ADD CONSTRAINT `clientes_paises` FOREIGN KEY (`idPais`) REFERENCES paises(idPais);
ALTER TABLE clientes ADD COLUMN idPais int(10) DEFAULT NULL after telefono;
ALTER TABLE clientes ADD CONSTRAINT `clientes_paises` FOREIGN KEY (`idPais`) REFERENCES paises(idPais);
ALTER TABLE clientes ADD COLUMN idProvincia int(10) DEFAULT NULL after idPais;
ALTER TABLE clientes ADD CONSTRAINT `clientes_provincias` FOREIGN KEY (`idProvincia`) REFERENCES provincias(idProvincia);
ALTER TABLE clientes ADD COLUMN idLocalidad int(10) DEFAULT NULL after idProvincia;
ALTER TABLE clientes ADD CONSTRAINT `clientes_localidades` FOREIGN KEY (`idLocalidad`) REFERENCES localidades(idLocalidad);

-- // DROP CLIENTES // --
ALTER TABLE flashtore.clientes DROP COLUMN estadoCivil;
ALTER TABLE flashtore.clientes DROP COLUMN nacionalidad;
ALTER TABLE flashtore.clientes DROP COLUMN sexo;
ALTER TABLE flashtore.clientes DROP COLUMN email;
ALTER TABLE flashtore.clientes DROP COLUMN pais;
ALTER TABLE flashtore.clientes DROP COLUMN provincia;
ALTER TABLE flashtore.clientes DROP COLUMN localidad;
ALTER TABLE flashtore.clientes DROP FOREIGN KEY clientes_roles;
ALTER TABLE flashtore.clientes DROP COLUMN idRol;


-- // MODIFY CLIENTES // --
ALTER TABLE clientes MODIFY idUser bigint(20) NOT NULL;
ALTER TABLE clientes MODIFY idTipoDoc int(10) DEFAULT NULL;
ALTER TABLE tiposdoc MODIFY idTipoDoc int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE users MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
ALTER TABLE clientes MODIFY idSexo int(10) unsigned DEFAULT NULL;
-- //

ALTER TABLE flashtore.clientes add INDEX `clientes_tiposdoc`;
alter table flashtore.clientes add CONSTRAINT `clientes_tiposdoc` 
	FOREIGN KEY (`idTipoDoc`)
	REFERENCES `flashtore`.`tiposdoc` (`idTipoDoc`);
ALTER TABLE clientes DROP FOREIGN KEY `clientes_condicioniva`;
ALTER TABLE clientes DROP COLUMN idCondicionIva;
ALTER TABLE clientes DROP FOREIGN KEY `clientes_productos`;
ALTER TABLE clientes DROP COLUMN idProducto;
ALTER TABLE clientes DROP COLUMN tipoDoc;
ALTER TABLE clientes ADD idTipoDoc int not null;
ALTER TABLE clientes ADD CONSTRAINT clientes_tiposdoc FOREIGN KEY (idTipoDoc) REFERENCES tiposdoc (idTipoDoc);
-- // // --

CREATE TABLE `sexos` (
  `idSexo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`idSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;


-- // next // -- 

ALTER TABLE users ADD COLUMN idRol int(10) unsigned NOT NULL DEFAULT (1) after id;
ALTER TABLE facturas ADD CONSTRAINT `facturas_detallesfactura` FOREIGN KEY (`iDetalleFactura`) REFERENCES detallesfactura(iDetalleFactura);

-- ///
-- ///																				-- ///
-- ///
-- ///																				-- ///						-- ///
-- ///
-- ///																				-- ///
-- ///

-- // ROL // -- 
ALTER TABLE roles DROP COLUMN nombreAdmin;
ALTER TABLE roles DROP COLUMN passwordAdmin;
ALTER TABLE roles DROP FOREIGN KEY roles_usuarios;
ALTER TABLE roles DROP COLUMN idUsuario;
ALTER TABLE roles DROP COLUMN nombreUsuario;
ALTER TABLE roles DROP COLUMN passwordUsuario;
ALTER TABLE roles DROP FOREIGN KEY roles_clientes;
ALTER TABLE roles DROP COLUMN idCliente;
ALTER TABLE roles DROP COLUMN nombres;
ALTER TABLE roles DROP COLUMN apellidos;
ALTER TABLE roles DROP FOREIGN KEY roles_administradores;
ALTER TABLE roles DROP COLUMN idAdmin;
ALTER TABLE roles ADD COLUMN rol varchar(21) NOT NULL;
DELETE FROM roles WHERE idRol > 4;

ALTER TABLE productos ADD `created_at` timestamp NULL DEFAULT NULL;
ALTER TABLE productos ADD `updated_at` timestamp NULL DEFAULT NULL;














