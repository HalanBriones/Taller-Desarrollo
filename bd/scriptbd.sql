-- MySQL Script generated by MySQL Workbench
-- Mon Jul 20 20:43:49 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`estado_civil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estado_civil` (
  `idEstado_Civil` INT(11) NOT NULL,
  `nombre_estado` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstado_Civil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`region` (
  `idRegion` INT(11) NOT NULL,
  `numero_region` VARCHAR(100) NULL DEFAULT NULL,
  `nombre_region` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idRegion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Ciudad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ciudad` (
  `idCiudad` INT NOT NULL,
  `nombre_ciudad` VARCHAR(100) NULL,
  `region_idRegion` INT(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  CONSTRAINT `fk_Ciudad_region1`
    FOREIGN KEY (`region_idRegion`)
    REFERENCES `mydb`.`region` (`idRegion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table `mydb`.`postulante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`postulante` (
  `RUT` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NULL DEFAULT NULL,
  `segundo_nombre` VARCHAR(100) NULL DEFAULT NULL,
  `apellido_paterno` VARCHAR(100) NULL DEFAULT NULL,
  `apellido_materno` VARCHAR(100) NULL DEFAULT NULL,
  `fecha_nacimiento` VARCHAR(100) NULL DEFAULT NULL,
  `sexo` VARCHAR(45) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `nivel_estudio` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  `telefono_emergencia` VARCHAR(45) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NULL DEFAULT NULL,
  `enfermedades` TEXT NULL DEFAULT NULL,
  `talla_superior` VARCHAR(100) NULL DEFAULT NULL,
  `talla_inferior` VARCHAR(100) NULL DEFAULT NULL,
  `talla_calzado` VARCHAR(100) NULL DEFAULT NULL,
  `Estado_Civil_idEstado_Civil` INT(11) NOT NULL,
  `Ciudad_idCiudad` INT NOT NULL,
  `direccion` VARCHAR(100) NULL,
  `numero` INT NULL,
  PRIMARY KEY (`RUT`),
  CONSTRAINT `fk_Postulante_Estado_Civil1`
    FOREIGN KEY (`Estado_Civil_idEstado_Civil`)
    REFERENCES `mydb`.`estado_civil` (`idEstado_Civil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_postulante_Ciudad1`
    FOREIGN KEY (`Ciudad_idCiudad`)
    REFERENCES `mydb`.`Ciudad` (`idCiudad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `mydb`.`documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`documentos` (
  `idDocumentos` INT(11) NOT NULL,
  `nombre_documento` VARCHAR(100) NULL DEFAULT NULL,
  `fecha_doc` DATE NULL DEFAULT NULL,
  `descripcion` VARCHAR(100) NULL DEFAULT NULL,
  `Postulante_RUT` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idDocumentos`),
  CONSTRAINT `fk_Documentos_Postulante1`
    FOREIGN KEY (`Postulante_RUT`)
    REFERENCES `mydb`.`postulante` (`RUT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `mydb`.`periodo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`periodo` (
  `idPeriodo` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATE NULL DEFAULT NULL,
  `fecha_fin` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`idPeriodo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`postulacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`postulacion` (
  `idPostulacion` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo_postulacion` VARCHAR(100) NULL DEFAULT NULL,
  `fecha_postulacion` DATE NULL DEFAULT NULL,
  `estado_postulacion` VARCHAR(100) NULL DEFAULT NULL,
  `Postulante_RUT` VARCHAR(100) NOT NULL,
  `Periodo_idPeriodo` INT(11) NOT NULL,
  PRIMARY KEY (`idPostulacion`),
  CONSTRAINT `fk_Postulacion_Periodo1`
    FOREIGN KEY (`Periodo_idPeriodo`)
    REFERENCES `mydb`.`periodo` (`idPeriodo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Postulacion_Postulante1`
    FOREIGN KEY (`Postulante_RUT`)
    REFERENCES `mydb`.`postulante` (`RUT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;