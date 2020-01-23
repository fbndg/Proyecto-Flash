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


